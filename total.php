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
echo $kekka,PHP_EOL;
$test = array_sum([1,2,3]);
echo $test;

?>
