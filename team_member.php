<?php echo "<h4 class='teamEvent'><span class='teamEventdetails'>Event details of </span>".$row['event_name']."</h4>"; ?>
<div class="form-group">
		<div class="col-xs-12">
			<label for="name">Full Name&nbsp;* </label>
			<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "fullName".$e_team_temp ?> id="fullName" placeholder="Enter your Full Name" required>
		</div>
		</div>
		<div class="form-group">
		<div class="col-xs-12">
			<label for="name">College&nbsp;* </label>
			<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "college".$e_team_temp ?> id="college" placeholder="Enter your College Name" required >
		</div>								
</div>

<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Email Id&nbsp;* </label>
		<input type="email" class="form-control" style="border-radius:0px" name=<?php echo "email".$e_team_temp ?> id="email" placeholder="Enter your Email Id">
	</div>
	</div>
	<div class="form-group">
	<div class="col-xs-12">
		<label for="name">Contact Number&nbsp;* </label>
		<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "phone".$e_team_temp ?> id="phone" placeholder="Enter your Contact Number" required>
	</div>
</div>

<div class='form-group'>
		<div class="col-xs-12">
		    <label for="name">Gender&nbsp;*</label>
		    <div style="padding-top: 0; padding-left: 1px;" class="radio">
		      <label style="padding-right: 8px;"><input type="radio" value="m" id="sw" name="gender">&nbsp;&nbsp;Male</label>
		      <label><input type="radio" value="f" id="sw" name="gender">&nbsp;&nbsp;Female</label>
		    </div>
		  </div>
		  
		  <br>
		  <div class="col-xs-12">
		    <label for="name">Need Accommodation?</label>
		    <div style="padding-top: 0; padding-left: 1px;"class="radio">
		      <label style="padding-left: 0;"><input type="checkbox"  value="y" id="sw" name="accommodation">&nbsp;&nbsp;Yes</label>
		    </div>
		  </div>
			
		  
		</div> 
<hr class="style1">