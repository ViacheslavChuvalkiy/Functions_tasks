<?php
$s = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';


echo ($s) . '<br>';

$str=explode('.', $s);

$str=array_shift($str);
$str=explode(' ', $str);
array_shift($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
print_r($str);

echo '<hr>';

$str=explode('.', $s);
print_r($str);
$str= array_slice($str, 1);
$str=array_shift($str);
echo '<hr>';
print_r($str);
$str=explode(' ', $str);
$str= array_slice($str, 2);
echo '<hr>';
print_r($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
echo '<hr>';
print_r($str);


$str=explode('.', $s);
print_r($str);
$str= array_slice($str, 2);
$str=array_shift($str);
echo '<hr>';
print_r($str);
$str=explode(' ', $str);
$str= array_slice($str, 2);
echo '<hr>';
print_r($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
echo '<hr>';
print_r($str);

$str=explode('.', $s);
print_r($str);
$str= array_slice($str, 3);
$str=array_shift($str);
echo '<hr>';
print_r($str);
$str=explode(' ', $str);
echo '<hr>';
print_r($str);
$str= array_slice($str, 2);
echo '<hr>';
print_r($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
echo '<hr>';
print_r($str);


$str=explode('.', $s);
print_r($str);
$str= array_slice($str, 4);
$str=array_shift($str);
echo '<hr>';
print_r($str);
$str=explode(' ', $str);
echo '<hr>';
print_r($str);
$str= array_slice($str, 2);
echo '<hr>';
print_r($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
echo '<hr>';
print_r($str);



$str=explode('.', $s);
print_r($str);
$str= array_slice($str, 5);
$str=array_shift($str);
echo '<hr>';
print_r($str);
$str=explode(' ', $str);
echo '<hr>';
print_r($str);
$str= array_slice($str, 1);
echo '<hr>';
print_r($str);
array_unshift($str, 'A');
$str= implode($str, ' ');
echo '<hr>';
print_r($str);

