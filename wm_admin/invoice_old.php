<?php
require 'core/init.php';
$general->logged_out_protect();

   ?>
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

<table border="0" cellpadding="5" cellspacing="1" width="90%">

<tr>
<td colspan="6"><img src="assets/img/invoice/smp_logo.png" alt="" height="100px"/></td>
<td colspan="1">
<table align="left">

<tr>
<td><b>Contract No</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['contract_no']; ?></td>
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
<td colspan="5"><?php echo @$_POST['company_name']; ?></td>
</tr>

<tr>
<td><b>Contact Person 01</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['contact_person']; ?></td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['designation']; ?></td>
</tr>
<tr>
<td><b>Contact Person 02</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['contact_person2']; ?></td>
</tr>
<tr>
<td><b>Designation</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['designation2']; ?></td>
</tr>
<tr>
<td><b>Address</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['address']; ?></td>
</tr>

<tr>
<td><b>City</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['city']; ?></td>
<td colspan="2"></td>
<td align="right"><b>Pincode</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['pincode']; ?></td>
</tr>

<tr>
<td><b>State</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['state']; ?></td>
</tr>

<tr>
<td><b>Telephone 01</b></td>
<td><b>:</b></td>
<td><?php echo @$_POST['telephone1']; ?></td>
<td colspan="2"></td>
<td align="right"><b>Fax</b></td>
<td><b>:</b>&nbsp;&nbsp;<?php echo @$_POST['fax']; ?></td>
</tr>


<tr>
<td><b>Telephone 02</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['telephone2']; ?></td>
</tr>


<tr>
<td><b>E-mail</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['email']; ?></td>
</tr>

<tr>
<td><b>Website</b></td>
<td><b>:</b></td>
<td colspan="5"><?php echo @$_POST['website']; ?></td>
</tr>



<tr>
<td><b>Company Details</b></td>
<td valign="bottom"><b>:</b></td>
<td valign="bottom" colspan="5"><b>Type -</b> <?php echo @$_POST['company_type']; ?></td>
</tr>

<tr valign="top">
<td colspan="1"><b>Billing/Payment Details</b></td>
<td colspan="6">

<table cellspacing="15">
<tr>
<td><b>Type</b><br><?php echo @$_POST['billing_type']; ?></td>
<td><b>Plan</b><br><?php echo @$_POST['plan']; ?></td>
<td><b>Charges</b><br><?php echo @$_POST['charges']; ?></td>
<td><b>Payment Mode</b><br><?php echo @$_POST['payment_mode']; ?></td>
<td><b>Total</b><br><?php echo @$_POST['total']; ?></td>
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
<td><b>Service Tax@12.36%</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['service_tax']; ?></td>
</tr>


<tr valign="top">
<td colspan="4"><b>Executive Name/Associate Name</b><br /> <?php echo @$_POST['executive_name']; ?> </td>
<td></td>
<td><b>Total Amount Received Rs.</b></td>
<td><b>:</b>&nbsp;&nbsp; <?php echo @$_POST['total_amount']; ?></td>
</tr>


<tr>
<td colspan="2"><b>Code</b> <b>:</b> <?php echo @$_POST['code']; ?></td>
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
<td colspan="7"><b>Note :-</b>This receipt has been recevied againest your payment and your confirmation on the terms & conditions for registration on<a href="searchmypage.in">searchmypage.in</a></td>
</tr>

</table>



</div>
</body>
</html>