<?php
require 'core/init.php';

$general->logged_out_protect();

//if(isset($_POST["Create your Invoice"]))
//{
require_once('tcpdf/tcpdf.php');
   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

   
   
$charges = @$_POST["charges"];
$vat = (12.36 * $charges)/100;
$service_tax = ($charges * 12)/100;
$re = $charges + $vat + $service_tax;
   // set font
   $pdf->SetFont('times', '', 10);

   // add a page
  $pdf->AddPage();

  $html = '<html>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invoice</title>

<style type="text/css">
.main_div
{
	border:2px solid #333;
}
</style>

</head>

<body>
<div align="center" class="main_div">
<form action="" method="post" enctype="multipart/form-data" oninput="vat.value=12.36*parseInt(price.value)">

<table border="0" cellpadding="5" cellspacing="1" width="90%">

<tr>
<td colspan="4"  align="left"><img src="assets/img/invoice/smp_logo.png" alt="" height="100px"/></td>
<td colspan="3">
<table align="left">

<tr>
<td><b>Contract No</b></td>
<td><b>:</b></td>
<td>'. @$_POST['contract_no'].'</td>
<input type="hidden" name="city" value="">
</tr>
<tr>
<td><b>City Name</b></td>
<td><b>:</b></td>
<td>'. @$_POST['city_name'].'</td>
</tr>
<tr>
<td><b>Date</b></td>
<td><b>:</b></td>
<td>'.@$_POST['contract_date'].'</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan="7" align="center"><b>(Contract cum Receipt Form)</b></td>
</tr>

<tr>
<td><b>Company Name</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'.@$_POST['company_name'].' 
<input type="hidden" name="company_name" value="'. @$_POST['company_name'].'"></td>
</tr>

<tr>
<td><b>Contact Person 01</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">
'. @$_POST['contact_person'].'
	<input type="hidden" name="contact_person" value="
'. @$_POST['contact_person'].'">
</td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['designation'].'

	<input type="hidden" name="designation" value="
'. @$_POST['designation'].'">
</td>
</tr>
<tr>
<td><b>Contact Person 02</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['contact_person2'].'

	<input type="hidden" name="contact_person2" value="'. @$_POST['contact_person2'].'">

</td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['designation2'].'

	<input type="hidden" name="designation2" value="
'. @$_POST['designation2'].'">

</td>
</tr>
<tr>
<td><b>Address</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['address'].'
	<input type="hidden" name="address" value="
'. @$_POST['address'].'">

</td>
</tr>

<tr>
<td><b>City</b></td>
<td><b>:</b></td>
<td>'. @$_POST['city'].'

	<input type="hidden" name="city" value="
'.@$_POST['city'].'">
</td>
<td colspan="2"></td>
<td align="right"><b>Pincode</b></td>
<td><b>:</b>&nbsp;&nbsp; '. @$_POST['pincode'].'

	<input type="hidden" name="pincode" value="
'. @$_POST['pincode'].'">

</td>
</tr>

<tr>
<td><b>State</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['state'].'


	<input type="hidden" name="state" value="
'.@$_POST['state'].'">
</td>
</tr>

<tr>
<td><b>Telephone 01</b></td>
<td><b>:</b></td>
<td>'. @$_POST['telephone1'].'

	<input type="hidden" name="telephone1" value="
'. @$_POST['telephone1'].'">

</td>
<td colspan="2"></td>
<td align="right"><b>Fax</b></td>
<td><b>:</b>&nbsp;&nbsp;'. @$_POST['fax'].'
	<input type="hidden" name="fax" value="
'. @$_POST['fax'].'">


</td>
</tr>


<tr>
<td><b>Telephone 02</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'.@$_POST['telephone2'].'

	<input type="hidden" name="telephone2" value="
'. @$_POST['telephone2'].'">

</td>
</tr>


<tr>
<td><b>E-mail</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'.@$_POST['email'].'

	<input type="hidden" name="email" value="
'. @$_POST['email'].'">

</td>
</tr>

<tr>
<td><b>Website</b></td>
<td><b>:</b></td>
<td colspan="5" align="left">'. @$_POST['website'].'

	<input type="hidden" name="website" value="
'. @$_POST['website'].'">

</td>
</tr>



<tr>
<td><b>Company Details</b></td>
<td valign="bottom"><b>:</b></td>
<td valign="bottom" colspan="5"  align="left"><b>Type -</b> '. @$_POST['company_type'].'


	<input type="hidden" name="company_type" value="
'.@$_POST['company_type'].'">

</td>
</tr>

<tr valign="top">
<td colspan="1"><b>Billing/Payment Details</b></td>
<td colspan="6">

<table cellspacing="15">
<tr>
<td><b>Type</b><br>'. @$_POST['billing_type'].'
	<input type="hidden" name="billing_type" value="
'.@$_POST['billing_type'].'">


</td>
<td><b>Plan</b><br>'. @$_POST['plan'].'

<input type="hidden" name="plan" value="
'. @$_POST['plan'].'">

