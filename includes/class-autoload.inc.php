<?php

spl_autoload_register("autoload");

    function autoload(string $className) {
        $path = 'classes/';
        $ext = '.class.php';
        $fileName = $path . $className . $ext;

        if (!file_exists($fileName)) {
            return false;
        }
        include_once $fileName;
    }