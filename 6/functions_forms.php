<?php

function lookImg($dir){
    $dir = 'C:\Users\slv19\PhpstormProjects\Lern PHPunctions_forms_tasks\Galery';
     foreach ($_FILES["pictures"]["error"] as $key => $error) {
                      if ($error == UPLOAD_ERR_OK) {
             $tmp_name = $_FILES["pictures"]["C:\Users\slv19\PhpstormProjects\Lern PHP\functions_forms_tasks\Galery"][$key];
             // basename() может спасти от атак на файловую систему;
             // может понадобиться дополнительная проверка/очистка имени файла
             $name = basename($_FILES["pictures"]["name"][$key]);
             move_uploaded_file($tmp_name, "C:\Users\slv19\PhpstormProjects\Lern PHP\functions_forms_tasks\6\Galery");
         }

     }

    print_r($_FILES);
}

