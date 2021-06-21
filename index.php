
<html>
<head>
<title>Фотогалерея</title>
</head>
<body>
<h1>Фотогалерея</h1>
<form method="post" action="index.php" enctype="multipart/form-data">
<label for="inputfile"></label>
<input type="file" id="inputfile" name="inputfile"></br>
<input type="submit" value="Загрузить">
</form>
</body>
</html>
<?php
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли файл на сайте
$destiation_dir = 'images' .'/'.$_FILES['inputfile']['name']; // директория назначения файла откуда он потом сразу груится на страничку
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'Файл загружен'; // Оповещаем что файл загружен
}
else{
echo 'Файл не был загружен'; // Оповещаем что файл не был загружен
}
// загрука картинок из директории на сайт
$dir = 'images/';
$images = scandir($dir);
for ($i = 0; $i < count($images); $i++) {
  if ($images[$i] != '.' && $images[$i] != '..') {
    echo '<a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 200px;"></a>';
  }
}