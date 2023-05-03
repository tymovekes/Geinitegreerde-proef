<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('$connection.php');
session_start();
if(isset($_POST['Login']))
{
  
    if(empty($_POST['UName']) || empty($_POST['Password']))
    {
header("location:index.php?Empty= vull de lege vakjes in");
    }
    else {
        $query="select * from werknemer where UNAME='".$_POST['UName']."' and Pass'". $_POST['Password']."'";
       $result=mysqli_query($con,$query);
       
       if (mysqli_fetch_assoc($result)) 
       {
        $_SESSION[$_POST['UName']]
        header("location:welcome.php");
       }
    }
}
else {
  header("location:index.php?Invalid= give the good password an name");
}
?>