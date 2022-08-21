<?php
    require_once(dirname(__FILE__,2).'/controllers/base.php');

    interface DataInterface{
        public function all();
        public function find($id);
    }
?>