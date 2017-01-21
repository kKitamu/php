<?php 

$data = array();

foreach ($argv as $value) {
	if($value !== reset($argv)){
		// 0番目はファイル名なので省略
		try {
			if(is_numeric($value)){
				// コマンドライン引数が数字なら配列へ代入
				$data[] = intval($value);
			} else {
				// 数字でないならメッセージを表示
				throw new Exception($value."は数値ではありません。\n");
			}
		} catch (Exception $ex) {
			echo $ex->getMessage();
		}
	}
}


// ソート前出力
echo("ソート前\n");
echo("[");
for($i = 0; $i < count($data); $i++){
	echo($data[$i]);
	if($i != count($data)-1){ echo(", "); }
}
echo("]\n");

// バブルソート処理
echo("ソート中\n");

for($i = 0; $i < count($data) - 1; $i++){
	for($j = 1; $j < count($data) - $i; $j++){
		// 隣の要素と比較し、交換する
		if($data[$j] < $data[$j - 1]){
			$swap = $data[$j];
			$data[$j] = $data[$j - 1];
			$data[$j - 1] = $swap;
		}
	}

	// ソート過程を出力
	echo("[");
	for($k = 0; $k < count($data); $k++){
		echo($data[$k]);
		if($k != count($data)-1){ 
			echo(", "); 
		}
	}
	echo("]\n");
}

// ソート後出力
echo("ソート後\n");
echo("[");
for($i = 0; $i < count($data); $i++){
	echo($data[$i]);
	if($i != count($data)-1){
		echo(", ");
	}
}
echo("]\n");

?>