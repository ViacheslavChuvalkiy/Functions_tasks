
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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

    .form-res {
        display: inline-block;
        position: relative;
    }

    .form{
        display: block;
        width: 50%;

    }

</style>
<body>

<div class="form-res">

    <div class="form">
        <form method="POST">
            <div class="tabl-name">
                <label>
                    Text1
                </label>
                <textarea
                        rows="10"
                        cols="45"
                        name="words_1"
                        value="<?=$_POST['words_1']?>">
    </textarea>
            </div>
                 <button type="Submit" class="button-item">Отправить</button>
        </form>

    </div>
</div>

<div class="result">Result:
    <?php if (!is_null($words)) : ?>
        <?=$words?>
    <?php endif ?>

</div>


</body>

</html>