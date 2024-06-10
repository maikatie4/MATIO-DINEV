<?php
echo "<p>purvi primer</p>";
function &ref($par){
return $GLOBALS['name'];
}
$name="Petter";
$var=&ref($name);
echo "<br>name is ".$name; 
echo "<br>name is ".$var;
$var="Mimi";
echo "<br>name is ".$name;
echo "<br>name is ".$var;
?>
 
<?php 
echo "<p>vtori primer</p>";
$arr=array("Article"=>array(1=>"Kivi",5=>"Apple",3=>"Orange"),
"Price"=>array(1=>2.35,5=>1.35,3=>1.70));
echo $arr['Article'][1]."-".$arr['Price'][1];
echo "<br>".$arr['Article'][5]."-".$arr['Price'][5];
echo "<br>".$arr['Article'][3]."-".$arr['Price'][3];

?>

<?php
echo "<p>treti primer</p>";
$arrColors=array("R"=>"Red","G"=>"Green","B"=>"Blue");
 foreach($arrColors as $strKey=>$strColor)
echo "<p>$strKey - $strColor";
?>


