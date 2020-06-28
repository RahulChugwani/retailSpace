<?php 
$owner_email=$_POST['owner_email'];
$owner_password=$_POST['owner_password'];
$owner_firstName=$_POST['owner_firstName'];
$owner_lastName=$_POST['owner_lastName'];
$owner_phoneNo=$_POST['owner_phoneNo'];

$owner_password=md5($owner_password);
// Database connection
$con = new mysqli("localhost","root","","shop_inventory");
// query
$query ="INSERT INTO `shop_owner` (`owner_email`, `owner_password`, `owner_firstName`, `owner_lastName`, `owner_phoneNo`) VALUES ('$owner_email','$owner_password','$owner_firstName','$owner_lastName', '$owner_phoneNo')";
// to execute error
if($con->query($query)){
	/*header("location: index.php");
	echo "DATA INSERTED SUCCESSFULLY";*/
	echo ("<script language='JavaScript'>
    window.location.href= 'index.php';
    window.alert('Registration done successfully. Please SignIn to access the website');
    </script>");
}

else{
	echo mysqli_error($con);//if any error occured
	/*echo ("<script language='JavaScript'>
    window.location.href= 'signUp.php';
    window.alert('Registration not done successfully. Please SignUp once again');
    </script>");*/
	

}



 ?>