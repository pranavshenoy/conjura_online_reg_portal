<?php echo "Team Event Details for ".$row['event_name'];  ?>
<div class="form-group">
		<div class="col-md-4">
			<label for="name">*&nbsp;Full Name: </label>
			<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "fullName".$e_team_temp ?> id="fullName" placeholder="Enter your Full Name" required>
		</div>
		
		<div class="col-md-4">
			<label for="name">*&nbsp;College: </label>
			<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "college".$e_team_temp ?> id="college" placeholder="Enter your College Name" required >
		</div>								
</div>

<div class="form-group">
	<div class="col-md-4">
		<label for="name">*&nbsp;Email Id: </label>
		<input type="email" class="form-control" style="border-radius:0px" name=<?php echo "email".$e_team_temp ?> id="email" placeholder="Enter your Email Id">
	</div>
	<div class="col-md-4">
		<label for="name">*&nbsp;Contact Number: </label>
		<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "phone".$e_team_temp ?> id="phone" placeholder="Enter your Contact Number" required>
	</div>
</div>

<div class='form-group'>
	<div class="col-md-4">
		<label for="name">Need Accommodation?:</label>
		<div class="radio">
			<label><input type="checkbox" value="y" id="sw" name=<?php echo "accommodation".$e_team_temp ?>>&nbsp;&nbsp;Yes</label>
		</div>
	</div>
	<br/>
	<div class="col-md-4">
		<label for="name">*&nbsp;Gender:</label>
		<div class="radio">
			<label><input type="radio" value="m" id="sw" name=<?php echo "gender".$e_team_temp ?>>&nbsp;&nbsp;Male</label>
			<label><input type="radio" value="f" id="sw" name=<?php echo "gender".$e_team_temp ?>>&nbsp;&nbsp;Female</label>
		</div>
	</div>
</div>
