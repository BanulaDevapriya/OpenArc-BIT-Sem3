<?php
interface Animal {/*All classes in Interface are abstract classes */
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
    echo "<br>";
  }
}

$animal = new Cat();
$animal->makeSound();
?>

<?php
interface MyInterface{
    public function getName();
}
interface MyInterface1{
    public function getAge();
}
interface SubInterface extends MyInterface,MyInterface1{
    public function getPhone();
}

class MyClass implements SubInterface{
    public function getName(){
        echo "Test Name".PHP_EOL;
    }
    public function getAge(){
        echo "Test Age".PHP_EOL;
    }
    public function getPhone(){
        echo "Phone : 111111 ".PHP_EOL;
    }
}
$obj = new MyClass;
$obj->getName();echo "<br>";
$obj->getAge();echo "<br>";
$obj->getPhone();/*If one method is not declared there will be an error */
?>