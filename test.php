        			if($row['team']=='y')
        			{
        				echo "<div class="form-group">";
										echo "<div class="col-md-4">";
											echo '<label for="name">*&nbsp;Full Name: </label>';
											echo '<input type="text" class="form-control" style="border-radius:0px" name="fullname".$_SESSION["event_count"] id="fullName" placeholder="Enter your Full Name">';
										<div class="col-md-4">
											<label for="name">*&nbsp;College: </label>
											<input type="text" class="form-control" style="border-radius:0px" name=<?php echo "college".$_SESSION['event_count'] ?> id="college" placeholder="Enter your College Name">
										</div>
							</div>

							<div class="form-group">
										<div class="col-md-4">
											<label for="name">*&nbsp;Email Id: </label>
											<input type="email" class="form-control" style="border-radius:0px" name=<?php echo "email".$_SESSION['event_count'] ?> id="email" placeholder="Enter your Email Id">
										</div>
										<div class="col-md-4">
											<label for="name">*&nbsp;Contact Number: </label>
											<input type="number" class="form-control" style="border-radius:0px" name=<?php echo "phone".$_SESSION['event_count'] ?> id="phone" placeholder="Enter your Contact Number">
										</div>
							</div>
 							<br/>
							<div class="col-md-4">
								<div class="radio">
									<label><input type="checkbox" value="accommodation" id="sw" name=<?php echo "accommodation".$_SESSION['event_count'] ?> >&nbsp;&nbsp;Accommodation</label>
								</div>
							</div>
        			}


























		<script> 
			var event_loop='<div class="form-group">\
				<div class="col-md-4">\
				  <label for="name">*&nbsp;Event Name:</label>\
				  <select class="form-control" id="select" onchange="changing()" name="events" style="border-radius:0px">\
				    <option value="" selected>Select...</option>\
				    <?php\
				    	$query="select * from events";\
				    	$result = $con->query($query);\
				    	if($result->num_rows>0)\
				    	{\
				    		while($row=$result->fetch_assoc())\
				    		{\
				    			echo "<option value=".$row["event_name"].">".$row["event_name"]."</option>";			\
				    		}\
				    	}\
				    ?>\
				  </select>\
				</div>\
			</div>\
			<button type="button" style="border-radius:0px" class="btn btn-primary" onclick="more()">+ participate in another event</button>';
			
			
		</script>
		
		
		
				 <?php           // stores all event details in a javascript variable
			$query="select * from events";
				$result = $con->query($query);
				if($result->num_rows>0)
				{
					echo '<script>';
					echo 'dropdown_code=';
					while($row=$result->fetch_assoc())
						echo '<option value='.$row['event_name'].'>'.$row['event_name'].'</option>';			
					echo '</script>';
				}

		?>
		
