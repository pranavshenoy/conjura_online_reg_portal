<?php 
	if(isset($_SESSION['msg_pre_pay']) && $pre_pay_flag==1) 
	{
		echo "<span style='color:red;'>".strtoupper($_SESSION['msg_pre_pay'])."</span>";
		unset($_SESSION['msg_pre_pay']);	
	}
?>

	<div class=" col-xs-12" style="border: 2px solid rgba(44, 62, 80,0.2);text-align:center;font-size: 13px;">
		<label for="name" style="color:#96044b;">Paytm Account Number</label>
		
	</div>								

<div style="text-align: center; position: relative;top: 18px;">
<button style="border-radius:0px;" class="btn btn-primary">Pay Amount</button>
</div>
<br>
<hr class="style1">

<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Transaction ID </label>
		<input type="text" class="form-control" style="border-radius:0px" name="trans_id" id="trans_id" placeholder="Enter The Transaction ID" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>
	</div>
	

