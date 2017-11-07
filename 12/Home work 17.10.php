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
    <textarea placeholder='А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.'
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