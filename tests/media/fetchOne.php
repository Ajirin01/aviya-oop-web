<?php
    require_once(dirname(__FILE__,3).'/models/Media.php');

    $media = new Media();

    $media_json = file_get_contents(dirname(__FILE__,3).'/data/media.json');

    $result = $media->find(json_decode($media_json)[0]->id);

    if(count($result) >= 0){
        echo json_encode(['status'=> 'success', 'message'=> 'Testing fetch one media passed!']).'<br>';
    }
?>