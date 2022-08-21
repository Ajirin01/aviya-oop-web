<?php
    abstract class SyncData{
        function syncParent($url, $filename){
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $data = curl_exec($curl);//get the data to save

            file_put_contents(dirname(__FILE__,2).'/../data/'.$filename.'.json', $data); //save data
        }
    }
?>