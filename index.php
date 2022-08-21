<?php
    require_once('controllers/PropertyController.php');
    require_once('controllers/MediaController.php');
    $properties = new PropertyController();
    $content = file_get_contents(__DIR__.'/src/templates/home.php');
    require_once(__DIR__.'/src/templates/layouts/site_layout.php');
?>