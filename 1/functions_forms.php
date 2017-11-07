<?php

function getWords ($string) {
    $words = explode(' ', $string);

    return array_filter($words);
};

function getCommonWords($a, $b, $c)
{
    $wordsA = getWords($a);
    $wordsB = getWords($b);
    $wordsC = getWords($c);

    return array_intersect($wordsA, $wordsB, $wordsC);
};



function formIsValid()
{
    return !empty($_POST['words_1']) &&
        !empty($_POST['words_2'])&&
        !empty($_POST['words_2']);
};


function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}


function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}