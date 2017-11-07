<?php


function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}


function formIsValid()
{
    return !empty($_POST['Integer']);
};


function sortStr($text) {

    $text = str_replace(',' , '' , $text);
    $text = str_replace('.' , '' , $text);
    $text = str_replace('!' , '' , $text);
    $text = str_replace('?' , '' , $text);
    $text = str_replace(':' , '' , $text);
    $text = str_replace('""'  , '' , $text);
    echo ($text);
};



function delWords($text){
     $words = explode(' ', $text);
     $words = preg_replace('/\s/', '', $words);
     $words = preg_replace('""', '', $words);

    foreach ($words as $item => $b) {
        $c = strlen($b);
       // echo ($b) . ' =  ' . ($c)  . '<br>';
        if ($c < $_POST['Integer']) {
            unset($words[$item]);
        }

    };
    $words = implode(',', $words);
     return $words;
   //var_dump($words);
    };




