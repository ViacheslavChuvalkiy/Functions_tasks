<?php
$s = 'привет рили . оллото вмв. вамв. авммвв';


echo ($s) . '<br>';

$str=explode('.', $s);
array_walk($str, 'mb_ucwords');

function mb_ucwords($str) {
     $str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
     print_r( $str) . '<br>';

}
?>