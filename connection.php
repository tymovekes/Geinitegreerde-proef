<?php  
$servername="localhost";
$username="tymov";
$password="Vekens_23";
$db="tymov_Aanmelding"
/* connectie 1
$con=mysqli_connect('localhost','root','Vekens_23','Aanmelding');

if(!$con)
{

    die(' kijk je connectie na'.mysqli_error($con));
}*/

$connect= new mysqli($servername,$user,$password,$db);

if($connect->error)
{
    die("gefaalde connecite met database".$con->connect_error)
}

?>