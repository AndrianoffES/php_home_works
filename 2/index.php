<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
if(!isset($_COOKIE['loggined'])){ 
  ?>
<form action="personal.php" method="post">
  <input type="text" name="login" placeholder="enter yuor login"><br>
<input type="password" name="pass"><br>
<input type="submit" value="">
</form>

<?php } 

else {
  echo $_GET['login'] . ', ' . 'добро пожаловать в ваш личный кабинет';
  echo '<form method="post" action="personal.php"><input type="submit" name="logout" value="loguot"></form>';
}

?>

</body>
</html>