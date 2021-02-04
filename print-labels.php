<?php


require_once('LabelMaker.php');

include('dbconnect.php');
$sql = 'SELECT itemname, itemprice, itemdesc from items';
$result = $conn->query($sql);
$lm = new LabelMaker($showLabelTemplate);
while($row = mysqli_fetch_assoc($result)){
  $itemname = $row['itemname'];
  $itemprice = '$'.$row['itemprice'];
  $itemdesc = $row['itemdesc'];
  $lm->addAddress($itemname,$itemprice,$itemdesc);
}
$lm->output();





?>
