<?php
echo '#7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 Все добавленные комментарии выводятся над текстовым полем.';
echo '<hr>';

include "functions_forms.php";


$message = requestGet('message');

if ($_POST){
    if(formIsValid()){

        $comment= createComment($_POST);
        $result= save($comment);
        $message = $result === false ? 'Error saving': 'Saved';
        redirect('http://localhost:63342/Lern%20PHP/functions_forms_tasks/7/7.php?_ijt=msr1c2g0934cbol059f2d7gbqu');
    }


}
$comments= loadComments();

include "Home work 17.10.php";
?>