</td>
<td><b>Charges</b><br>'. @$_POST['charges'].' 
<input type="hidden" name="charges" value="
'.@$_POST['charges'].'">

</td>
<td><b>Payment Mode</b><br>'. @$_POST['payment_mode'].'

<input type="hidden" name="payment_mode" value="
'. @$_POST['payment_mode'].'">


</td>
<td><b>Total</b><br>'. @$r.'
<input type="hidden" name="payment_mode" value="'.@$_POST['payment_mode'].'">


</td>
</tr>
</table>

</td>
</tr>

<tr>
<td colspan="7"> <br> </td>
</tr>

<tr>
<td colspan="5"></td>
<td><b>Total Contract Value Rs.</b></td>
<td><b>:</b>&nbsp;&nbsp;'. @$_POST['total_value'].'</td>
</tr>

<tr>
<td colspan="5"></td>
<td><b>VAT@12.36%</b></td>
<td><b>:</b>&nbsp;&nbsp; '. @$vat.'



<input type="hidden" name="vat" value="
'. @$_POST['vat'].'">

</td>
</tr>
<tr>
<td colspan="5"></td>
<td><b>Service Tax@12%</b></td>
<td><b>:</b>&nbsp;&nbsp; '. @$service_tax.'
<input type="hidden" name="service_tax" value="
'. @$_POST['service_tax'].'">
</td>
</tr>


<tr valign="top">
<td colspan="4"><b>Executive Name/Associate Name</b><br />'.@$_POST['executive_name'].' </td>
<td></td>
<td><b>Total Amount Received Rs.</b></td>
<td><b>:</b>&nbsp;&nbsp; '. @$_POST['total_amount'].'</td>
</tr>

<tr>
<td colspan="2"><b>Code</b> <b>:</b> '. @$_POST['code'].'
<input type="hidden" name="code" value="
'. @$_POST['code'].'">


</td>
<td colspan="3"></td>
<td colspan="2" align="center"><b>(THE ABOVE CHARGE IS FOR A PERIOD OF 1 YEAR)</b></td>
</tr>

<tr>
<td colspan="7"> <br></td>
</tr>

<tr>
<td colspan="7" align="center">
<table align="right" border="0">
<tr>
<td align="right"><img src="assets/img/invoice/smp_sign.png" alt="" /></td>
</tr>
<tr>
<td align="center"><b>Authorised Signature</b></td>
</tr>
</table>
</td>
</tr>

<tr>
<td colspan="7"><b>Note :-</b>This receipt has been issued against your payment & your confirmation on terms & conditions for the registration on <a href="searchmypage.in">searchmypage.in</a></td>
</tr>

</table>
</form>
';

//$html.='</td></tr></table></body></html>';
  $pdf->writeHTML($html, true, false, true, false, '');


   $pdf->Output('Local Expedition', 'I');

   ?>
   
   <!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http<b>:</b>//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invoice</title>

<style type="text/css">
.main_div
{
	border:2px solid #333;
}
</style>

</head>

<body>
<div align="center" class="main_div">
<form action="" method="post" enctype="multipart/form-data" oninput="vat.value=12.36*parseInt(price.value)">

<table border="0" cellpadding="5" cellspacing="1" width="90%">

<tr>
<td colspan="6"><img src="assets/img/invoice/smp_logo.png" alt="" height="100px"/></td>
<td colspan="1">
<table align="left">

<tr>
<td><b>Contract No</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['contract_no']; ?></td>
<input type="hidden" name="city" value="">
</tr>
<tr>
<td><b>City Name</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['city_name']; ?></td>
</tr>
<tr>
<td><b>Date</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['contract_date']; ?></td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan="7" align="center"><b>(Contract cum Receipt Form)</b></td>
</tr>

<tr>
<td><b>Company Name</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['company_name']; ?>
<input type="hidden" name="company_name" value="<?php echo @$_POST['company_name']; ?>"></td>
</tr>

<tr>
<td><b>Contact Person 01</b></td>
<td><b>:</b></td>
<td colspan="5">
<?php echo @$_POST['contact_person']; ?>
	<input type="hidden" name="contact_person" value="
<?php echo @$_POST['contact_person']; ?>">
</td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['designation']; ?>

	<input type="hidden" name="designation" value="
<?php echo @$_POST['designation']; ?>">
</td>
</tr>
<tr>
<td><b>Contact Person 02</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['contact_person2']; ?>

	<input type="hidden" name="contact_person2" value="
<?php echo @$_POST['contact_person2']; ?>">

</td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['designation2']; ?>

	<input type="hidden" name="designation2" value="
<?php echo @$_POST['designation2']; ?>">

</td>
</tr>
<tr>
<td><b>Address</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['address']; ?>

	<input type="hidden" name="address" value="
<?php echo @$_POST['address']; ?>">

</td>
</tr>

<tr>
<td><b>City</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['city']; ?>

	<input type="hidden" name="city" value="
<?php echo @$_POST['city']; ?>">
</td>
<td colspan="2"></td>
<td align="right"><b>Pincode</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['pincode']; ?>

	<input type="hidden" name="pincode" value="
