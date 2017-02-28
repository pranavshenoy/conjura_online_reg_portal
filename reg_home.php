	<div class="form-labels-on-top">
	<form method="post" id="form1" class="form-horizontal" role="form" action="next.php"> <div id="error"></div>	 
		 <div class="form-group">
		  <div class="col-xs-12">
		    <label for="name">Full Name&nbsp;*</label>
		    <input type="text" class="form-control" style="border-radius:0px" name="fullName" id="fullName" placeholder="Enter your Full Name" required>
		  	<span style="color:#96044b;font-size:16px">&nbsp;(Name of Team Lead for Team Events)</span>
		  </div>
		  <div class="col-xs-12">
		    <label for="name">College&nbsp;*</label>
		    <input type="text" class="form-control" style="border-radius:0px" name="college" id="college" placeholder="Enter your College Name" required >
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-xs-12">
		    <label for="name">Email Id&nbsp;* </label>
		    <input type="email" class="form-control" style="border-radius:0px" name="email" id="email" placeholder="Enter your Email Id">
		  </div>
		  </div>
		  <div class="form-group">
		  <div class="col-xs-12">
		    <label for="name">Contact Number&nbsp;* </label>
		    <input type="text" class="form-control" style="border-radius:0px" name="phone" id="phone" placeholder="Enter your Contact Number" required>
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
		 		 
		<div class="form-group" >
		  <div class="">			<!--  displays number of events   -->
					<div class="col-xs-12">
						<label for="name">No. Of Events&nbsp;* </label>
						<input type="number" class="form-control" style="border-radius:0px" name="e_count" id="e_count" onchange="more()" value="" required></input>
				 	</div>
				 	
		  </div>
		  
		  <div class="" id="add_event">      <!-- dropdown list       -->        				
		  </div>			<!-- end of add_event      --> 
		
		</div>        <!-- end of form_group       --> 
			
		<br/>
		<div  class="form-group"> 
		  <div style="text-align: center;" class="col-xs-12">
		    <button type="submit" style="border-radius:0px" class="btn btn-primary">Next</button>
		  </div>
		</div>
	</form>
	</div>
