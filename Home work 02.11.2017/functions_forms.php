<?php

function requestGet($key, $default=null)
{
    return getValue($_GET, $key, $default);
}

function requestPost($key,$default = null)
{
    return getValue($_POST, $key,$default);
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function getValue(array $array,$key, $default = null){
    if (isset($array[$key])){
        return $array[$key];
    }
    return $default;
};

function formIsValid()
{
    return !empty($_POST['message']);
};



