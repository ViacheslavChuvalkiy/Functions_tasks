<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

You visited this page: <?=$counter?> time(s).

<h1>Register</h1>

<b>  <?=getFlash()?>  </b>

      <form method='post'>
            <input type="text" name="name"  placeholder='Name' value='<?=requestPost('name') ?>' ><br>
            <input type="email" name="email"  placeholder='Email' value='<?=requestPost('email') ?>' ><br>
            <textarea placeholder='Message...' name="message"><?=requestPost('message') ?></textarea>
            <input type="text" name="user_security_number" placeholder='Enter number'/>
            <input type="hidden" name="security_number" value="<?=$securityNumber?>"/>
            <input type="submit" value="Submit"/>
        </form>

<img src="http://localhost:63342/Lern%20PHP/functions_forms_tasks/8/captcha.php?number<?=$securityNumber?>"></img>

<hr>

<h2>Comments</h2>
<?php foreach ($comments as $comment) : ?>
    <div class='comment' id='comment_<?=$comment['id']?>'>
        <h3><?=$comment['name']?></h3>
        <a href="?action=delete&amp;id=<?=$comment['id']?>">Delete</a> |
        <a href="?action=edit&amp;id=<?=$comment['id']?>#comment_<?=$comment['id']?>">Edit</a>
        <br>
        <?php if ($editMode == $comment['id']) : ?>
            <form method='post'>
                <textarea name="message"><?=$comment['message']?></textarea>
                <input type="submit" value="Submit"/>
            </form>
        <?php else : ?>
            <?=$comment['message']?>
        <?php endif ?>
        <i><?=$comment['created'] ?></i>
        <br>
    </div>



<?php endforeach ?>
</body>
</html>