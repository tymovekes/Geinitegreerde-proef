<?php
session_start();

if(isset($_GET['logout']))
{
    session_destroy();
    header("location.php");
}
else
{
    header("location:index.php");
}