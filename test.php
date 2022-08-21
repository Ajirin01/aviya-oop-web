<?php
    require_once('controllers/PropertyController.php');

    $property = new PropertyController();
    
    $properties_json = file_get_contents('data/properties.json');

    // $properties->find(json_decode($properties)[0]->id);
    $id = (int)(json_decode($properties_json)[0]->id);
    $property->find($id);
?>