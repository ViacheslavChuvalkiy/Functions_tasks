<p> 10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>

<?php


include "functions_forms.php";

$comments = requestGet('message');



if ($_POST) {
    if (formIsValid()) {
        $comments=countWords();
       }};
include "Home work 17.10.php";
?>