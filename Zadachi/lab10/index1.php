<?php
session_start();

// Check if user is logged in and has admin privileges
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    die('Нямате необходимите права за добавяне на нови стоки.');
}

$con = mysqli_connect('localhost', 'root', '', 'ShoppingCenter');
if (!$con) {
    die('Неуспешно свързване. Получи се следната грешка: ' . mysqli_connect_error());
}

// Get form data and validate
$productName = $_POST['productName'];
$quantity = $_POST['quantity'];
$supplier = $_POST['supplier'];

if (empty($productName) || empty($quantity) || empty($supplier)) {
    die('Всички полета са задължителни. Моля, попълнете всички полета.');
}

$query = "INSERT INTO deliveries (DeliveryID, ProductName, Quantity, Supplier) VALUES ('0', '$productName', '$quantity', '$supplier')";
$dbreg = mysqli_query($con, $query);

if (!$dbreg) {
    die('Получи се следната грешка: ' . mysqli_error($con));
} else {
    echo "Вие успешно добавихте информацията за новата стока";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>Добавяне на нова стока</title>
<script>
function validateDeliveryForm() {
    var fields = ["productName", "quantity", "supplier"];
    var valid = true;
    fields.forEach(function(field) {
        if (document.forms["deliveryForm"][field].value === "") {
            alert("Полето " + field + " е задължително!");
            valid = false;
        }
    });
    return valid;
}
</script>
</head>
<body>
<div style="width:1000px">
<div style="text-align:center">
<h1>Въведи необходимата информация за новата стока</h1><br>
</div>
<form name="deliveryForm" method="post" action="index1.php" onsubmit="return validateDeliveryForm()">
<div style="margin-left:140px;">
<table style="text-align:left;font-weight:bold">
<tr>
<td><label for="productName"> Име на продукта: </label></td>
<td><input type="text" name="productName" id="productName"></td>
</tr>
<tr>
<td><label for="quantity"> Количество: </label></td>
<td><input type="number" name="quantity" id="quantity"></td>
</tr>
<tr>
<td><label for="supplier"> Доставчик: </label></td>
<td><input type="text" name="supplier" id="supplier"></td>
</tr>
</table>
</div>
<div style="height:30px"></div>
<div style="text-align:center">
<span> <input type="submit" name="submit" value="Добави"> 
</span>
</div>
</form>
</div>
</body>
</html>
