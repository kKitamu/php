<?php

/**
* 社員の情報を登録するクラス
*/
class Employee extends Person
{
	private $section;

	function __construct($CName, $CAge, $CSection, $CTelephone)
	{ 
		$this->name = $CName;
		$this->age = $CAge;
		$this->section = $CSection;
		$this->telephone = $CTelephone;
	}

	function print(){
		echo("氏名 : ".$this->name."<br>");
		echo("年齢 : ".$this->age."<br>");
		echo("所属部署名 : ".$this->section."<br>");
		echo("電話番号 : ".$this->telephone."<br>");
		echo("<br>");
	}
}

?>