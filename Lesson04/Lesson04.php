<?php

require 'Person.php';

$person1 = new Person("佐藤太郎", "東京都", 20, "030123456");
$person2 = new Person("山田花子", "青森県", 80, "0170123456");
$person3 = new Person("木村次郎", "京都府", 38, "0750123456");

// 出力
$person1->print();
$person2->print();
$person3->print();

?>