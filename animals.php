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

    $animal1 = new Animal();
    $animal1->naam = "Hond";

    echo $animal1->Info() . "<br>";
    echo $animal1->Eat() . "<br>";
    echo $animal1->Sleep() . "<br>";

?>