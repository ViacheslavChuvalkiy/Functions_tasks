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
function print_r2($comments2){
    echo '<pre>';
    var_export($comments2);
    echo  '</pre>';
}

function countString() {
    $s= requestPost('message');
    $comments2= explode(' ', $s);
    $comments2= array_count_values($comments2);
    uasort($comments2, 'cmp');

    return $comments2;    }

function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1;
}
function countStringDefalt() {
    $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
    $comments= explode(' ', $string);
    $comments = array_count_values($comments);
    uasort($comments, 'cmp');
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
        'message-2' => getValue($data, 'message-2'),
        'message' => getValue($data, 'message'),
        'created' => date("Y-m-d H:i:s")
    ];
}


