<?php
    require_once(__DIR__.'/SyncData.php');
    class SyncYoutube extends SyncData{
        public function sync(){
            parent::syncParent("https://aviya-residence.com/aviya/wp-json/wp/v2/videos/", "youtube");
            return json_encode(['status'=> 'success', 'message'=> 'youtube data successfully synced']);
        }
    }
?>