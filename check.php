<?php
session_start();
if(isset($_SESSION['counter'])){
	$_SESSION['counter']+=1;
}else{
	$_SESSION['counter']=1;
}
$msg="You have visited this page".$_SESSION['counter'];
$msg.="in this session";


     $name=$_SESSION['name'];
    $passw=$_SESSION['password'];
    include 'dbconnection.php';
    $sql = "SELECT id FROM adduser WHERE password='$passw' AND name = '$name'";

$result = $conn->query($sql);

$count=$result->num_rows;





    
if($count!=1){

   
  
	echo "First you need to login";
     header('location:loginpage.php');

}




?>


