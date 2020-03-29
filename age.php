
<?php
//生年月日を入力すると年齢を求めるプログラム
$now = date('Y/n/j');
$year = $argv[1];
$month = $argv[2];
$day = $argv[3];
$birthday = "$year/$month/$day";
//$birthdayには誕生日。現在から誕生日を引く
$age = $now - $birthday;
echo "あなたは $age 歳です";

?> 