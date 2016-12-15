<?php
/**
* 個人情報が登録されるクラス
*/
class Person
{
	protected $name;
	protected $address;
	protected $age;
	protected $telephone;

	function __construct($CName, $CAddress, $CAge, $CTelephone){
		$this->name = $CName;
		$this->address = $CAddress;
		$this->age = $CAge;
		$this->telephone = $CTelephone;
	}

	function print(){
		echo("氏名 : ".$this->name."<br>");
		echo("住所 : ".$this->address."<br>");
		echo("年齢 : ".$this->age."<br>");
		echo("電話番号 : ".$this->telephone."<br>");
		echo("<br>");
	}
}
?>