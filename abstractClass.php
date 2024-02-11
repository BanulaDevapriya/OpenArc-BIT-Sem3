<?php
abstract class Shape{
    public $color;
    abstract public function getArea();

    public function _construct($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }

}

class Circle extends Shape{
    public $radius;
    public function _construct($color,$radius){
        parent::_construct($color);
        $this->radius=$radius;
    }
    public function getArea(){
        return $this->radius*$this->radius*3.14;
    }

}

class Rectangle extends Shape{
    public $height,$width;
    public function _construct($color,$height,$width){
        parent::_construct($color);
        $this->height=$height;
        $this->width=$width;
    }
    public function getArea(){
        return $this->height*$this->width;
    }
}

obj=new Circle("red",4);
echo $obj->getColor();
echo $obj->getArea();
echo "\r\n";

?>