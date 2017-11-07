<?php
echo '
#1 Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
 Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами. ';


include 'functions_forms.php';
echo '<hr>';


$words = requestGet('words');

$formValues = [
    'words_1' => requestPost('words_1'),
    'words_2' => requestPost('words_2'),
    'words_3' => requestPost('words_3')
];

if ($_POST) {
    if (formIsValid()) {
        $words = getCommonWords(requestPost('words_1'), requestPost('words_2'), requestPost('words_3'));
        $words = implode(',', $words);
        $formValues['words_1'] = $formValues['words_2'] = $formValues['words_3'] = null;
    }

}

include 'Home work 17.10.php';

?>


