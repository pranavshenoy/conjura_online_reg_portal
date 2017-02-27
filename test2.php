<script> 
	var temp=15;
</script>

<?php
/*$y=300;
echo '<script>';
echo 'temp='.$y;
echo '</script>';*/
?>
<script>
  
  function f()
  {
  	document.getElementById("fullName").value = "i am pranav";
  
  }

</script>
<p id="demo" onclick="myFunction()">Click me to change my HTML content (innerHTML).</p>
<input type="number" class="form-control" style="border-radius:0px" name="fullName" onclick="f()" id="fullName" value="helooo" placeholder="Enter your Full Name" readonly>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML += temp;
}
</script>
