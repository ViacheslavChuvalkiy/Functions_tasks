<?php


function formIsValid()
{
    return !empty($_POST['words_1']);
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

function getWords ($string) {
    $words = explode(' ', $string);

    return array_filter($words);
};


function sortArrayByStringLength(array &$array)
{
    usort($array, function($a, $b) {
        return strlen($b) - strlen($a);
    });
}
const DEFAULT_TOP_WORDS_AMOUNT = 3;
function getTopWords($wordsString, $amount = DEFAULT_TOP_WORDS_AMOUNT)
{
    $words = getWords($wordsString);
    $wordsCount = count($words);

    if ($wordsCount < $amount) {
        return false;
    }

    if ($wordsCount == $amount) {
        return $words;
    }

    sortArrayByStringLength($words);

    return array_slice($words, 0, $amount);
}