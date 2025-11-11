<?php
    $arr = [
        ["id"=>1, "name"=>"Phone", "price"=>10],
        ["id"=>1, "name"=>"Laptop", "price"=>24],
        ["id"=>1, "name"=>"Fan", "price"=>4],
    ];
?>

<a href="?sort=asc">Tang dan</a>
<a href="?sort=desc">Giam dan</a>
<select name="cot" id="">
    <option value="name">Ten sp</option>
    <option value="price">Gia sp</option>
</select>
<h1>Ket qua hien thi mang arr da sap gia tang/giam</h1>


<?php
    
    $sort = $_GET['sort'] ?? "asc";
    if($sort == "desc"){
        usort($arr, function($a, $b){
            return $b['price'] - $a['price'];
        });

    }
    if($sort == 'asc'){
        usort($arr, function($a, $b){
            return $a['price'] - $b['price'];
        });
    }
    echo '<pre>'. $sort; print_r($arr)
?>
