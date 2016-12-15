<?php

/**
* 技術者の情報を登録するクラス
*/
class Engineer extends Person
{
	private $skill;

	function __construct($CName, $CAddress, $CAge, $CSkill, $CTelephone)
	{ 
		$this->name = $CName;
		$this->address = $CAddress;
		$this->age = $CAge;
		$this->skill = $CSkill;
		$this->telephone = $CTelephone;
	}

	function print(){
		echo("氏名 : ".$this->name."<br>");
		echo("住所 : ".$this->address."<br>");
		echo("年齢 : ".$this->age."<br>");
		echo("保有技術 : ".$this->skill."<br>");
		echo("電話番号 : ".$this->telephone."<br>");
		echo("<br>");
	}
}

?>