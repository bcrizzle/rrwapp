<html lang="en">
<head>
    <title>Rustik Reclamations MGMNT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body style="background-color: whitesmoke;">
<?php
include('dbconnect.php');
if (isset($_POST)){
    $prodname = $_POST['prodname'];
    $prodcost = $_POST['prodcost'];
    $prodprice = $_POST['prodprice'];
    $proddesc = $_POST['proddesc'];
    $prodcount = $_POST['prodcount'];

    $sql = "INSERT INTO `items` (`itemname`, `itemcost`, `itemprice`, `itemdesc`, `itemcount`, `itemqr`) VALUES ('$prodname','$prodcost', '$prodprice', '$proddesc', '$prodcount','')";
    $conn->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        echo "Error";
    }
    else
        echo "<script>alert('Success')</script>";
}
?>
<div style="width: 100%; text-align: center;">
    <img class="img-fluid " src="res/images/RRLogo.jpg" style="margin-left: auto;margin-right: auto; max-width: 10%;">
    <div style="width: 40%; margin-right: auto; margin-left: auto;margin-top: 5%; text-align: left">
        <form method="post" action="createprod.php">
            <div class="mb-3">
                <label for="prodname" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="prodname" name="prodname">
                <label for="prodcost" class="form-label">Product Cost</label>
                <input type="number" class="form-control" id="prodcost" name="prodcost" step="any">
                <label for="prodprice" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="prodprice" name="prodprice" step="any">
                <label for="proddesc" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="proddesc" name="proddesc">
                <label for="prodcount" class="form-label">Initial Inventory</label>
                <input type="number" class="form-control" id="prodcount" name="prodcount">
                <input type="submit" class="btn btn-danger" id="submit" style="margin-top: 1%">
            </div>
        </form>
    </div>
</div>
</body>
</html>
