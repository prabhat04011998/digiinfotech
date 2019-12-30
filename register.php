<?php 
include 'includes/header.php';
include 'includes/config.php';


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$phno=$_POST['phno'];
	$message=$_POST['message'];

	$query="INSERT INTO registration(name,email,college,phno,message) VALUES ('$name','$email','$college','$phno','$message')";
	$result=mysqli_query($db,$query) or die (mysqli_error($db));;
	print_r($result);


}


?>
<div id="contact" class="section md-padding">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title" style="color:#fff;">Register</h2>
</div>


<div class="col-sm-4">
<div class="contact">
<i class="fa fa-phone"></i>
<h3>Phone</h3>
<p>+91-7417-330025</p>
</div>
</div>


<div class="col-sm-4">
<div class="contact">
<i class="fa fa-envelope"></i>
<h3>Email</h3>
<p>email@support.com</p>
</div>
</div>


<div class="col-sm-4">
<div class="contact">
<i class="fa fa-map-marker"></i>
<h3>Address</h3>
<p>5/3/11 Geeta Colony-110031</p>
</div>
</div>


<div class="col-md-8 col-md-offset-2">
<form class="contact-form" method="POST" action="">
<input type="text" class="input" placeholder="Name" name="name" required>
<input type="email" class="input" placeholder="Email" name="email" required>
<input type="text" class="input" placeholder="College/University" name="college">
<input type="tel" class="input"  placeholder="Whatsapp No." name="phno" required>
<textarea class="input" placeholder="Message" name="message"></textarea>
<button class="main-btn" type="submit" name="submit">Send message</button>
</form>
</div>

</div>


</div>

</div>

<?php include 'includes/footer.php'?>