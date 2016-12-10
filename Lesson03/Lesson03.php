<?php
// 配列にランダムな値を入れる
$data = array(1,2,3,4,5,6,7,8,9,10);

shuffle($data);

// ソート前出力
echo("ソート前<br>");
echo("[");
for($i = 0; $i < count($data); $i++){
	echo($data[$i]);
	if($i != count($data)-1){ echo(", "); }
}
echo("]<br>");

// バブルソート処理
echo("ソート中<br>");

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
		if($k != count($data)-1){ echo(", "); }
	}
	echo("]<br>");
}

// ソート後出力
echo("ソート後<br>");
echo("[");
for($i = 0; $i < count($data); $i++){
	echo($data[$i]);
	if($i != count($data)-1){ echo(", "); }
}
echo("]<br>");
?>