<?php echo @$_POST['pincode']; ?>">

</td>
</tr>

<tr>
<td><b>State</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['state']; ?>


	<input type="hidden" name="state" value="
<?php echo @$_POST['state']; ?>">
</td>
</tr>

<tr>
<td><b>Telephone 01</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['telephone1']; ?>

	<input type="hidden" name="telephone1" value="
<?php echo @$_POST['telephone1']; ?>">

</td>
<td colspan="2"></td>
<td align="right"><b>Fax</b></td>
<td><b>:</b>&nbsp;&nbsp;<?php echo @$_POST['fax']; ?>
	<input type="hidden" name="fax" value="
<?php echo @$_POST['fax']; ?>">


</td>
</tr>


<tr>
<td><b>Telephone 02</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['telephone2']; ?>

	<input type="hidden" name="telephone2" value="
<?php echo @$_POST['telephone2']; ?>">

</td>
</tr>


<tr>
<td><b>E-mail</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['email']; ?>

	<input type="hidden" name="email" value="
<?php echo @$_POST['email']; ?>">

</td>
</tr>

<tr>
<td><b>Website</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['website']; ?>

	<input type="hidden" name="website" value="
<?php echo @$_POST['website']; ?>">

</td>
</tr>



<tr>
<td><b>Company Details</b></td>
<td valign="bottom"><b>:</b></td>
<td valign="bottom" colspan="5"><b>Type -</b> <?php echo @$_POST['company_type']; ?>


	<input type="hidden" name="company_type" value="
<?php echo @$_POST['company_type']; ?>">

</td>
</tr>

<tr valign="top">
<td colspan="1"><b>Billing/Payment Details</b></td>
<td colspan="6">

<table cellspacing="15">
<tr>
<td><b>Type</b><br><?php echo @$_POST['billing_type']; ?>
	<input type="hidden" name="billing_type" value="
<?php echo @$_POST['billing_type']; ?>">


</td>
<td><b>Plan</b><br><?php echo @$_POST['plan']; ?>

<input type="hidden" name="plan" value="
<?php echo @$_POST['plan']; ?>">

</td>
<td><b>Charges</b><br><?php echo @$_POST['charges']; ?>

<input type="hidden" name="charges" value="
<?php echo @$_POST['charges']; ?>">

</td>
<td><b>Payment Mode</b><br><?php echo @$_POST['payment_mode']; ?>

<input type="hidden" name="payment_mode" value="
<?php echo @$_POST['payment_mode']; ?>">


</td>
<td><b>Total</b><br><?php echo @$re; ?>
<input type="hidden" name="payment_mode" value="
<?php echo @$_POST['payment_mode']; ?>">


</td>
</tr>
</table>

</td>
</tr>

<tr>
<td colspan="7"> <br> </td>
</tr>

<tr>
<td colspan="5"></td>
<td><b>Total Contract Value Rs.</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['total_value']; ?></td>
</tr>

<tr>
<td colspan="5"></td>
<td><b>VAT@12.36%</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$vat; ?>



<input type="hidden" name="vat" value="
<?php echo @$_POST['vat']; ?>">

</td>
</tr>
<tr>
<td colspan="5"></td>
<td><b>Service Tax@12%</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$service_tax; ?>
<input type="hidden" name="service_tax" value="
<?php echo @$_POST['service_tax']; ?>">
</td>
</tr>


<tr valign="top">
<td colspan="4"><b>Executive Name/Associate Name</b><br /> <?php echo @$_POST['executive_name']; ?> </td>
<td></td>
<td><b>Total Amount Received Rs.</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['total_amount']; ?></td>
</tr>


<tr>
<td colspan="2"><b>Code</b> <b>:</b> <?php echo @$_POST['code']; ?>
<input type="hidden" name="code" value="
<?php echo @$_POST['code']; ?>">


</td>
<td colspan="3"></td>
<td colspan="2" align="center"><b>(THE ABOVE CHARGE IS FOR A PERIOD OF 1 YEAR)</b></td>
</tr>

<tr>
<td colspan="7"> <br></td>
</tr>

<tr>
<td colspan="7" align="center">
<table align="right" border="0">
<tr>
<td align="center"><img src="assets/img/invoice/smp_sign.png" alt="" /></td>
</tr>
<tr>
<td align="center"><b>Authorised Signature</b></td>
</tr>
</table>
</td>
</tr>

<tr>
<td colspan="7"><input name="submit" style="margin-top:60px;" value="Create your Invoice" type="submit" /></td>
</tr>
<tr>
<td colspan="7"><b>Note :-</b>This receipt has been issued against your payment & your confirmation on terms & conditions for the registration on <a href="searchmypage.in">searchmypage.in</a></td>
</tr>

</table>
</form>

<?php 
if(isset($_POST["Create your Invoice"]))
{
echo'<a href="#" target="new">Download your Invoice</a>';
}
?>

</div>
</body>
</html>-->
