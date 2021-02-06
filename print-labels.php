<?php
require_once('LabelMaker.php');
include('dbconnect.php');
$lm = new LabelMaker($showLabelTemplate);
if(isset($_POST['submit'])){
  for($i = 0; $i<=count($_POST);$i++){
    if($_POST[$i] != null && $_POST[$i] != 'submit' && $_POST[$i] != 'Submit'){
      $itemcount = $_POST[$i];
      $sql = "SELECT itemname, itemprice, itemdesc from items where itemid = '$i'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      $itemname = $row['itemname'];
      $itemprice = '$' . $row['itemprice'];
      $itemdesc = $row['itemdesc'];
      for ($j = 0; $j < $itemcount; $j++){
        $lm->addAddress($itemname,$itemprice,$itemdesc);
      }
    }
    else{
      continue;
    }
  }
  $lm->output();
}
else{
  die('<h1>NO INFORMATION PROVIDED PLEASE SUBMIT FROM SIGNAGE PAGE</h1>');
}
?>
