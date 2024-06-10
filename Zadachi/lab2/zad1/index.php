<?php
echo "<p>purvi primer</p>";
$intNumber=100;
$strNumber="80";
if($intNumber>$strNumber) echo "<p>$intNumber is larger than $strNumber</p>";
elseif ($intNumber==$strNumber) echo "<p>$intNumber is equal to $strNumber</p>";
else echo "<p>$intNumber is small than $strNumber</p>";
?>

<?php 
echo "<p>vtori primer</p>";
$month=10;
switch ($month):
 case 3: case 4: case 5: echo "Сезона е пролет"; break;
 case 6: case 7: case 8: echo "Сезона е лято"; break;
 case 9: case 10: case 11: echo "Сезона е есен"; break;
 case 12: case 1: case 2: echo "Сезона е зима"; break;
 default: echo "$month е невалиден номер за месец";
endswitch;
?>

<?php
echo "<p>treti primer</p>";
//Решение чрез оператор while;
 $i=1;
 while($i<10):
if($i%2==0) print $i." ";
$i++;
 endwhile;
//Решение чрез оператор do-while
 $i=1;
 do {
if($i%2==0) print $i." ";
$i++;
 } while($i<10);
//Решение чрез оператор for
 for($i=1;$i<10;$i++) 
if($i%2==0) print $i." ";
?>