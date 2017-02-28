<?php 
	if(isset($_SESSION['msg_pre_pay']) && $pre_pay_flag==1) 
	{
		echo "<span style='color:red;'>".strtoupper($_SESSION['msg_pre_pay'])."</span>";
		unset($_SESSION['msg_pre_pay']);	
	}
?>
<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Transaction ID </label>
		<input type="text" class="form-control" style="border-radius:0px" name="trans_id" id="trans_id" placeholder="Enter The Transaction ID" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>
	</div>
	<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Paytm Account Number</label>
		<input type="text" class="form-control" style="border-radius:0px" name="ac_no" id="ac_no" placeholder="Enter Paytm Account Number" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>								
</div>

