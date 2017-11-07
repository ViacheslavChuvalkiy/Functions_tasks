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
    <textarea placeholder='яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня'
              rows="10" cols="70"
              name="message"><?=requestPost('message') ?></textarea>
    <input type="submit" value="Submit"/>
</form>

<hr>

<h2>Answer-1</h2>
Default string:
<b><i><?=print_r2($comments)?></i></b><br>
<h2>Answer-2</h2>
Your string:
<b><i><?=print_r2($comments2)?></i></b><br>


</body>
</html>


