<?php
for($i=1; $i <= 100; $i++){
	if($i % 3 === 0){
		// 3の倍数
		echo($i." ");
	}else if(floor($i / 10) === 3){
		// 10の位が3
		echo($i." ");
	}else if($i % 10 === 3){
		// 1の位が3
		echo($i." ");
	}
}
?>