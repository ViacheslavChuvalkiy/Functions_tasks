<?php

function dirTree($dir) {
    $files1 = scandir($dir);
    print_r($files1);
    };