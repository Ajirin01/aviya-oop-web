<?php
    require_once(dirname(__FILE__,3).'/models/Property.php');

    $property = new Property();
    $result = $property->all();

    if(count(json_decode($result)) >= 0){
        echo json_encode(['status'=> 'success', 'message'=> 'Testing fetch All Properties passed!']) .'<br>';
    }
?>