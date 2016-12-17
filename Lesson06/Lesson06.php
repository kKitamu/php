<?php 

require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

// 配列にデータを登録
$list = array(new Person("佐藤太郎", "東京都", 20, "030123456"));
$list[] = new Employee("山田花子", 80, "金融システム部", "0170123456");
$list[] = new Engineer("木村次郎", "京都府", 38, "PHP" ,"0750123456");

// 登録したデータを出力
foreach ($list as $value) {
	$value->print();
}

?>