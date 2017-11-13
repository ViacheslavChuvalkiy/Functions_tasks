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



function changeWords($str)
{
    //echo '<hr>';
    $str = explode(' ', $str);
    $str = array_slice($str, 2);
    //echo '<hr>';
   // print_r($str);
    array_unshift($str, 'A');
    $str = '. ' . implode($str, ' ');
    //echo '<hr>';
    //echo  'Новая строка   ';
    //print_r($str);
    file_put_contents('newString.txt', $str,   FILE_APPEND);
    return $str;

}

function mapWords($text)
{
    $str = explode('.', $text);
   // print_r($str);
    $newText= array_map('changeWords' , $str);



    $comments = file_get_contents('newString.txt');
    echo '<hr>';
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


