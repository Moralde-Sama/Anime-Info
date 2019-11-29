<?php
    spl_autoload_register(function($classname) {
        $classname = $classname . 'php';
        if (class_exists($classname)) {
            include_once $classname;
        } else if (class_exists("model/$classname")) {
            include_once "model/$classname";
        } else if (class_exists("model/interfaces/$classname")) {
            include_once "model/interfaces/$classname";
        }
    });