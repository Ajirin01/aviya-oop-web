<?php
    require_once(dirname(__FILE__,2).'/Interface/DataInterface.php');
    
    class Property implements DataInterface{
        public $properties;
        
        public function __construct(){
            $this->properties = file_get_contents(__DIR__.'/../data/properties.json');
        }
    
        public function all(){
            return $this->properties;
        }

        public function find($id){
            $this->id = $id;
            $properties_array = json_decode($this->properties, true);

            $property_obj = array_filter($properties_array, function($property) {
                return $property['id'] == $this->id;
            });

            return array_values($property_obj);
        }
    }

    
?>