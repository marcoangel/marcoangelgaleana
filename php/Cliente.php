<?php
    class Client{
        private $id;
        private $name;
        private $phone;
        private $mail;
        private $message;

        function __construct($id){
            
        }

        function __construct($id, $name, $phone, $mail, $message){

        }

        public function getId(){
            return $id;
        }

        public function getName(){
            return $name;
        }

        public function getPhone(){
            return $phone;
        }

        public function getMail(){
            return $mail;
        }

        public function getMessage(){
            return $message;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function setName($name){
            $this->name=$name;
        }

        public function setPhone()){
            $this->phone=$phone;
        }

        public function setMail($mail){
            $this->mail=$mail1;
        }

        public function setMessage($message){
            $this->message=$message;
        }
    }
?>