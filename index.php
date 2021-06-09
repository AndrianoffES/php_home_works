<!doctype html>
<html lang="ru">
<?php
$header= "<h1> HEADER </h1>";
$title= "<title> TITLE </title>";
$year= date('Y');
?>
<head>
  <meta charset="utf-8" />
  <?php
  echo $title
  ?>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    echo $header
    ?>

</body>
<?php
echo $year
?>
</html>

<?php


?>