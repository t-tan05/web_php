<?php
    /* class object
    public, protected, private, attribute, method, construct, destruct, static, const, extends */

    class A{
        public $a1; protected $a2;
        private $a3; public static $a4 = 0;
        public const a1 = 3;

        function __construct($n1, $n2, $n3=3) {
            $this->a1 = $n1;
            $this->a2 = $n2;
            $this->a3 = $n3;
            A::$a4 += A::a1;
        }

        function __destruct()
        {
            echo '6';
        }

        function __toString()
        {
            return $this->a1*3;
        }

        protected function F1(){
            echo $this->a1+$this->a2+$this->a3+A::$a4;
        }

        function F2(){
            $this->F1();
        }
    }

    $o1 = new A(1,3);
    echo $o1->F2();
    $o1 = new A(2,2,2);
    $o2 = new A(1,1,2);
    $o1->F2();
    $o2->F2();
    $o3 = new A(1,1);
    $o1->F2();
    $o3->F2();
    echo $o1.$o2.$o3;
?>