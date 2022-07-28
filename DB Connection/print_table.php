<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'DatabaseConnection.php';
$conn = new Connection();
$conn = $conn->makeConnection();


$sql = "SELECT * from products";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {

    ?>
    <style>
        table, th, tr, td {
            border: 2px solid #2c2222;
            padding: 5px 10px;
            margin: 5px;
        }
    </style>
    <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {

            ?>
            <tr>
                <td><img title=" " alt=" " style="width: 200px; height: 200px"
                         src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProductImage']); ?>"
                </td>
                <td><?php echo $row['ProductName']; ?></td>
                <td><?php echo $row['ProductShortDesc']; ?></td>
                <td><?php echo $row['ProductLongDesc']; ?></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <?php
}
?>
</body>
</html>