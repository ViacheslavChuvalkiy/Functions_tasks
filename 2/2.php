<?php
echo '
#2 Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p> ';




echo '<hr>';

include 'functions_forms.php';

$words = requestGet('words');

$formValues = [
    'words_1' => requestPost('words_1'),

];

if ($_POST) {
    if (formIsValid()) {
        $words = getTopWords(requestPost('words_1'));
        $words = implode(',', $words);
        $formValues['words_1'] = null;
    }

}

include 'Home work 17.10.php';

?>
