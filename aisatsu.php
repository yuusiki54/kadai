<?php
$month = date("n");

if ($month <= 3) {
    echo "寒いですね";
} elseif ($month <= 6) {
    echo "涼しいですね";
} elseif ($month <= 9) {
   echo "暑いですね";
} else{
    echo "寒いですね";
}
?>