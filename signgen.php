<html<html lang="en">
<head>
    <title>Rustik Reclamations SIGNAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body style="background-color: whitesmoke;">
<div style="width: 100%; text-align: center;">
    <img class="img-fluid " src="res/images/RRLogo.jpg" style="margin-left: auto;margin-right: auto; max-width: 10%;">
</div>
<h1>Signage</h1>
<form method="post" action="print-labels.php">
<table class="table table-dark table-striped table-hover">
<thead>
<tr>
    <th scope="col">Product Name</th>
    <th scope="col">Labels Requested</th>
</tr>
</thead>
<tbody>
<?php
include('dbconnect.php');
$sql = "SELECT itemid, itemname FROM items";
$result = $conn ->query($sql);
while($row = mysqli_fetch_assoc($result)){
    $itemname = $row['itemname'];
    $itemid = $row['itemid'];
    echo"<tr><td>$itemname</td>
        <td>
            <input type='number' name='$itemid'>
        </td></tr>";
}
echo"<tr><td><input name='submit' type='submit' class='btn btn-danger'></td><td></td></tr></div></tbody></table></form>";
?>

</div>
</body>
</html>
