<?php

    class Animal{
        public $naam;

        public function __construct(){
            echo "Het dier is geboren";
            echo "<br>";
        }

        public function Info(){
            return $this->naam;
        }

        public function Eat(){
            echo "Het " . $this->naam ." eet";
        }

        public function Sleep(){
            echo "Het " . $this->naam . " slaapt";
        }

    }

    class Birds extends Animal{

        public function Vlieg(){
            echo "Het " . $this->naam . " vliegt";
        }

    }

    $animal1 = new Birds();
    $animal1->naam = "Eend";

    echo $animal1->Eat() . "<br>";
    echo $animal1->Vlieg() . "<br>";

?>