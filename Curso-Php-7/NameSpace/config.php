<?php

spl_autoload_register(function ($nameClasse) {
    $dirClasse = "class";
    $filename = $dirClasse . DIRECTORY_SEPARATOR . $nameClasse . ".php";
    if (file_exists($filename)){
        require ($filename);
        
    }
});