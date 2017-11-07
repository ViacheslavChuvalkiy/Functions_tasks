<?php
echo '#3 Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. 
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.';


echo '<hr>';

include 'functions_forms.php';

$words = requestGet('words');

echo '<br>';

        $h = fopen('test.txt', 'r');
        $text = file_get_contents('test.txt');
        sortStr($text);
        echo '<hr>';


$formValues = ['Integer' => requestPost('Integer')];

if ($_POST) {
    if (formIsValid()) {
        $formValues['Integer'] = null;

        $words=delWords($text);
    }};


include 'Home work 17.10.php';

?>