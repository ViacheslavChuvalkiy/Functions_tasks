<?php
define('COMMENTS_STORAGE','comments.txt');



function deleteComment($id){
     $comments= loadComments();
     foreach ($comments as  &$comment){
        if($comment['id']== $id){
            echo 'coment= ' . '<br>';
            var_dump($comment);
            echo '<br>' . ' comments =  ' . '<br>';
            var_dump($comments);
            echo '<br>';

      unset ($comment['id'],$comment['name'],$comment['email'],$comment['message'],$comment['created']);
            echo'<br>' . 'coment= ' . '<br>';
            var_dump($comment);
              echo '<hr>';
            var_dump($comments);
           $comments = serialize($comments);


                       echo '<hr>';
       // $comments = array_diff_key( $comments, array(''));
       return file_put_contents(
       COMMENTS_STORAGE,
      $comments);
        }
}};


function editComment($editMode){
    $comments= loadComments();
    foreach ($comments as  &$comment){
        if($comment['id']== $editMode){
            echo 'coment= ' . '<br>';
            var_dump($comment);
            echo '<br>' . ' comments =  ' . '<br>';
            var_dump($comments);
            echo '<br>';

         $comments= array_replace( $comment['message'],$comments['message']);
            echo'<br>' . 'coment= ' . '<br>';
            var_dump($comment);
            echo '<hr>';
            var_dump($comments);
            $comments = serialize($comments);


            echo '<hr>';
            // $comments = array_diff_key( $comments, array(''));
         //   return file_put_contents(
           //     COMMENTS_STORAGE,
             //   $comments);
        }
    }};

function save(array $comment)
{
    $comments= loadComments();
    $comments[]= $comment;
    $comments = serialize($comments);

    return file_put_contents(
        COMMENTS_STORAGE,
        $comments);
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
    if($comments === false){
       // return [];
          die('System error');
    }
    return $comments;
};


function removeSwearing(&$comment){
    $comment['message'] = str_replace('fuck', 'f**k', $comment['message']);
    $comment['message'] = str_replace('sheet', 's**t', $comment['message']);
    $comment['message'] = str_replace('сука', '***', $comment['message']);
    $comment['message'] = str_replace('блядь', '***', $comment['message']);
    $comment['message'] = str_replace('урод', '***', $comment['message']);
    $comment['message'] = str_replace('дебил', '***', $comment['message']);
};

function countVisit()
{
    $count = cookieGet('visits_count');
    $count++;
    cookieSet('visits_count', $count);

    return $count;
}
function cookieSet($name, $value, $expire = 3600, $path = '/')
{
    setcookie($name, $value, time() + $expire, $path);
}
function cookieRemove($name)
{
    cookieSet($name, '', -1);
    unset($_COOKIE[$name]);
}
function cookieGet($name)
{
    return getValue($_COOKIE, $name);
}


function setFlash($message){
    $_SESSION['flash_message'] = $message;

};

function getFlash(){
    if(isset($_SESSION['flash_message'])){
        $message=$_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $message;
    }
return null;
}

function requestGet($key)
{
    return getValue($_GET, $key);
}

function requestPost($key)
{
    return getValue($_POST, $key);
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


function formIsValid()
{
    return !empty($_POST['name'])&&
           !empty($_POST['email'])&&
           !empty($_POST['message'])
    ;
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


