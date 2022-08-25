<?php
    require_once(dirname(__FILE__,2).'/models/Property.php');

    class SearchController{
        private $title;
        private $price;
        private $size;

        function __construct(){
            $properties = file_get_contents((dirname(__FILE__,2).'/data/properties.json'));
            $this->properties_json = $properties;
        }

        public function search($title, $price, $size){
            $this->title = $title;
            $this->price = $price;
            $this->size  = $size;

            $properties_array = json_decode($this->properties_json, true);

            $property_obj = array_filter($properties_array, function($property) {
                // check if minimum filter price is grater or equals properity price
                $property_price_greater_OR_equals_filter__min_price = $property['acf']['price'] >= explode(",",$this->price)[0]*1000000;

                // check if maximum filter price is less or equals properity price
                $property_price_less_OR_equals_filter__max_price = $property['acf']['price'] <= explode(",",$this->price)[1]*1000000;

                // (property price Greater OR Equals to filter minimum price) And (property price Less OR Equals to filter maximum price)
                $price_greater_OR_equals_min_AND_less_or_equals_max =  $property_price_greater_OR_equals_filter__min_price && $property_price_less_OR_equals_filter__max_price;
                

                // check if minimum filter size is grater or equals properity size
                $property_size_greater_OR_equals_filter__min_size = explode(" ",$property['acf']['size'])[0] >= explode(",",$this->size)[0];

                // check if maximum filter size is less or equals properity size
                $property_size_less_OR_equals_filter__max_size = explode(" ",$property['acf']['size'])[0] <= explode(",",$this->size)[1];

                $size_greater_OR_equals_min_AND_less_or_equals_max =  $property_size_greater_OR_equals_filter__min_size && $property_size_less_OR_equals_filter__max_size;

                return (strpos($property['acf']['title'], $this->title) !== false) && ($price_greater_OR_equals_min_AND_less_or_equals_max) && ($size_greater_OR_equals_min_AND_less_or_equals_max) ;
            });

            return array_values($property_obj);

        }
    }
?>