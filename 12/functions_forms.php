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


function changeString() {
    $s= requestPost('message');
    $comments = explode('.', $s);
    $comments = array_reverse($comments);
    $comments = implode('.', $comments);

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


