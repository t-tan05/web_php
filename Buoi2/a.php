<?php
$s = 'Hi';
?>

<h1><?php echo $s ?></h1>
<?php 
  for ($i = 1; $i < 10; $i++)
  {
    /*
    ?>
        <h2><?php echo $i ?></h2>
    <?php
    */

    echo "<h2>" .$s . "</h2>";
  }
?>

<hr>

<?php
    for($i = 1; $i <=10; $i++)
    {
        ?>
            <h2><?php echo $s ?></h2>
        <?php
    }
?>


<hr>
<?php 
//Hang so (khong co do la o dau)
const s = 'Abc';
define("x", 100);

$n1 = '10';
$n2 = 5;
$n3 = $n1 + $n2; //bang 15 (so)
echo $n3;
?>
