<?php
    require_once "Bedroom.php";
    class wardrobe extends bedroom{
        public $type;
        function getType(){
            return $this->type;
        }
    }
?>