<?php
include 'inc/autoload.inc.php';
include 'classes/Dao/daoMeasure.php';
include 'classes/Domaine/Measure.php';

$config = include 'inc/config.inc.php';
?>


<?php 
$id = 6;
$daoTest =  new daoMeasure($config);
//$mesure = new Measure(60,30);
$mesureUpdate = new Measure($id, 30, 20);
//$daoTest->insertTemp($mesure);

//$daoTest->deleteUser(10);
$daoTest->updateMesure($mesureUpdate);


?>