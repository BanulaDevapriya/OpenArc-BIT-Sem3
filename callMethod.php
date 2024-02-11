<?php
class PersonDemo1{
    private $phone="0112871843";
    private $name="Saman";

    public function __call($name,$arguments){
        if(name==='getMobilePhone'){
            return $this->getPhone();
        }else if($name==='getPersonName'){
            return $this->getName();
        }
        return "Method name $name does not exit";
    }
    private function getPhone{
        return $this->phone;
    }
    private function getName{
        return $this->name;
    }
}
$p= new PersonDemo1();
echo $p->getMobilePhone();
echo $p->getPersonName();
?>