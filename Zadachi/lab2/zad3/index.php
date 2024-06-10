<?php
include 'promenliva.php';

if ($intNumber > $strNumber) {
    echo "<p>$intNumber is larger than $strNumber</p>";
} elseif ($intNumber == $strNumber) {
    echo "<p>$intNumber is equal to $strNumber</p>";
} else {
    echo "<p>$intNumber is smaller than $strNumber</p>";
}
?>
