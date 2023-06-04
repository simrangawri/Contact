<?php include "../inc/dbinfo.inc"; ?>
<?php
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
//insert
$name = $_POST['name']; 
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber']; 
$message = $_POST['message'];   

$run = "INSERT INTO `contact`(name, email, phonenumber, message) VALUES ( '$name' , '$email' , '$phonenumber' , '$message' )";
$result = mysqli_query( $conn , $run) ;
if($result)
{
	echo "<br><br><br><br><br><br><br><br><h1 align='center'>Yours Details are Submitted...!!</h1>";
        echo "<br><br><br><br><br><br><br><br><h1 align='center'>Thank You...!!</h1>";
        header( "refresh:3;url=contact.html" );
    
}
else
{
	echo "not registered";
        header( "refresh:3;url=contact.html" );
} 

?>
