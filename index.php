<?php 

$array = array();
$array[] = array('nombre'=>'2','edad'=>'20');
$array[] = array('nombre'=>'2','edad'=>'20');
$array[] = array('nombre'=>'2','edad'=>'20');


echo $array[2]['nombre'];

foreach ($array as $key=>$value){
    echo $value;
}

?>