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
$vas = @$_POST['vas_charges'];
$total = $charges+$vas ;
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
td{
text-align:left;
}
.title{
color:blue;
}
.tab{

 //border: 1px solid aqua;}
</style>

</head>

<body>

<table class="tab" align="center" border="1" cellpadding="0" cellspacing="0" width="550" >
<tr>
	<td ><img src="assets/img/invoice/smp_logo_2.png" alt="" height="100px"/></td>
    <td >
    	<table align="center" border="0" cellpadding="0" cellspacing="10">
        <tr>
        	<td class="title">Contract Number</td>
            <td>'.@$_POST['contract_no'].'</td>
        </tr>
        
        <tr>
        	<td class="title">City Name</td>
            <td>'. @$_POST['city_name'].'</td>
        </tr>
        
        <tr>
        	<td class="title">Date</td>
            <td colspan="">'.@$_POST['contract_date'].'</td>
        </tr>
        </table>
    </td>
</tr>

<tr>
	<td align="center" colspan="2">
    	<table  border="0" cellpadding="5" cellspacing="5" width="495px" class="tab">
        <tr>
        	<td align="center" class="title">Contract Cum Receipt Form</td>
        </tr>
        
        <tr >
        	<td width="85px" class="title"><b>Company Name</b> </td>
            <td width="150px">'.@$_POST['company_name'].'</td>
            <td width="65px" class="title"><b>Website</b></td>
            <td width="175px">'. @$_POST['website'].'</td>
        </tr>
        
        <tr>
        	<td class="title"><b>Contact Person 1</b></td>
            <td>'. @$_POST['contact_person'].'</td>
            
            <td class="title"><b>Designation</b></td>
            <td>'. @$_POST['designation'].'</td>
        </tr>
        
        <tr>
        	<td class="title"><b>Contact Person 2</b></td>
            <td>'. @$_POST['contact_person2'].'</td>
            
            <td class="title"><b>Designation</b></td>
            <td>'. @$_POST['designation2'].'</td>
        </tr>
        
        <tr>
        	<td class="title"><b>Address</b></td>
            <td>'. @$_POST['address'].'</td>
            
            <td class="title"><b>City</b></td>
            <td>'. @$_POST['city'].'</td>
        </tr>
        
         <tr>
            <td class="title"><b>State</b></td>
            <td>'. @$_POST['state'].'</td>
            
            <td class="title"><b>PIN</b></td>
            <td>'. @$_POST['pincode'].'</td>
        </tr>
        
        <tr>
            <td class="title"><b>Telephone</b></td>
            <td>'. @$_POST['telephone1'].'</td>
            
            <td class="title"><b>Telephone</b></td>
            <td>'. @$_POST['telephone2'].'</td>
        </tr>
        
         <tr>
            <td class="title"><b>FAX</b></td>
            <td>'. @$_POST['fax'].'</td>
            
            <td class="title"><b>Email</b></td>
            <td>'.@$_POST['email'].'</td>
        </tr>
        </table>
    </td>
</tr>

<tr>
    <td align="center" colspan="2">
    	<table align="center" cellpadding="5" cellspacing="1" border="0" width="650px" class="tab">
        <tr>
         	<td class="title"> <b>Billing/Payment Details</b></td>
        </tr>
        
        <tr style="background-color:gray;border-color:gray; border-style: dotted;">
        	<td width="85px" class="title">Type</td>
            <td width="80px" class="title">Plan</td>
            <td width="65px" class="title">Charges</td>
            <td width="75px" class="title">VAS Plan</td>
            <td width="75px" class="title">VAS Charges</td>
            <td width="75px" class="title">Payment Mode</td>
            <td width="77px" class="title" >Total</td>
        </tr>
        <tr>
        	<td>'. @$_POST['billing_type'].'</td>
            <td>'. @$_POST['plan'].'</td>
            <td>'. @$_POST['charges'].'</td>
            <td>'. @$_POST['vas'].'</td>
            <td>'. @$_POST['vas_charges'].'</td>
            <td>'. @$_POST['payment_mode'].'</td>
            <td>'. $total.'</td>
        </tr>
        </table>
    </td>
</tr>

<tr>
	<td align="center" colspan="2" class="tab">
    	<table align="center" width="650" cellpadding="0" cellspacing="5" border="0" >
        <tr>
        	<td align="right" width="455px" class="title"><b>
            Total :-</b>
            </td>
            
            <td >
            '.@$total.'
            </td>
        </tr>
        
        <tr>
        	<td  align="right" class="title"><b>
            Service Tax @ 12.36 :-</b>
            </td>
            
            <td>
             '.@$_POST['service_tax'].'
            </td>
        </tr>
        
        <tr>
        	<td align="right" class="title"><b>
            Amount Received :-</b>
            </td>
            
            <td >
            '.@$_POST['total_amount'].'
            </td>
        </tr>
        </table>
    </td>
</tr>

<tr >
	<td align="center" colspan="2" class="title">
    THE ABOVE CHARGE IS FOR A PERIOD OF 1 YEAR
    </td>
</tr>

<tr>
	<td align="center" class="tab">
    	<table align="center" cellpadding="5" cellspacing="5" border="0" width="260" >
        <tr>
        	<td class="title" width="150"><b>Executive / Authorised Name :-</b></td>
			<td>'.@$_POST['executive_name'].' </td>

</tr><tr>            <td class="title"><b>code :-</b></td>
			<td>'.@$_POST['code'].'</td>
        </tr>
        </table>
    </td> 
    <td align="center" >
    	<table align="center" cellpadding="0" cellspacing="0" border="0" width="200" >
        <tr>
        	<td align="center"><img src="signature.png" alt="" height="50px" width ="160px;" align="center"/></td>
            
        </tr>
        <tr>
        <td class="title" align="center"><b>Authorised Signature</b></td>
        </tr>
        </table>
    </td>
</tr>
<tr>
	<td align="center" colspan="2">
    	<table align="center" cellpadding="5" cellspacing="0" border="0" width="495" class="tab">
        <tr>
        	<td colspan="2" class="title"><b>Note: -</b>This receipt has been issued against your payment & your confirmation on terms & conditions for the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="margin-left:15px;">       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                                                                                                           registration on searchmypage.in</span>
        </td>
        </tr>
        </table>
    </td>
</tr>
</table>';

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
