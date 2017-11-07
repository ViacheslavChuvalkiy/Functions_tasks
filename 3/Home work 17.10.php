


<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style >
    .tabl-name {
        display: flex;
        text-align: left;
        width: 800px;
        height: auto;
        padding-top: 10px;
        font-weight: bold;
        font-size: 17px;
    }
    .button-item {
        margin-left: 100px;
        margin-top: 10px;
        font-weight: bold;
        border: 1px solid black;
    }
    .result {
        width: 700px;
    }

</style>
<body>




<form method="POST">
    <div class="tabl-name">
        <label>
            Число
        </label>
        <input
            name="Integer"
            value= "<?=$formValues['Integer']?>"
            type="number"
            placeholder="Введите кол-во букв ">
    </div>

    <button type="Submit" class="button-item">Отправить</button>
</form>

    <div class="result">Result: Слова в которых букв больше, чем : <?=$_POST['Integer']?>
            <?php if (!is_null($words)) : ?>
            <?=$words?>
        <?php endif ?>

</body>
</html>