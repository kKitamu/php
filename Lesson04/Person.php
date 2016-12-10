<?php
/**
* 個人情報が登録されるクラス
*/
class Person
{
	private $name;
	private $address;
	private $age;
	private $telephone;

	function __construct($CName, $CAddress, $CAge, $CTelephone){
		// メンバ変数に値を設定
		$this->name = $CName;
		$this->address = $CAddress;
		$this->age = $CAge;
		$this->telephone = $CTelephone;
	}

	/**
	* 登録されている情報を出力するメソッド
	*/
	function print(){
		echo("氏名 : ".$this->name."<br>");
		echo("住所 : ".$this->address."<br>");
		echo("年齢 : ".$this->age."<br>");
		echo("電話番号 : ".$this->telephone."<br>");
		echo("<br>");
	}
}
?>