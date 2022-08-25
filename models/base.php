<?php
    // header("Content-Type: application/json");
    $properties = file_get_contents(__DIR__.'/../data/properties.json', true);
    $media = file_get_contents(__DIR__.'/../data/media.json');
    $youtube = file_get_contents(__DIR__.'/../data/youtube.json');
?>