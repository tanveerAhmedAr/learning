<?php 

$a = [1, 2, 3, 4, 5];
$b = array(9, 8, 7, 6, 5, 4);


echo '<br>';
echo 'Array A :';
echo '<pre>';
print_r($a);
echo count($a);
echo '</pre>';

echo '<br>';
echo 'Array B :';
echo '<pre>';
print_r($b);
echo count($b);
echo '</pre>';

$result = array_unique(array_merge($a, $b));
echo '<br>';
echo 'Array after merging A and B :';
echo '<pre>';
print_r($result);
echo count($result);
echo '</pre>';

$push10 = array_push($result, 11);
echo '<br>';
echo 'Array after pushing 11 in merged array:';
echo '<pre>';
print_r($result);
echo count($result);
echo '</pre>';

echo '<br>';
$pusharr = array_push($result, 10,11,12,13);
echo 'Array after pushing 10, 11, 12, 13 in array :';
echo '<pre>';
print_r($result);
echo count($result);
echo '</pre>';

echo '<br>';
$uniq = array_unique($result);
echo 'Array containing only unique entries:';
echo '<pre>';
print_r($uniq );
echo count($uniq);
echo '</pre>';
