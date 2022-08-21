<?php
    require_once(dirname(__FILE__,3).'/controllers/MediaController.php');

    $media = new MediaController();
    $result = $media->all();

    if(count(json_decode($result)) >= 0){
        echo json_encode(['status'=> 'success', 'message'=> 'Testing fetch All media passed!']).'<br>';
    }
?>