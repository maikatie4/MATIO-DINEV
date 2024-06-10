<?php
$i = 1;
while ($i < 10) {
    if ($i % 2 == 0) print $i . " ";
    $i++;
}

$i = 1;
do {
    if ($i % 2 == 0) print $i . " ";
    $i++;
} while ($i < 10);

for ($i = 1; ; $i++) {
    if ($i >= 10) break;
    if ($i % 2 == 0) print $i . " ";
}
?>
