<?php
    class User{
        public $id;
        public $username;
        public $password;
        public $fullname;
        public $adress;
        public $phone;
        public function __construct($id, $username,$password, $fullname, $adress,$phone) {
            $this->id = $id; 	
            $this->username = $username; 	
            $this->password = $password; 	
            $this->fullname = $fullname; 		
            $this->adress = $adress; 	
            $this->phone = $phone; 	
        }
    }
?>