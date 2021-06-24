

<?php
if (isset($_GET['img_id']) && is_numeric($_GET['img_id']) && $_GET['img_id']>0){
   //var_dump($_GET['img_id']);
    $img_id = $_GET['img_id'];
   //var_dump($img_id);
$link = mysqli_connect("localhost", "root", "pass", "galary");
if(!$link) echo mysqli_error($link) . mysqli_errno($link);
$result = mysqli_query($link, "SELECT * FROM img_props WHERE img_id = $img_id");
if (!$result)
echo mysqli_error($link) . mysqli_errno($link);
//var_dump($result);
while($rows=mysqli_fetch_assoc($result)){
    $dir = 'images/'; 
   //var_dump($rows);
    echo '<img src=' . $dir . $rows["img_name"] . '>';
    
    echo '<h3>Число просмотров: ' . $rows["views"] . '<h3>';
    }
$result2 = mysqli_query($link, "UPDATE img_props SET views=views+1 WHERE img_id=$img_id");
if (!$result2) echo mysqli_error($link) . mysqli_errno($link);
}