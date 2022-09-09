<?php

    spl_autoload_register('ClassLoader');
    function ClassLoader($className){
        $path = "classes/";
        $ext = ".php";
        $fullpath = $path . $className . $ext;
        include_once $fullpath;
    }


    

?>