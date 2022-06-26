<?php
include("user-class.php");
    class HotelSchedling{
        private $suite;
        private $days;
        /**
         * Get the value of suite
         */ 
        public function getSuite()
        {
                return $this->suite;
        }

        /**
         * Set the value of suite
         *
         * @return  self
         */ 
        public function setSuite($suite)
        {
                $this->suite = $suite;

                return $this;
        }

        /**
         * Get the value of days
         */ 
        public function getDays()
        {
                return $this->days;
        }

        /**
         * Set the value of days
         *
         * @return  self
         */ 
        public function setDays($days)
        {
                $this->days = $days;

                return $this;
        }

        public function toString($userClass){
            return "Nome: ".$userClass->getName().
            "<br>Email: ".$userClass->getEmail().
            "<br>RG: ".$userClass->getRg().
            "<br>Telefone: ".$userClass->getPhone().
            "<br>Suíte: ".getSuite().
            "<br>Diárias: ".getDays().
            "";
        }
    }
    $userClass = new UserGetSet;
    $hotelSchedling = new HotelSchedling;

    $userClass->setName($_POST['name']);
    $userClass->setEmail($_POST['email']);
    $userClass->setRg($_POST['rg']);
    $userClass->setPhone($_POST['phone']);
    $hotelSchedling->setSuite($_POST['suite']);
    $hotelSchedling->setDays($_POST['days']);
    $hotelSchedling->toString($userClass);
?>