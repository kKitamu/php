<?php

// Personクラス読み込み
require 'Person.php';

// 配列にデータを登録
$list = array(new Person("佐藤太郎", "東京都", 20, "030123456"));
$list[] = new Person("山田花子", "青森県", 80, "0170123456");
$list[] = new Person("木村次郎", "京都府", 38, "0750123456");

// 登録したデータを出力
foreach ($list as $value) {
	$value->print();
}

?>