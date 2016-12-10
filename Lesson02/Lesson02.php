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

echo("ソート中<br>");
for($i = 0; $i < count($data); $i++){

	$min = $i;

	for($j = $i + 1; $j < count($data); $j++){
		// 確定されてない部分の最小値を取得する
		if($data[$j] < $data[$min]){
			$min = $j;
		}
	}

	// 取得した最小値を交換
	$swap = $data[$i];
	$data[$i] = $data[$min];
	$data[$min] = $swap;

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