	<form method="post" id="form1" class="form-horizontal" role="form" action="next.php"> <div id="error" style="text-align:center"></div>	 
		 <div class="form-group">
		  <div class="col-md-4">
		    <label for="name">*&nbsp;Full Name: </label>
		    <input type="text" class="form-control" style="border-radius:0px" name="fullName" id="fullName" placeholder="Enter your Full Name" required>
		  	<span style="color:red;font-size:16px">&nbsp;(Name of Team Lead for Team Events)</span>
		  </div>
		  <div class="col-md-4">
		    <label for="name">*&nbsp;College: </label>
		    <input type="text" class="form-control" style="border-radius:0px" name="college" id="college" placeholder="Enter your College Name" required >
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-md-4">
		    <label for="name">*&nbsp;Email Id: </label>
		    <input type="email" class="form-control" style="border-radius:0px" name="email" id="email" placeholder="Enter your Email Id">
		  </div>
		  <div class="col-md-4">
		    <label for="name">*&nbsp;Contact Number: </label>
		    <input type="text" class="form-control" style="border-radius:0px" name="phone" id="phone" placeholder="Enter your Contact Number" required>
		  </div>
		</div>

		<div class='form-group'>
		  <div class="col-md-4">
		    <label for="name">Need Accommodation?:</label>
		    <div class="radio">
		      <label><input type="checkbox" value="y" id="sw" name="accommodation">&nbsp;&nbsp;Yes</label>
		    </div>
		  </div>
			<br/>
		  <div class="col-md-4">
		    <label for="name">*&nbsp;Gender:</label>
		    <div class="radio">
		      <label><input type="radio" value="m" id="sw" name="gender">&nbsp;&nbsp;Male</label>
		      <label><input type="radio" value="f" id="sw" name="gender">&nbsp;&nbsp;Female</label>
		    </div>
		  </div>
		</div> 
		 		 
		<div class="form-group" >
		  <div class="row">			<!--  displays number of events   -->
					<div class="col-md-6">
						<label for="name">*&nbsp;No. Of Events: </label>
						<input type="number" class="form-control" style="border-radius:0px" name="e_count" id="e_count" onchange="more()" value="" required></input>
				 	</div>
				 	<div class="col-md-6"></div>
		  </div>
		  
		  <div class="row" id="add_event">      <!-- dropdown list       -->        				
		  </div>			<!-- end of add_event      --> 
		
		</div>        <!-- end of form_group       --> 
			
		<br/><br/><br/><br/>
		<div class="form-group"> 
		  <div class="col-sm-offset-5 col-sm-8">
		    <button type="submit" style="border-radius:0px" class="btn btn-primary">NEXT</button>
		  </div>
		</div>
	</form>
