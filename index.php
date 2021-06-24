
<?php
$link = mysqli_connect("mysite.local", "root", "pass", "galary");
$result = mysqli_query($link,"SELECT * FROM img_props ORDER BY views desc");
while($rows=mysqli_fetch_assoc($result)){
    $dir = 'images/'; 
    echo '<a href="fullsize.php/?img_id=' . $rows["img_id"] . '"><img src=' . $dir . $rows["img_name"] . ' style="width: 200px;"></a>';
  }

