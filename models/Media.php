<?php
    require_once(dirname(__FILE__,2).'/Interface/DataInterface.php');
    
    class Media implements DataInterface{
        public $media;
        
        public function __construct(){
            $this->media = file_get_contents(__DIR__.'/../data/media.json');
        }
    
        public function all(){
            return $this->media;
        }

        public function find($id){
            $this->id = $id;
            $media_array = json_decode($this->media, true);
            
            $media_obj = array_filter($media_array, function($media) {
                return $media['id'] == $this->id;
            });

            return array_values($media_obj);
        }
    }

    
?>