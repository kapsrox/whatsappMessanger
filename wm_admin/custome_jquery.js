// JavaScript Document
$(document).ready(function(){

/*-----Total Canclate Start-------*/

$("#charges_txt").keyup(function(){
	
	var charge = $("#charges_txt").val();
	var charge = Math.round(charge);
	var ser_tax = Math.round(charge*12/100);
	var tot_amt= charge + ser_tax;
	
	$("#tot_txt").val(charge);
	$("#tot_val__txt").val(charge);		
	$("#service_tax").val(ser_tax);
	$("#total_amount").val(tot_amt);
	
	
});
/*-----Total Canclate End-------*/

});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;	
    if ( charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}