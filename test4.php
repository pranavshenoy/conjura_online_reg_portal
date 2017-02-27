<!--<select class="form-control" id="select1" name="events" style="border-radius:0px">
	    <option value="1" selected>Select...</option>
	    <option value="2" selected>Select...</option>
</select>
<p id="p">sdfsdfsdf</p>	    
<script type="javascript">
 

 $('select[name=events]').change(function () {
    if ($(this).val() == '1') {
        document.getElementById("p").innerHTML ="success";
    } else {
        document.getElementById("p").innerHTML ="sorry";
    }
});

</script>-->

<!--<script type="text/javascript">

	function more()
	{
	  var event_loop=' ';
		for(var i=1;i<=document.getElementById("e_count").value;i++)
		{
			 event_loop+='<div class="row">   \
					<div class="col-md-6">\
						<label for="name">*&nbsp;Event Name:</label>\
						<select class="form-control" id="select'+(++event_count)+'" onchange="changing()" name="events'+(event_count)+'" style="border-radius:0px">\
							<option value="" selected>Select...</option>'+dropdown_code+'\
						</select>\
					</div>				\
					<div class="col-md-6">amount</div>\
				</div>;
		}
		document.getElementById("e_count").value = 4444444;
	}

</script>


<div class="row">			<!--  displays number of events  
					<div class="col-md-6">
						<label for="name">*&nbsp;No, Of events: </label>
						<input type="number" class="form-control" style="border-radius:0px" name="e_count" id="e_count" onchange="more()" value="" ></input>
				 	</div>
				 	<div class="col-md-6"></div>
		  </div>-->
		  
		  
		  
		  <!DOCTYPE html>
<html>
<body>

<p>This example demonstrates how to assign an "onchange" event to an input element.</p>

Enter your name: <input type="text" id="e_count" onchange="myFunction()">

<p>When you leave the input field, a function is triggered which transforms the input text to upper case.</p>

<script>
function myFunction() {
    		document.getElementById("e_count").value = 4444444;
}
</script>

</body>
</html>

