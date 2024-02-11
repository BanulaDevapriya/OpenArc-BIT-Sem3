<?php
class Person1{
    public $name="Saman";
    public $phone="0714852369";

    public function __get($proName){
        if($proName==='username'){
            return this->name;
        }
        return "Property name $proName does not exit";
    }
    public function __set($proName,$value){
        if($proName==='username'){
            $this->name=$value;
        }
    }
}

$objnew = new Person1();
echo $objnew->username;
$objnew->username="Kamal";
echo $objnew->username;
?>