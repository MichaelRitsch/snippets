<?php

// Autoload Classes
$cv_agenturplugin_classes_directory = 'classes';
$cv_agenturplugin_classes = array_diff(scandir(__DIR__ . '/' . $cv_agenturplugin_classes_directory), array('..', '.'));
foreach ($cv_agenturplugin_classes as $class_filename){
    require_once("$cv_agenturplugin_classes_directory/$class_filename");
}
