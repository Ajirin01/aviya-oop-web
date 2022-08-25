<?php
    require_once(dirname(__FILE__,3).'/models/Youtube.php');

    $youtube = new Youtube();
    
    $youtube_json = file_get_contents(dirname(__FILE__,3).'/data/youtube.json');

    $result = $youtube->find(json_decode($youtube_json)[0]->id);

    if(count($result) >= 0){
        echo json_encode(['status'=> 'success', 'message'=> 'Testing fetch One youtube passed!']).'<br>';
    }
?>