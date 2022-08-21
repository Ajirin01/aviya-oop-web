<?php
    header("Content-Type: application/json");
    require_once(dirname(__FILE__,3).'/controllers/SyncData/SyncMedia.php');

    $syncMedia = new SyncMedia();

    echo $syncMedia->sync().'<br>';
    
    
?>