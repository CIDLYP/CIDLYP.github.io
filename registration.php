<?php


session_start();

$con = mysqli_connect('localhost','root','2234567dAda');
mysqli_select_db($con,'userregistration');
$name= $_POST['user'];
$pass= $_POST['password'];
$s=" select * from usertable where name =  '$name'";
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
	echo "Username Already Taken!";
}else{
	$reg= " insert into usertable(name, password) values('$name', '$pass')";
    mysqli_query($con, $reg);
	echo"Registration Successful!";
}
?>
<html>
    <head>
    </head>
    <body>
	    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <a class="float-right" href="logout.php">Return to the Login Page.</a>
    </body>
</html>