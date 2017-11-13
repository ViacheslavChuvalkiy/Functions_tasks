<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h1>Enter text</h1>

<form method='post'>
    <textarea placeholder=' а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти'
              rows="10" cols="70"
              name="message"><?=requestPost('message') ?></textarea>
    <input type="submit" value="Submit"/>
</form>

<hr>

<h2>Answer</h2>
New string:
<b><i><?=$comments?></i></b><br>

</body>
</html>