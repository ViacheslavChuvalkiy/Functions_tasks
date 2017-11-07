<?php
echo '#8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий".
Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>' . ' смог реализовать удаление и редактирование коментов, и не грузится каптча(((';
echo '<hr>';

include "functions_forms.php";

session_start();

$counter= countVisit();
$securityNumber = rand(1000, 9999);
$editMode = null;

if (requestGet('action')== 'delete' && requestGet('id')){
    if($_POST) {
        die('delete' . requestGet('id'));
        $result = deleteComment(requestGet('id'));
        $message = $result === false ? 'Error Deleting' : 'Deleted';
        //redirect('http://localhost:63342/Lern%20PHP/functions_forms_tasks/8/8.php?_ijt=msr1c2g0934cbol059f2d7gbqu');
    }
}

if (requestGet('action') == 'edit' && requestGet('id')) {
    $editMode = requestGet('id');

    if ($_POST) {
        die('saving message');
    }

    // die('edit ' .  requestGet('id'));
    // $result = deleteComment($id);
    // $message = $result === false ? 'Error deleting' : 'Deleted';

    // redirect('/form?message=' . $message);
}

if ($_POST){
    if(formIsValid()){

        $comment= createComment($_POST);
        removeSwearing($comment);
        $result= save($comment);
        $message = $result === false ? 'Error saving': 'Saved';
        setFlash($message);
        redirect('http://localhost:63342/Lern%20PHP/functions_forms_tasks/8/8.php?_ijt=msr1c2g0934cbol059f2d7gbqu');
    }
    $message= ' Form is not valid';
    setFlash($message);

}
$comments= loadComments();

include "Home work 17.10.php";
?>