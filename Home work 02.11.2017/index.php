<?php

require 'functions_forms.php';

//$page= !empty($_GET['page']) ? $_GET['page'] : 'default';
$page= requestGet('page', 'default');

$file= 'C:\Users\slv19\PhpstormProjects\Lern PHP\functions_forms_tasks\Home work 02.11.2017\Controler\{$page}.php';

if(!file_exists($file)){
    var_dump($file);
    die('404');
}


require '$file';

ob_start();
require 'views/{$page}.phtml';
$content =ob_get_clean();

require 'layout.phtml';
