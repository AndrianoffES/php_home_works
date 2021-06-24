
<?php
$link = mysqli_connect("mysite.local", "root", "pass", "galary");
$result = mysqli_query($link,"SELECT * FROM img_props ORDER BY views desc");
while($rows=mysqli_fetch_assoc($result)){
    $dir = 'images/'; 
    echo '<a href="fullsize.php/?img_id=' . $rows["img_id"] . '"><img src=' . $dir . $rows["img_name"] . ' style="width: 200px;"></a>';
  }
/*
if (isset($_GET['img_id']) && is_numeric($_GET['img_id']) && $_GET['img_id']>0){
    $full_page_result = mysqli_query($link, "SELECT img_id FROM img_props");
    var_dump($_GET);
}

if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли файл на сайте
$destiation_dir = 'images' .'/'.$_FILES['inputfile']['name']; // директория назначения файла откуда он потом сразу груится на страничку
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'Файл загружен'; // Оповещаем что файл загружен
}
else{
echo 'Файл не был загружен'; // Оповещаем что файл не был загружен
}
// загрука картинок из директории на сайт
*/

