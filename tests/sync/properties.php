<?php
    header("Content-Type: application/json");
    require_once(dirname(__FILE__,3).'/controllers/SyncData/SyncProperty.php');

    $syncProperties = new SyncProperty();

    echo $syncProperties->sync().'<br>';
    
?>