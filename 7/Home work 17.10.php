<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h1>Register</h1>

<b>  <?=$message  ?>  </b>
      <form method='post'>
            <input type="text" name="name"  placeholder='Name' value='<?=requestPost('name') ?>' ><br>
            <input type="email" name="email"  placeholder='Email' value='<?=requestPost('email') ?>' ><br>
            <textarea placeholder='Message...' name="message"><?=requestPost('message') ?></textarea>

           <input type="submit" value="Submit"/>
        </form>



<hr>

<h2>Comments</h2>
<?php foreach ($comments as $comment) : ?>
    <h3> <?=$comment['name']?> </h3>
    <i><?=$comment['message']?></i><br>
    <?=$comment['created']?><br>
<?php endforeach ?>
</body>
</html>