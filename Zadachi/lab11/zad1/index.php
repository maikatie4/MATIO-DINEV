<?php
require_once("index.php");

if (isset($_POST['submit'])) {
    if ($_POST['name'] != "Name") {
        $strSurname = $_POST['name'];
    }
    if (isset($_POST['date1'])) {
        $ot_data = $_POST['date1'];
    }
    if (isset($_POST['date2'])) {
        $do_data = $_POST['date2'];
    }

    
    $queryporuchki = "SELECT * FROM poruchki WHERE customer_surname='$strSurname' AND purchase_date BETWEEN '$ot_data' AND '$do_data'";
    $dbporuchki = mysqli_query($con, $queryporuchki);

    if (!$dbPurchasesRecords) {
        die('Неуспешно запитване. Получи следната грешка' . mysqli_error($con));
    }

    
    while ($poruchki = mysqli_fetch_array($poruchki)) {
        :
        echo "Дата на покупка: " . $poruchki['purchase_date'] . "<br>";
        echo "Сума: " . $purchase['amount'] . "<br>";
   
    }
}
?>