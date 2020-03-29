<?php
function total($array){
    $total = 0;
    for($i=0;$i < count($array);$i++){
        $total = $total+$array[$i];
    }
    return $total;
}
$params = array_slice($argv,1);
$kekka = total($params);
//$kekka　は合計値が入っている
$average = $kekka / count($params);
echo $average;
?>