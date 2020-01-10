<?php
    require "Iproduct.php";
    abstract class bedroom implements iproduct{
        public $id;
        public $name;
        public $price;
        // public $type;
        public $detail;
        public $image;
        public $typePro;
        abstract function getType();
    }
?>