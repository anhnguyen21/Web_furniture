<?php
    abstract class person{
        protected $fullname;
        protected $adress;
        protected $phone;
        public function __construct($id, $username,$password) {
            $this->id = $id; 	
            $this->username = $username; 	
            $this->password = $password; 	
        }
    }
?>