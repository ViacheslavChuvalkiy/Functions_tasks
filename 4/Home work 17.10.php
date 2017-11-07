


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

</style>
<body>




<form method="POST">
    <div class="tabl-name">
        <label>
            Имя
        </label>
        <input
            name="First Name"
            value="<?=$_POST['First_Name']?>"
            type="text"
            placeholder="Введите ваше Имя "
            maxlength="20">
    </div>
    <div class="tabl-name">
        <label>
            Фамилия
        </label>
        <input
            name="Last Name"
            value="<?=$_POST['Last_Name']?>"
            type="text"
            placeholder="Введите вашу Фамилию"
            maxlength="20">
    </div>

    <div class="tabl-name">
        <label>
           Email
        </label>
        <input
            name="email"
            value="<?=$_POST['email']?>"
            type="email"
            placeholder="Введите ваш email "
            maxlength="20">
    </div>

    <button type="Submit" class="button-item">Отправить</button>




</body>
</html>