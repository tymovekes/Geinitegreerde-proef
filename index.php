<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="tymo-vekens" content="tymo">
    <title>inlog</title>
</head>
<body>
    <?php
    if($_GET['Empty']==true)
    {
        ?>
    <div><?php echo $_GET['Empty']?></div>
    <?php
    }
    ?>


<?php
    if($_GET['Invalid']==true)
    {
        ?>
    <div><?php echo $_GET['Invalid']?></div>
    <?php
    }
    ?>


<div>      
<form action="procces.php" method="post">
    <input type="text" name="UName" placeholder=" User Name" class="form-control"><br>
    <input type="password" name="Password" placeholder=" Password " class="form-control">
    <button name="Login">login</button>
    </div>
</body>
</html>
