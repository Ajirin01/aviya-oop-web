<?php
    require_once(dirname(__FILE__,3).'/controllers/PropertyController.php');

    $property = new PropertyController();
    
    $properties_json = file_get_contents(dirname(__FILE__,3).'/data/properties.json');

    $result = $property->find(json_decode($properties_json)[0]->id);

    if(count(json_decode($result)) >= 0){
        echo json_encode(['status'=> 'success', 'message'=> 'Testing fetch One property passed!']).'<br>';
    }
?>