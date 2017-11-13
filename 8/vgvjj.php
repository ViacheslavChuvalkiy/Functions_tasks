<?php


$arr= ['first', 'second', 'three', 'four'];

foreach ($arr as $ar)
{
    echo $ar . '<br>';
}
//$arr= unserialize($arr) . '<br>';
//var_dump($arr). '<br>';
//var_dump(unserialize($arr)) . '<br>';
array_splice($arr, 2);
echo '<br>';var_dump($arr);
