<?php
    header("Content-Type: application/json");
    require_once(dirname(__FILE__).'/controllers/SyncData/SyncMedia.php');

    header("Content-Type: application/json");
    require_once(dirname(__FILE__).'/controllers/SyncData/SyncProperty.php');

    header("Content-Type: application/json");
    require_once(dirname(__FILE__).'/controllers/SyncData/SyncYoutube.php');

    

    $syncProperties = new SyncProperty();
    $syncMedia = new SyncMedia();
    $syncYoutube = new SyncYoutube();

    $syncProperties->sync();
    $syncMedia->sync();
    $syncYoutube->sync();

    header('location: /');
    
?>