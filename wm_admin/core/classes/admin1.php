<?php
class Admin {
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}
	
	public function login($username, $password) {
	
		global $bcrypt;

		$query = $this->db->prepare("SELECT `admin_pass`, `admin_id` FROM `s_admin` WHERE `admin_name` = ?");
		$query->bindValue(1, $username);
		
		try{
			
			$query->execute();
			$data 				= $query->fetch();
			$stored_password 	= $data['admin_pass'];
			$id   				= $data['admin_id'];
			
			if($bcrypt->verify($password, $stored_password) === true){ // using the verify method to compare the password with the stored hashed password.
				return $id;	// returning the user's id.
			}else{
				return false;	
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}
	
	public function admindata($id) {

		$query = $this->db->prepare("SELECT * FROM `s_admin` WHERE `admin_id`= ?");
		$query->bindValue(1, $id);

		try{

			$query->execute();

			return $query->fetch();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function get_plancat() {
		
		$query = $this->db->prepare("SELECT * FROM `client_cat`");
		
		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	
	public function get_cat() {
		
		$query = $this->db->prepare("SELECT * FROM `categories`");
		
		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}
	
	//SELECT users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM users LEFT JOIN client_cat ON client_cat.client_cat_id = users.client_cat_id
	
	public function get_all_registerd_details() {
		
		$query = $this->db->prepare("SELECT users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM users LEFT JOIN client_cat ON client_cat.client_cat_id = users.client_cat_id");
		
		
		try{
			
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	//SELECT users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id
	
	public function get_all_registerd_cat() {
		
		$query = $this->db->prepare("SELECT client_cat.client_cat_id, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id");
			
		
		try{
			
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	//SELECT users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM users LEFT JOIN client_cat ON client_cat.client_cat_id = users.client_cat_id WHERE users.user_id=?
	
	public function get_all_registerd_modal($user_id) {
		
		$query = $this->db->prepare("SELECT categories.cat_id, categories.cat_name, company_info.info_logo, company_info.info_address, users.user_id, users.user_confirmed, users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name
FROM client_cat
LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id
RIGHT JOIN company_info ON company_info.user_id = users.user_id
LEFT JOIN categories ON categories.cat_id = company_info.cat_id WHERE users.user_id=?");
			
			$query->bindValue(1,$user_id);
		
		try{
			
			$query->execute();
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	
	
	public function get_all_info_cat() {
		
		$query = $this->db->prepare("SELECT categories.cat_id, categories.cat_name, company_info.info_logo, company_info.info_address, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id right join company_info on company_info.user_id=users.user_id right join categories on categories.cat_id=company_info.cat_id");
		
		
		try{
			
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	
	public function update_user($user_id,$user_name,$user_email,$user_comp_name,$user_number,$client_cat_id, $city) {
		
		$query = $this->db->prepare("UPDATE users u LEFT JOIN client_cat c ON u.client_cat_id=c.client_cat_id SET u.user_name=?,u.user_email=?,u.user_comp_name=?,u.user_number=?,u.client_cat_id=?, u.city=? WHERE u.user_id=?");
		
		$query->bindValue(1,$user_name);	
		$query->bindValue(2,$user_email);
		$query->bindValue(3,$user_comp_name);
		$query->bindValue(4,$user_number);
		$query->bindValue(5,$client_cat_id);
		$query->bindValue(6,$city);
		$query->bindValue(7,$user_id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	
	public function count_company($user_id) {
		
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `company_info` WHERE `user_id`=?");
		$query->bindValue(1,$user_id);
		
		try{
			$query->execute();
			if($query->fetchColumn() == 1)
			{
				return true;
			}else{
				return false;
			}
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		
	}
	
	public function update_user_additional($user_id, $cat_id, $sub_id, $information, $address) {
		
		$query = $this->db->prepare("UPDATE company_info ci LEFT JOIN categories c ON ci.cat_id=c.cat_id LEFT JOIN subcategories s ON ci.subc_id=s.subc_id SET ci.cat_id=?, ci.subc_id=?, ci.info_information=?, ci.info_address=?  WHERE ci.user_id=?");
		
		$query->bindValue(1,$cat_id);
		$query->bindValue(2,$sub_id);
		$query->bindValue(3,$information);
		$query->bindValue(4,$address);
		$query->bindValue(5,$user_id);
		
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	
	public function update_user_additional_other($user_id, $cat_id, $sub_id, $url, $tube, $information, $prod_desc, $timing, $staff, $address) {
		
		$query = $this->db->prepare("UPDATE company_info ci LEFT JOIN categories c ON ci.cat_id=c.cat_id LEFT JOIN subcategories s ON ci.subc_id=s.subc_id SET ci.cat_id=?, ci.subc_id=?, ci.info_url=?, ci.info_tube=?, ci.info_information=?, ci.info_prod_desc=?, ci.info_timing=?, ci.info_staff=?, ci.info_address=?  WHERE ci.user_id=?");
		
		$query->bindValue(1,$cat_id);
		$query->bindValue(2,$sub_id);
		$query->bindValue(3,$url);
		$query->bindValue(4,$tube);
		$query->bindValue(5,$information);
		$query->bindValue(6,$prod_desc);
		$query->bindValue(7,$timing);
		$query->bindValue(8,$staff);
		$query->bindValue(9,$address);
		$query->bindValue(10,$user_id);
		
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	
	public function delete_user($user_id) {
		
		$query1 = $this->db->prepare("DELETE FROM users WHERE user_id=?");
		
		$query1->bindValue(1,$user_id);
		
		$query2 = $this->db->prepare("DELETE FROM company_info WHERE user_id=?");
		$query2->bindValue(1,$user_id);
		
		$query3 = $this->db->prepare("DELETE FROM new_user WHERE user_id=?");
		$query3->bindValue(1,$user_id);
		
		try{
			$query1->execute();
			$query2->execute();
			$query3->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	
	
	public function delete_img($slide_id) {
		
		$query = $this->db->prepare("DELETE FROM info_images WHERE info_slide_id=?");
		
		$query->bindValue(1,$slide_id);
		
		
		
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	
	
	public function delete_status($user_id) {
		
		$query = $this->db->prepare("DELETE FROM new_user WHERE new_id=?");
		
		$query->bindValue(1,$user_id);
		
		
		
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

		 return true;
		
	}
	//"SELECT categories.cat_id,subcategories.subc_id,subcategories.subc_name, categories.cat_name, company_info.info_logo, company_info.info_address, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id right join company_info on company_info.user_id=users.user_id right join categories on categories.cat_id=company_info.cat_id RIGHT JOIN subcategories ON subcategories.cat_id=categories.cat_id"

	public function get_all_info_cat_sub() {
		
		$query = $this->db->prepare("SELECT categories.cat_id,subcategories.subc_id,subcategories.subc_name, categories.cat_name, company_info.info_logo, company_info.info_address, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id right join company_info on company_info.user_id=users.user_id right join categories on categories.cat_id=company_info.cat_id LEFT JOIN subcategories ON subcategories.subc_id=company_info.subc_id 
");
		
		
		try{
			
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	public function get_id_info_cat_sub($user_id) {
		
		$query = $this->db->prepare("SELECT categories.cat_id,subcategories.subc_id,subcategories.subc_name, categories.cat_name, company_info.info_logo, company_info.info_address, company_info.info_information, company_info.info_url, company_info.info_tube,company_info.info_prod_desc, company_info.info_timing, company_info.info_staff, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id right join company_info on company_info.user_id=users.user_id right join categories on categories.cat_id=company_info.cat_id LEFT JOIN subcategories ON subcategories.subc_id=company_info.subc_id WHERE users.user_id = ?
");
		$query->bindValue(1, $user_id);
		
		
		try{
			
			$query->execute();
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	public function count_info_images($user_id) {
		
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `info_images` WHERE `user_id`=?");
		$query->bindValue(1,$user_id);
		
		try{
			$query->execute();
			$result = $query->fetchColumn();
			return $result;
			/*if($query->fetchColumn() == 5)
			{
				return true;
			}else{
				return false;
			}*/
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		
	}
	
	public function count_user() {
		
		$query = $this->db->prepare("SELECT COUNT(`user_id`) FROM `users`");
		
		
		try{
			$query->execute();
			$result = $query->fetchColumn();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		
	}
	
	public function get_cat_id($user_id) {
		
		$query = $this->db->prepare("SELECT client_cat.client_cat_id, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id WHERE users.user_id=?");
			
			$query->bindValue(1,$user_id);
		
		try{
			
			$query->execute();
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	public function RelativeTime( $timestamp ){
    if( !is_numeric( $timestamp ) ){
        $timestamp = strtotime( $timestamp );
        if( !is_numeric( $timestamp ) ){
            return "";
        }
    }

    $difference = time() - $timestamp;
        // Customize in your own language.
    $periods = array( "sec", "min", "hour", "day", "week", "month", "years", "decade" );
    $lengths = array( "60","60","24","7","4.35","12","10");

    if ($difference > 0) { // this was in the past
        $ending = "ago";
    }else { // this was in the future
        $difference = -$difference;
        $ending = "to go";
    }
    for( $j=0; $difference>=$lengths[$j] and $j < 7; $j++ )
        $difference /= $lengths[$j];
    $difference = round($difference);
    if( $difference != 1 ){
                // Also change this if needed for an other language
        $periods[$j].= "s";
    }
    $text = "$difference $periods[$j] $ending";
    return $text;
}

	public function get_id_info_all_show($user_id) {
		
		$query = $this->db->prepare("SELECT users.user_id,categories.cat_id,subcategories.subc_id,subcategories.subc_name, info_pdf.info_pdf, categories.cat_name, company_info.info_logo, company_info.info_address, company_info.info_information, company_info.info_url, company_info.info_tube,company_info.info_prod_desc, company_info.info_timing, company_info.info_staff, users.user_id,users.user_confirmed,users.admin_confirmed, users.user_name, users.user_email, users.user_comp_name, users.user_number, users.client_cat_id, client_cat.client_cat_id, users.user_time, client_cat.client_cat_name FROM client_cat LEFT JOIN users ON users.client_cat_id = client_cat.client_cat_id right join company_info on company_info.user_id=users.user_id right join categories on categories.cat_id=company_info.cat_id LEFT JOIN subcategories ON subcategories.subc_id=company_info.subc_id LEFT JOIN info_pdf ON users.user_id=info_pdf.user_id WHERE users.user_id=? ");
		$query->bindValue(1, $user_id);
		
		
		try{
			
			$query->execute();
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}

	public function get_slide_img($user_id) {
		
		$query = $this->db->prepare("SELECT * FROM info_images WHERE user_id=?");
		$query->bindValue(1, $user_id);
		
		
		try{
			
			$query->execute();
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){

			die($e->getMessage());
		}
	}
	
	public function get_info_img($user_id) {

		$query = $this->db->prepare("SELECT * FROM info_images WHERE user_id=? ORDER BY user_id");
		
		$query->bindValue(1, $user_id);
		
		try{
			$query->execute();
			$result = $query->fetchAll();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function get_info_img_by_id($info_id) {

		$query = $this->db->prepare("SELECT * FROM info_images WHERE info_slide_id=?");
		
		$query->bindValue(1, $info_id);
		
		try{
			$query->execute();
			$result = $query->fetch();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_img($info_id, $info_img) {

		$query = $this->db->prepare("UPDATE info_images SET info_img=? WHERE info_slide_id=?");
		
		$query->bindValue(1, $info_img);
		$query->bindValue(2, $info_id);
		
		try{
			$result = $query->execute();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function get_users() {
		
		$query = $this->db->prepare("SELECT * FROM `users`");
		$query->execute();
		
		try {
			
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function recent_updates($updates, $user_id) {
		
		$time = time();
		$query = $this->db->prepare("INSERT INTO recent_updates(`ru_desc`, `user_id`, `ru_timestamp`) VALUES(?,?,?)");
		$query->bindValue(1, $updates);
		$query->bindValue(2, $user_id);
		$query->bindValue(3, $time);
		 
		try {
			$result = $query->execute();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function blogs($sub, $img, $desc, $user_id) {
		
		$time = time();
		$query = $this->db->prepare("INSERT INTO blogs(`blogs_sub`, `blogs_img`, `blogs_desc`, `admin_id`, `blogs_timestamp`) VALUES(?,?,?,?,?)");
		$query->bindValue(1, $sub);
		$query->bindValue(2, $img);
		$query->bindValue(3, $desc);
		$query->bindValue(4, $user_id);
		$query->bindValue(5, $time);
		 
		try {
			$result = $query->execute();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function articles($sub, $img, $desc, $user_id) {
		
		$time = time();
		$query = $this->db->prepare("INSERT INTO articles(`at_title`, `at_img`, `at_desc`, `admin_id`, `at_timestamp`) VALUES(?,?,?,?,?)");
		$query->bindValue(1, $sub);
		$query->bindValue(2, $img);
		$query->bindValue(3, $desc);
		$query->bindValue(4, $user_id);
		$query->bindValue(5, $time);
		 
		try {
			$result = $query->execute();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function news($sub, $img, $desc, $user_id) {
		
		$time = time();
		$query = $this->db->prepare("INSERT INTO news(`n_title`, `n_img`, `n_desc`, `admin_id`, `n_timestamp`) VALUES(?,?,?,?,?)");
		$query->bindValue(1, $sub);
		$query->bindValue(2, $img);
		$query->bindValue(3, $desc);
		$query->bindValue(4, $user_id);
		$query->bindValue(5, $time);
		 
		try {
			$result = $query->execute();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_articles() {
		
		$query = $this->db->prepare("SELECT * FROM `articles`");
		$query->execute();
		try {
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_articles_by_id($article_id) {
		
		$query = $this->db->prepare("SELECT * FROM `articles` WHERE `at_id`=?");
		$query->bindValue(1, $article_id);
		$query->execute();
		try {
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_article_img_by_id($article_id) {

		$query = $this->db->prepare("SELECT * FROM `articles` WHERE `at_id`=?");
		
		$query->bindValue(1, $article_id);
		
		try{
			$query->execute();
			$result = $query->fetch();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_article($article_id, $article_sub, $article_img, $article_desc) {

		$query = $this->db->prepare("UPDATE `articles` SET `at_title`=?, `at_img`=?, `at_desc`=? WHERE `at_id`=?");
		
		$query->bindValue(1, $article_sub);
		$query->bindValue(2, $article_img);
		$query->bindValue(3, $article_desc);
		$query->bindValue(4, $article_id);
		try{
			$result = $query->execute();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function get_blogs() {
		
		$query = $this->db->prepare("SELECT * FROM `blogs`");
		$query->execute();
		try {
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_blogs_by_id($blogs_id) {
		
		$query = $this->db->prepare("SELECT * FROM `blogs` WHERE `blogs_id`=?");
		$query->bindValue(1, $blogs_id);
		$query->execute();
		try {
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_blogs_img_by_id($blogs_id) {

		$query = $this->db->prepare("SELECT * FROM `blogs` WHERE `blogs_id`=?");
		
		$query->bindValue(1, $blogs_id);
		
		try{
			$query->execute();
			$result = $query->fetch();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_blogs($blogs_id, $blogs_sub, $blogs_img, $blogs_desc) {

		$query = $this->db->prepare("UPDATE `blogs` SET `blogs_sub`=?, `blogs_img`=?, `blogs_desc`=? WHERE `blogs_id`=?");
		
		$query->bindValue(1, $blogs_sub);
		$query->bindValue(2, $blogs_img);
		$query->bindValue(3, $blogs_desc);
		$query->bindValue(4, $blogs_id);
		try{
			$result = $query->execute();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function get_news() {
		
		$query = $this->db->prepare("SELECT * FROM `news`");
		$query->execute();
		try {
			$result = $query->fetchAll();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_news_by_id($news_id) {
		
		$query = $this->db->prepare("SELECT * FROM `news` WHERE `n_id`=?");
		$query->bindValue(1, $news_id);
		$query->execute();
		try {
			$result = $query->fetch();
			return $result;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function get_news_img_by_id($news_id) {

		$query = $this->db->prepare("SELECT * FROM `news` WHERE `n_id`=?");
		
		$query->bindValue(1, $news_id);
		
		try{
			$query->execute();
			$result = $query->fetch();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_news($news_id, $news_sub, $news_img, $news_desc) {

		$query = $this->db->prepare("UPDATE `news` SET `n_title`=?, `n_img`=?, `n_desc`=? WHERE `n_id`=?");
		
		$query->bindValue(1, $news_sub);
		$query->bindValue(2, $news_img);
		$query->bindValue(3, $news_desc);
		$query->bindValue(4, $news_id);
		try{
			$result = $query->execute();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function get_info_pdf_by_id($info_id) {

		$query = $this->db->prepare("SELECT * FROM info_pdf WHERE info_pdf_id=?");
		
		$query->bindValue(1, $info_id);
		
		try{
			$query->execute();
			$result = $query->fetch();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
	
	public function update_pdf($info_id, $info_pdf) {

		$query = $this->db->prepare("UPDATE info_pdf SET info_pdf=? WHERE info_pdf_id=?");
		
		$query->bindValue(1, $info_pdf);
		$query->bindValue(2, $info_id);
		
		try{
			$result = $query->execute();
			return $result;
			
		}catch(PDOException $e){
			die($e->getMessage());
		}

	}
}	