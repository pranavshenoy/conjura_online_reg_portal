<?php 
	if(isset($_SESSION['msg_pre_pay']) && $pre_pay_flag==1) 
	{
		echo "<p class='msgprepay'>".$_SESSION['msg_pre_pay']."</p>";
		unset($_SESSION['msg_pre_pay']);	
	}
?>

	<div class=" col-xs-12" style="border: 2px solid rgba(44, 62, 80,0.2);text-align:center;font-size: 13px;">
		<label for="name" style="">Paytm Account Number <br><span style="color:#96044b;"> +91 9567016262</span></label>
	</div>								

<div style="text-align: center; position: relative;top: 18px;">
<button type="button" style="border-radius:0px;" class="btn btn-primary">Pay Amount</button>
</div>
<br>
<hr class="style1">
<div class="instructions">
			<h4 style="text-align: center;">Instructions For Payment</h4>
			<ul>
				<li>
					<h6><span style="color:#2c3e50">Step 1 :</span>Click the Pay Amount button for payment.<h6>
				</li>
				<li>
					<h6><span style="color:#2c3e50">Step 2 :</span>Using your paytm account, transfer the above mentioned amount to the specified account number.<h6>
				</li>
				<li>
					<h6><span style="color:#2c3e50">Step 3 :</span>Once the transaction is successful,enter the transaction id in the input field provided and click the Register button.<h6>
				</li>
				<li>
					<h6><span style="color:#2c3e50">Step 4 :</span>If the registration is successful, your Conjura Id  will be displayed and will receive a confirmation mail within 48hrs.<h6>
				</li>			
			</ul>

</div>
<hr class="style1">
<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Transaction ID </label>
		<input type="text" class="form-control" style="border-radius:0px" name="trans_id" id="trans_id" placeholder="Enter The Transaction ID" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>
</div>
	


