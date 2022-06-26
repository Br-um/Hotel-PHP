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
            "<br>Suíte: ".$this->suite.
            "<br>Diárias: ".$this->days;
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


    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='../public/css/css.css'>
        <title>Resultados Do Agendamento</title>
    </head>
    
    <body>
        <div id='body'>
            <h1>Hotel</h1>
            <form action=''>
                <h3>Resultados: </h3>
                 ".$hotelSchedling->toString($userClass)."
            </form>
        </div>
    </body>
    
    </html>"
?>