<?php
$grosspay="";
$taxablepay="";
$pensionablepay ="";

$nipayment ="";
$deduction ="";
$netpay ="";

$basicsalary ="";
$overtime ="";
$referenceno ="";
$employer  ="";
$empaddress  ="";
$taxperiod ="";
$pension =""; 
$tax ="";
$paydate ="";

$employee ="";
$postcode ="";
$address ="";
$ninumber ="";
$nicode ="";



extract($_POST);


if(isset($add))
{
	
$grosspay= $basicsalary + $overtime;

$taxablepay = ($grosspay * 9) /100; 
$pensionablepay = ($grosspay * 5.5) /100; 

$nipayment = ($grosspay * 2.5) /100;

$deduction=$taxablepay +  $pensionablepay +	$nipayment; 
$netpay = $grosspay - $deduction ;
//$pension = $pensionablepay * 8;

$basicsalary = $basicsalary ;
$overtime = $overtime ;
$referenceno = rand(1125, 1000000);
$employer ="DJ Oamen Aviations";
$empaddress = "1 Godson Close 199MM London";
$taxperiod = date('m');
$pension = $pensionablepay * $taxperiod;
$tax = $taxperiod * $taxablepay;
$paydate = date('d/m/y');



}	

if(isset($cleartext))
{
unset($grosspay);
unset($taxablepay);
$pensionablepay ="";

$nipayment ="";
$deduction ="";
$netpay ="";

$basicsalary ="";
$overtime ="";
$referenceno ="";
$employer  ="";
$empaddress  ="";
$taxperiod ="";
$pension =""; 
$tax ="";
$paydate ="";

$employee ="";
$postcode ="";
$address ="";
$ninumber ="";
$nicode ="";


extract($_POST);
header("refresh: 3; url =http://localhost:8080/file:/C:/Users/lydia/Desktop/PAYE.php");
}
?>

<!--===========================================================================================================-->



<HTML>
<HEAD>
<TITLE>PAYE CALCULATOR</TITLE>

<style type="text/css">

.style1 {	
	border-width: 0;
	border: solid gray 0px;
	width: 90%;
	border-radius: 5px;
	margin: 5px auto;
	background: lightblue;
	

}

.style2 {
	border-width: 0;
	border: solid gray 10px;
	width: 50%;
	border-radius: 5px;
	margin: 5px auto;
	background: silver;
	align:left;
	font-size:20;
	
	
}
.tablefont
{
	font-size:16;
}

.btn {
  width: 302px;
  height: 50px;
  padding: 5px;
  background: gray ;
  font-size:30px;
  color: white;
}
.cbtn{
	width:50px; 
	height:30px; 
	font-size:25; 
	border-radius:10px
	
}


</style>
<!--===========================================================================================================-->



<!--===========================================================================================================-->

</HEAD>

<BODY bgcolor="808080">
<center><img
<B><font color="blue" style ="font-size:60" >PAYE CALCULATOR </font></B>
</center>
<hr size=5 color = "white">
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table class="style1" >
<tr>
<td>Employee Name:</td>
	<td><input type="text" name = "employee" style="width: 300px"
	value="<?php echo $employee; ?>">
</td>
<td>Post Code:</td>
	<td><input type="text" name = "postcode" style="width: 300px"
	value="<?php echo $postcode; ?>" onfocus="this.value=''">
</td>
</tr>

tr>
<td>Address:</td>
	<td><input type="text" name = "address" style="width: 300px"
	value="<?php echo $address; ?>" onfocus="this.value=''">
</td>
<td>Gender:</td>
   <td>    
Male<input type="radio" value="m" name="g" value="<?php echo $m; ?>" onfocus="this.value=''"/>
Female<input type="radio" value="f" name="g" value="<?php echo $g; ?>" onfocus="this.value=''"/>

</td>
  </tr>
<!--==================================================================================================================-->

	

				<tr>
				<td>Reference No:</td>
					<td><input type="text" name = "referenceno" style="width: 400px"					
					value="<?php echo $referenceno; ?>" >
				</td></tr>
				<tr><td>Employer:</td>
					<td><input type="text" name = "employer" style="width: 400px"					
					value="<?php echo $employer; ?>" onfocus="this.value=''">
				</td></tr>
				<tr><td>Emp Address:</td>
					<td><input type="text" name = "empaddress" style="width: 400px" 
					value="<?php echo $empaddress; ?>" onfocus="this.value=''">
				</td></tr>	
		</td>
		

