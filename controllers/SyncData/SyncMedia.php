<?php
    require_once(__DIR__.'/SyncData.php');
    class SyncMedia extends SyncData{
        public function sync(){
            parent::syncParent("https://aviya-residence.com/aviya/wp-json/wp/v2/media/", "media");
            return json_encode(['status'=> 'success', 'message'=> 'media data successfully synced']);
        }
    }
?>