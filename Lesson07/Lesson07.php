<?php 

require 'Person.php';
require 'Employee.php';
require 'Engineer.php';

// データ追加
$list = array(new Person("佐藤太郎", "東京都", 20, "030123456"));
$list[] = new Employee("山田花子", 80, "金融システム部", "0170123456");
$list[] = new Engineer("木村次郎", "京都府", 38, "PHP" ,"0750123456");
$list[] = new Engineer("山田太郎", "愛知県", 30, "Java", "12345678901");

// 一覧表示
foreach ($list as $value) {
	$value->print();
}

// 検索文字列の設定
$serch = "山田";
echo("検索する文字列：".$serch."<br><br>");

// 検索
echo("検索結果：<br>");
foreach ($list as $value) {
	if(strpos($value->getName(),$serch) === 0){
		$value->print();
	}
}


?>