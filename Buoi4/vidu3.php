<?php
    function F2(&$a, $b=6){
        $a += 2;
        $b++;
        return $a + $b;
    }

    $n = 6; $m = array_sum([1,0,2]);
    $s = F2($n);
    echo "<br>2. n = $n, m = $m, s = $s"; 


    //Câu 3
    function F3($arr, $n = 3){
        $s = 2;
        foreach($arr as $k=>$v){
            if($v % 2 && $k < $n){
                $s += $arr[$k]; 
            }
        }
        return $s;
    }
    echo "<br>3. ". F3([4,2,5,9, 1, 4]);

    //Câu 4
    function F4($s, &$arr){
        $arr = explode("+", $s);
    }
    $a = [1,2];
    F4('2+1+3', $a);
    $s = 1;
    foreach($a as $v){
        $s += $v;

    }
    echo "<br>4. $s";
?>