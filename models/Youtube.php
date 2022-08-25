<?php
    require_once(dirname(__FILE__,2).'/Interface/DataInterface.php');
    
    class Youtube implements DataInterface{
        public $youtube;
        
        public function __construct(){
            $this->youtube = file_get_contents(__DIR__.'/../data/youtube.json');
        }
    
        public function all(){
            return $this->youtube;
        }

        public function find($id){
            $this->id = $id;
            $youtube_array = json_decode($this->youtube, true);

            $youtube_obj = array_filter($youtube_array, function($youtube) {
                return $youtube['id'] == $this->id;
            });

            return array_values($youtube_obj);
        }
    }

    
?>