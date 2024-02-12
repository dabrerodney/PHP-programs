<?php
$arr = array(50, 20, 10, 90, 22);
sort($arr);

$len = count($arr);
for($i = 0; $i < $len; $i++)
{
echo $arr[$i];
echo "<br>";
}
?>