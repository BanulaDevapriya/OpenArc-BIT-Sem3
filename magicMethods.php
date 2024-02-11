<?php
//Magic methods

class Person{
    public $name="Saman";

    public function _toString(){
        return "Name : {$this->name}";
    }
}

$obj =new Person();
echo $obj;
?>