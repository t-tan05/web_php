<?php

    class Student{
        public $id;
        public $name;
        private $phone;
        function setInfo($id, $name, $phone){
            $this->id = $id;
            $this->name = $name;
            $this->phone = $phone;
        }

        public function getInfo(){
            echo '<br>';
            echo "ID = {$this->id} <br>";
            echo "Name = {$this->name} <br>";
            echo "Phone = {$this->phone} <br>";
        }

    }
    $o1 = new Student;
    $o1->setInfo('10', 'Nguyen Van A', '0909999999');
    print_r($o1);
    $o1->getInfo();
?>