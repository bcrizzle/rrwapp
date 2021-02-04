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

<div style="width: 100%; text-align: center;">
    <img class="img-fluid " src="res/images/RRLogo.jpg" style="margin-left: auto;margin-right: auto; max-width: 10%;">
    <div style="width: 50%; margin-right: auto;margin-left: auto; margin-top: 5%">
    <?php
    include('dbconnect.php');
    $sql = "SELECT itemname, itemcount FROM items";
    $result = $conn ->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        echo "Error";
    }
    echo"
        <table class=\"table table-dark table-striped table-hover\">
            <thead>
                <tr>
                  <th scope=\"col\">Product Name</th>
                  <th scope=\"col\">On Hand Inventory</th>
                </tr>
            </thead>
            <tbody>
    ";
    while($row = mysqli_fetch_assoc($result)){
        $itemname = $row['itemname'];
        $itemcount = $row['itemcount'];
        echo"<tr><td>$itemname</td><td>$itemcount</td></tr>";
    }
    echo"</div></tbody></table>";
    ?>
</div>
</body>
</html>
