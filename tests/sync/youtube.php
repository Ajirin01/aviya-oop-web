<?php
    header("Content-Type: application/json");
    require_once(dirname(__FILE__,3).'/controllers/SyncData/SyncYoutube.php');

    $syncYoutube = new SyncYoutube();

    echo $syncYoutube->sync().'<br>';
    
    
?>