<?php
    require_once(__DIR__.'/SyncData.php');
    class SyncProperty extends SyncData{
        public function sync(){
            parent::syncParent("https://aviya-residence.com/aviya/wp-json/wp/v2/properties/", "properties");
            return json_encode(['status'=> 'success', 'message'=> 'properties data successfully synced']);
        }
    }
?>