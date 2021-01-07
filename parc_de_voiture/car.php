<?php

class Car {

    public $status;

    public function __construct($id, $date, $km, $brand, $model, $color, $weight){

        function get_status($brand) {
            if($brand === "Audi") {
                $status === "reserved";
            } else {
                $status === "free";
            }
            return $status;
        }
        function get_type($weight) {
            if($weight > 3500) {
                $type = "utility";
            } else {
                $type = "normal";
            }
            return $type;
        }
        function get_origin($id) {
            if((strtolower($id[0]) === 'b') && (strtolower($id[1]) === 'e')) {
                $origin = "Belgium";
            } else if((strtolower($id[0]) === 'd') && (strtolower($id[1]) === 'e')) {
                $origin = "Germany";
            } else if((strtolower($id[0]) === 'f') && (strtolower($id[1]) === 'r')) {
                $origin = "France";
            }
            return $origin;
        }
        function get_mileage($km) {
            if($km < 100000){
                $mileage = "low";
            } else if($km < 200000){
                $mileage = "middle";
            } else {
                $mileage = "high";
            }
            return $mileage;
        }
        function get_age($date) {
            // $age = current date - $date;
            // return $age;
        }
    }
    public function rouler(){
        $km += 100000;
        get_mileage($km);
    }
}

?>