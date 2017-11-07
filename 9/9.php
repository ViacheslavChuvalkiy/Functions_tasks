#Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>
<?php


include "functions_forms.php";

$comments = requestGet('message');

if ($_POST) {
    if (formIsValid()) {
        $comments = turnUp();
          }

}
include "Home work 17.10.php";
?>