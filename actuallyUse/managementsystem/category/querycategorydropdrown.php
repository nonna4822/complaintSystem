<?php
require '../connect.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);
$selectObj = '<select name = "catname" class="selectpicker">';
while($row = mysqli_fetch_array($result)) {
  $selectObj = $selectObj.'<option value="'.$row['catname'].'">'.$row['catname'].'</option>';
}
$selectObj = $selectObj . '</select>';
echo $selectObj;

mysqli_close($conn);
 ?>
