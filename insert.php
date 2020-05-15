<?php
$con=mysqli_connect('localhost','root','');
if (!$con) {
	echo "server not connected";
}
if(!mysqli_select_db($con,'medha'))
{
	echo "not database";
}
$Name=$_POST['name'];
$Email=$_POST['email'];
$Contact_Number=$_POST['contact_number'];
$Message=$_POST['message'];
$sql="INSERT INTO form(name,email,contact_number,message) VALUES('$Name','$Email','$Contact_Number','$Message')";
if(!mysqli_query($con,$sql)){
	echo "not inserted";
}
else{
	echo "your concern is valuable for us. we will contact you shortly.";
}
header("refresh:5; url=contact.php")
?>