<?php
echo '#8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
Все добавленные комментарии выводятся над текстовым полем. 
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий".
Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>' ;
echo '<hr>';

include "functions_forms.php";

session_start();

$counter= countVisit();
$securityNumber = rand(1000, 9999);
$editMode = null;

if (requestGet('action')== 'delete' && $id= requestGet('id')){
        // die('delete' . requestGet('id'));
        $comments = deleteComment($id);
        $message = $comments=== false ? 'Error Deleting' : 'Deleted';
    //if(empty($comments))
      //  return redirect('http://localhost:63342/Lern%20PHP/functions_forms_tasks/8/8.php?');
     //   redirect('http://localhost:63342/Lern%20PHP/functions_forms_tasks/8/8.php?');

}

if (requestGet('action') == 'edit' && requestGet('id')) {
    $editMode = requestGet(id);
    if($_POST) {
        die ('$_POST');
        //$editMode = requestGet('id');

        //$comments = editComment($editMode);
    }
    }

    // die('edit ' .  requestGet('id'));
    // $result = deleteComment($id);
    // $message = $result === false ? 'Error deleting' : 'Deleted';

    // redirect('/form?message=' . $message);


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