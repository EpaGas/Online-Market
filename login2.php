<?php 
include 'controller/db_connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=E, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='contoller/logIn_User.php' method="POST">
<br> <br><input type="text" name='E=mail' placeholder="Input Email"/> &nbsp &nbsp
<input type="password" name= 'Password' placeholder="Input Password"/> &nbsp &nbsp 
        <label for="Password"> </label>
    <input type="submit" name='Submit' value="LOGIN"/>
</form>
</body>
</html>