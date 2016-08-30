<?php 
class Users{
 	
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}	
	 

	public function user_exists($username) {
	
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `users` WHERE `user_name`= ?");
		$query->bindValue(1, $username);
	
		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}
	 
	public function email_exists($email) {

		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `users` WHERE `user_email`= ?");
		$query->bindValue(1, $email);
	
		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}

	public function register($username, $password, $email, $cat, $comp_name, $number, $city, $pass){
		global $bcrypt;
		
		$time 		= time();
		$ip 		= $_SERVER['REMOTE_ADDR'];
		//$email_code = sha1($username + microtime());
		$password = $bcrypt->genHash($password);
	 
		$query 	= $this->db->prepare("INSERT INTO `users` (`user_name`, `user_pass`, `user_email`,  `user_comp_name`, `user_number`, `user_time`, `user_ip`, `client_cat_id`, `city`,`pass` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
	 
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
		$query->bindValue(3, $email);
		//$query->bindValue(4, $email_code);
		$query->bindValue(4, $comp_name);
		$query->bindValue(5, $number);
		$query->bindValue(6, $time);
		$query->bindValue(7, $ip);
		$query->bindValue(8, $cat);
		$query->bindValue(9, $city);
		$query->bindValue(10, $pass);
		
		
	 
		try{
			$query->execute();
                         
                        /*$mailto = $email;
                        $subject="Your confirmation link here";
                        
                        $message_body="Please activate your account".$username.",";
                        $message_body.="\r\nThank you for registering with us. Please visit the link below so we can activate your account:\r\n\r\n";
                        $message_body.="Please visit the link below so we can activate your account:\r\n\r\nhttp://www.searchmypage.in/admin/activate.php?email=" . $mailto . "&email_code=" . $email_code . "\r\n\r\n-- Example team";
	                 $from="some-name@yourdomain.com";
			 mail($mailto, $subject, $message_body, "From:".$from);*/
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function register_free($username, $password, $email, $cat, $comp_name, $number, $city, $pass, $user_aprov = 1, $admin_aprov = 1){
		global $bcrypt;
		
		$time 		= time();
		$ip 		= $_SERVER['REMOTE_ADDR'];
		//$email_code = sha1($username + microtime());
		$password = $bcrypt->genHash($password);
	 
		$query 	= $this->db->prepare("INSERT INTO `users` (`user_name`, `user_pass`, `user_email`,  `user_comp_name`, `user_number`, `user_time`, `user_ip`, `client_cat_id`, `city`, `pass`, `admin_confirmed`, `user_confirmed`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
	 
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
		$query->bindValue(3, $email);
		//$query->bindValue(4, $email_code);
		$query->bindValue(4, $comp_name);
		$query->bindValue(5, $number);
		$query->bindValue(6, $time);
		$query->bindValue(7, $ip);
		$query->bindValue(8, $cat);
		$query->bindValue(9, $city);
		$query->bindValue(10, $pass);
		$query->bindValue(11, $user_aprov);
		$query->bindValue(12, $admin_aprov);
		
		
	 
		try{
			$query->execute();
                         
                        /*$mailto = $email;
                        $subject="Your confirmation link here";
                        
                        $message_body="Please activate your account".$username.",";
                        $message_body.="\r\nThank you for registering with us. Please visit the link below so we can activate your account:\r\n\r\n";
                        $message_body.="Please visit the link below so we can activate your account:\r\n\r\nhttp://www.searchmypage.in/admin/activate.php?email=" . $mailto . "&email_code=" . $email_code . "\r\n\r\n-- Example team";
	                 $from="some-name@yourdomain.com";
			 mail($mailto, $subject, $message_body, "From:".$from);*/
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}

	public function activate($email, $email_code) {
		
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `users` WHERE `user_email` = ? AND `user_code` = ? AND `user_confirmed` = ?");

		$query->bindValue(1, $email);
		$query->bindValue(2, $email_code);
		$query->bindValue(3, 0);

		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				
				$query_2 = $this->db->prepare("UPDATE `users` SET `user_confirmed` = ? WHERE `user_email` = ?");

				$query_2->bindValue(1, 1);
				$query_2->bindValue(2, $email);				

				$query_2->execute();
				return true;

			}else{
				return false;
			}

		} catch(PDOException $e){
			die($e->getMessage());
		}

	}


	public function email_confirmed($username) {

		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `users` WHERE `user_name`= ? AND `user_confirmed` = ?");
		$query->bindValue(1, $username);
		$query->bindValue(2, 1);
		
		try{
			
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch(PDOException $e){
			die($e->getMessage());
		}

	}

	public function login($username, $password) {

		$query = $this->db->prepare("SELECT `user_pass`, `user_id` FROM `users` WHERE `user_name` = ?");
		$query->bindValue(1, $username);
		
		try{
			
			$query->execute();
			$data 				= $query->fetch();
			$stored_password 	= $data['user_pass'];
			$id   				= $data['user_id'];
			
			if($stored_password === sha1($password)){
				return $id;	
			}else{
				return false;	
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}

	public function userdata($id) {

		$query = $this->db->prepare("SELECT * FROM `users` WHERE `user_id`= ?");
		$query->bindValue(1, $id);

		try{

			$query->execute();

			return $query->fetch();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	  	  	 
	public function get_users() {

		$query = $this->db->prepare("SELECT * FROM `users`");
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		return $query->fetchAll();

	}
	
	public function get_user() {

		$query = $this->db->prepare("SELECT * FROM `users` ORDER BY `time` DESC");
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		return $query->fetchAll();

	}
	
	
	public function activate_admin($status, $id) {
		
				
				$query_2 = $this->db->prepare("UPDATE `users` SET `admin_confirmed` = ?, `user_confirmed` = ? WHERE `user_id` = ?");

				$query_2->bindValue(1, 1);
				$query_2->bindValue(2, 1);
				$query_2->bindValue(3, $id);				

				

			try{
			$query_2->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;

	}
	
	public function deactivate_admin($status, $id) {
		
				
				$query_2 = $this->db->prepare("UPDATE `users` SET `admin_confirmed` = ?, `user_confirmed` = ? WHERE `user_id` = ?");

				$query_2->bindValue(1, 0);
				$query_2->bindValue(2, 0);
				$query_2->bindValue(3, $id);				

				

			try{
			$query_2->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;

	}
	
	
	
	
	public function email($id) {
		
		$query = $this->db->prepare("SELECT * FROM `users` WHERE `user_id`= ?");
		$query->bindValue(1, $id);
		
		
		try{
			
			$query->execute();
			$rows = $query->fetchAll();
		
				foreach($rows as $row)
				{
				$email = $row['user_email'];
				$username = $row['user_name'];
				$pass = $row['pass'];
				
				$mailto = $email;
                        $subject="Registration Successful";
                        
                        $message_body="your account has been activated ".$username.",";
                        $message_body.="\r\nThank you for registering with us";
						$message_body.="\r\n Your Email id and Password are:";
						$message_body.="\r\n" . $email;
						$message_body.="\r\n" . $pass;
                        
	                 $from="info@searchmypage.in";
			 mail($mailto, $subject, $message_body, "From:".$from);
			
			return $id;
				}

		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function user_id_exists($id) {
	
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `company_info` WHERE `user_id`= ?");
		$query->bindValue(1, $id);
	
		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function user_info_register($id, $address, $info, $category, $subcat) {
		
		$query 	= $this->db->prepare("INSERT INTO `company_info` (`cat_id`, `info_address`, `info_information`, `user_id`, `subc_id`) VALUES (?, ?, ?, ?, ?) ");
		
		$query->bindValue(1, $category);
		$query->bindValue(2, $address);
		$query->bindValue(3, $info);
		$query->bindValue(4, $id);
		$query->bindValue(5, $subcat);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function user_info_register_silver($user_id, $address, $info, $category, $subcat, $url, $tube, $url, $tube) {
		
		$query 	= $this->db->prepare("INSERT INTO `company_info` (`cat_id`, `info_address`, `info_information`, `user_id`, `subc_id`, `info_url`, `info_tube`) VALUES (?, ?, ?, ?, ?, ?, ?) ");
		
		$query->bindValue(1, $category);
		$query->bindValue(2, $address);
		$query->bindValue(3, $info);
		$query->bindValue(4, $user_id);
		$query->bindValue(5, $subcat);
		$query->bindValue(6, $url);
		$query->bindValue(7, $tube);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function user_info_register_platinum($user_id, $address, $info, $category, $subcat, $url, $tube, $prod_desc, $timing, $staff) {
		
		$query 	= $this->db->prepare("INSERT INTO `company_info` (`cat_id`, `info_address`, `info_information`, `user_id`, `subc_id`, `info_url`, `info_tube`, `info_prod_desc`, `info_timing`, `info_staff`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
		
		$query->bindValue(1, $category);
		$query->bindValue(2, $address);
		$query->bindValue(3, $info);
		$query->bindValue(4, $user_id);
		$query->bindValue(5, $subcat);
		$query->bindValue(6, $url);
		$query->bindValue(7, $tube);
		$query->bindValue(8, $prod_desc);
		$query->bindValue(9, $timing);
		$query->bindValue(10, $staff);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function user_info_img($targetFile, $id, $plan_id) {
		
		$query 	= $this->db->prepare("INSERT INTO `info_images` (`info_img`, `user_id`,`plan_id`) VALUES (?, ?, ?) ");
		
		$query->bindValue(1, $targetFile);
		$query->bindValue(2, $id);
		$query->bindValue(3, $plan_id);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function user_info_pdf($targetFile, $id, $plan_id) {
		
		$query 	= $this->db->prepare("INSERT INTO `info_pdf` (`info_pdf`, `user_id`,`plan_id`) VALUES (?, ?, ?) ");
		
		$query->bindValue(1, $targetFile);
		$query->bindValue(2, $id);
		$query->bindValue(3, $plan_id);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function user_update_logo($targetFile, $id) {
		
		$query 	= $this->db->prepare("UPDATE `company_info` SET `info_logo`=? WHERE `user_id`=?");
		
		$query->bindValue(1, $targetFile);
		$query->bindValue(2, $id);
		
		try{
			$query->execute();
 		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function catdata($planid) {

		$query = $this->db->prepare("SELECT * FROM `client_cat` WHERE `client_cat_id`= ?");
		$query->bindValue(1, $planid);

		try{

			$query->execute();

			return $query->fetch();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function cat_select($string) {
		
		$result = $this->db->prepare("SELECT cat_id, cat_name FROM categories WHERE cat_name LIKE :term ORDER BY cat_name ASC LIMIT 0,30");
		$result->bindvalue(':term','%'.$string.'%',PDO::PARAM_STR);
		try{
			
			$result->execute();
			return $result->fetchAll(PDO::FETCH_ASSOC);
		
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	public function subcat_all($catid) {

		$query = $this->db->prepare("SELECT categories.cat_id,categories.cat_name,subcategories.subc_id,subcategories.subc_name FROM subcategories LEFT JOIN categories ON categories.cat_id=subcategories.cat_id WHERE categories.cat_id=?");
		$query->bindValue(1, $catid);

		try{

			$query->execute();

			return $query->fetchAll();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function get_new_users() {

		$query = $this->db->prepare("SELECT new_user.new_id, new_user.new_name, new_user.new_time, client_cat.client_cat_name
FROM `new_user`
LEFT JOIN `client_cat` ON new_user.client_cat_id = client_cat.client_cat_id
WHERE new_user.new_status =0
ORDER BY new_user.new_id DESC
LIMIT 0 , 6");
		

		try{

			$query->execute();

			return $query->fetchAll();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function count_new_user() {
		
		$query = $this->db->prepare("SELECT COUNT(`new_id`) FROM `new_user` WHERE `new_status`=0");
		
		
		try{
			$query->execute();
			$result = $query->fetchColumn();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		
	}
	
	public function register_new($username, $cat, $user_id){
		global $bcrypt;
		
		$time 		= time();
		$ip 		= $_SERVER['REMOTE_ADDR'];
		//$email_code = sha1($username + microtime());
		
	 
		$query 	= $this->db->prepare("INSERT INTO `new_user` (`new_name`, `client_cat_id`, `new_time`, `user_id`) VALUES (?, ?, ?, ?) ");
	 
		$query->bindValue(1, $username);
		$query->bindValue(2, $cat);
		$query->bindValue(3, $time);
		$query->bindValue(4, $user_id);
		
		
	 
		try{
			$query->execute();
                         
                        /*$mailto = $email;
                        $subject="Your confirmation link here";
                        
                        $message_body="Please activate your account".$username.",";
                        $message_body.="\r\nThank you for registering with us. Please visit the link below so we can activate your account:\r\n\r\n";
                        $message_body.="Please visit the link below so we can activate your account:\r\n\r\nhttp://www.searchmypage.in/admin/activate.php?email=" . $mailto . "&email_code=" . $email_code . "\r\n\r\n-- Example team";
	                 $from="some-name@yourdomain.com";
			 mail($mailto, $subject, $message_body, "From:".$from);*/
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function get_last_users() {

		$query = $this->db->prepare("SELECT * FROM users ORDER BY user_id DESC LIMIT 1 ");
		$query->execute();
		
		try{
			$result = $query->fetchColumn();
			$qus = $query->rowCount();
			if($qus == 0)
			{
			return 1;
			}elseif($qus != 0){
				return $result + 1;
			}
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_status($new_id) {
		
		$query = $this->db->prepare("UPDATE `new_user` SET `new_status` = 1 WHERE `new_id` = ?");
		$query->bindValue(1, $new_id);
		
		
		try{
			
			$query->execute();
		
		}catch(PDOException $e){
			
			die($e->getMessage());
		}	
	}
	
	
	
}


