<?php
echo "<p>purvi primer</p>";
?>
<html> 
 <head> 
 <title><?php echo "Hello, Boys and Girls!"; ?></title> 
 </head> 
 <body> 
 <?php 
 echo "Hello, World!"; 
 ?> 
 </body> 
 </html>

 
 <?php 
echo "<p>vtori primer</p>";
$x=10;
$y=7;
$result=$x+$y;
echo "<br> Сумата е: $x+$y=$result";
$result=$x-$y;
echo "<br> Разликата е: $x-$y=$result";
$result=$x*$y;
echo "<br> Произведението е: $x*$y=$result";
$result=$x/$y;
echo "<br> Частното е: $x/$y=$result";
$result=$x%$y;
echo "<br> Остатъка е: $x%$y=$result";
?>

<?php
echo "<p>treti primer</p>";
echo "SERVER_NAME=".$_SERVER['SERVER_NAME'];
echo "<br>"; 
echo "SERVER_ADDR=".$_SERVER['SERVER_ADDR'] ; 
echo "<br>"; 
$x=$_SERVER['SERVER_SOFTWARE'];
echo "Вашия уеб сървър е: $x";
echo "<br>";
echo "Вашите браузър и операционната система
са:".$_SERVER['HTTP_USER_AGENT']; 
echo "<br>"; 
?>


