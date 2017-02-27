<div class="form-group">
	<div class="col-md-4">
		<label for="name">Transaction ID </label>
		<input type="text" class="form-control" style="border-radius:0px" name="trans_id" id="trans_id" placeholder="Enter The Transaction ID" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>
	
	<div class="col-md-4">
		<label for="name">Paytm Account Number</label>
		<input type="text" class="form-control" style="border-radius:0px" name="ac_no" id="ac_no" placeholder="Enter Paytm Account Number" <?php if($pre_pay_flag==1) echo "required"?> >
	</div>								
</div>

