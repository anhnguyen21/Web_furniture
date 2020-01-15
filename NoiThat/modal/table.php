<?php
    require_once "Product.php";
    class tables extends product{
        public function __construct($id, $name, $price, $type, $detai, $image, $typePro, $quantity,$dateInput)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->type = $type;
            $this->detai = $detai;
            $this->image = $image;
            $this->typePro = $typePro;
            $this->quantity = $quantity;
            $this->dateInput = $dateInput;
        }
    }
?>