<!--==================================================================================================================-->
	
			
			<tr>			
				
			<td>Tax Period:</td>
			<td><input type="text" name = "taxperiod" style="width: 100px" 
					value="<?php echo $taxperiod; ?>" onfocus="this.value=''">
				</td>
				</tr>

				
			<tr>
				<td>Pay Date:</td>
					 <td><input type="text" name = "paydate" style="width: 400px"
					value="<?php echo $paydate; ?>" onfocus="this.value=''">			
					</td>		 
			  </tr>				
				
				</tr>
				

<!--==================================================================================================================-->

	<tr>
	
	<td>Tax ToDate:</td>
		<td><input type="text" name = "tax" style="width: 200px"
		value="$<?php echo $tax;?>" onfocus="this.value=''">
	</td>
	
	</tr>
	
	<td><table bgcolor="C0C0C0"> 
	<tr><td>Basic Salary:</td>
		<td><input type="text" name = "basicsalary" style="width: 200px"
		value="<?php echo $basicsalary;?>" onfocus="this.value=''">
	</td>
	
	
	
	</tr>

	<tr><td>Over Time:</td>
		<td><input type="text" name = "overtime" style="width: 200px"
		value="<?php echo $overtime;?>" onfocus="this.value=''">
	</td>
	
	
	</tr>
	</table></td></tr>
</table>

<!--==================================================================================================================-->

</td>
</td>
</tr>
<!--==================================================================================================================-->
<td><center><table bgcolor="C0C0C0"></center>
				<tr>
				<td>NHIF Payment:</td>
					<td><input type="text" name = "nipayment" style="width: 380px"
					value="$<?php echo $nipayment; ?>" onfocus="this.value=''">
				</td></tr>
				<tr><td>Taxable Pay:</td>
					<td><input type="text" name = "taxablepay" style="width: 380px" 
					value="$<?php echo $taxablepay; ?>" onfocus="this.value=''">
				</td></tr>

				<tr><td>Pensionable Pay:</td>
					<td><input type="text" name = "pensionablepay" style="width: 380px"
					value="$<?php echo $pensionablepay; ?>" onfocus="this.value=''">
				</td></tr>	
	
		


<!--==================================================================================================================-->
	
		
				<tr>
				<td>Gross Pay:</td>
					<td><input type="text" name = "grosspay" style="width: 400px" 
					value="$<?php echo $grosspay; ?>" onfocus="this.value=''">
					
				</td></tr>
				<tr><td>Deductions:</td>
					<td><input type="text" name = "deduction" style="width: 400px" 
					value="$<?php echo $deduction; ?>" onfocus="this.value=''">
				</td></tr>

				<tr><td>Net Pay:</td>
					<td><input type="text" name = "netpay" style="width: 400px"
					value="$<?php echo $netpay; ?>" onfocus="this.value=''">
				</td></tr>
				
		</table></td></tr>
</table>
<!--====================================================================================================================-->
<table class="style1">
	<tr><td>
		<table bgcolor="808080"> 
				<tr>
				<td>Reference Note:</td>
				<td><textarea  cols="73" rows="5" >Net Pay:$<?php echo $netpay ;?> 
				This is based on Income Tax, National Insurance information from September 2021.					
				</textarea></td>	
				</tr>	
		</table></td>
<!--==================================================================================================================-->	
		<td><table bgcolor="C0C0C0"> 
				<tr>
				<td>&nbsp;</td><td align="left" style="width: 400px">
				<input type="submit" value="Submit" name = "add" class='btn'></td>	
				</tr>
				<tr>
				<td>&nbsp;</td><td align="left" style="width: 400px">
				<input type="reset" value="Reset" name = "cleartext" class='btn'></td> 		
					
				</tr>
		</table></td></tr>
</table>
<!--====================================================================================================================-->
  
</table>
<div>
</form>
</BODY>
</HTML>