<?php
define('COMMENTS_STORAGE','comments.txt');

function requestGet($key)
{
    return getValue($_GET, $key);
}

function requestPost($key)
{
    return getValue($_POST, $key);
}
function my_ucfirst($string, $e ='utf-8') {
    if (function_exists('mb_strtoupper') && function_exists('mb_substr') && !empty($string)) {
        $string = mb_strtolower($string, $e);
        $upper = mb_strtoupper($string, $e);
        preg_match('#(.)#us', $upper, $matches);
        $string = $matches[1] . mb_substr($string, 1, mb_strlen($string, $e), $e);
    } else {
        $string = ucfirst($string);
    }
    return $string;
}


function changeWords() {
    $text=requestPost('message');
    $text= my_ucfirst($text);
    $comments = ucwords($text);
    return $comments;
    }


function redirect($to)
{
    header("Location: {$to}");
    die;
}

function getValue(array $array,$key){
    if (isset($array[$key])){
        return $array[$key];
    }
    return null;
};


function save(array $comment)
{
    $comments= loadComments();
    $comments[]= $comment;
    $str = serialize($comments);

    return file_put_contents(
        COMMENTS_STORAGE,
        $str);
};


function loadComments(){
    $contents= @file_get_contents(COMMENTS_STORAGE);
    if($contents===false){
        return[];
    }

    if(empty($contents)){
        return [];
    }

    $comments = @unserialize($contents);
    if($comments=== false){
        die('System error');
    }
    return $comments;
};

function formIsValid()
{
    return !empty($_POST['message']);
};



function createComment( array $data){

    return [
        'id' => rand(1000, 9999),
        'name' => getValue($data, 'name'),
        'email' => getValue($data, 'email'),
        'message' => getValue($data, 'message'),
        'created' => date("Y-m-d H:i:s")
    ];
}


