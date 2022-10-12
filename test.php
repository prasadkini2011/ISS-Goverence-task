<?php
// string length start with 1
$str = "abcdefghi";
$len =  strlen($str)-1;
for($i = $len;$i>0;$i--){
    echo $str[$i];
}
echo "<br>-------------------------------------<br>";
$arr = [2,1,4,7,5,8,9];

for($i = 0; $i<count($arr);$i++){
	for($j = 0; $j<count($arr);$j++){
		if($arr[$i]<$arr[$j]){
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		}
	}
}

print_r($arr);

echo "<br>-------------------------------------<br>";
$result = [];
$str = "asdcascvfrsdfasenn";
$length = strlen($str);
for($i = 0;$i<$length;$i++){
	$result[$str[$i]] = isset($result[$str[$i]]) ? $result[$str[$i]] + 1 : 1;
}
print_r($result);

echo "<br>-------------------------------------<br>";
for($i=5;$i>0;$i--){
	for($j=$i;$j>0;$j--){
		echo "*";
	}
	echo "<br>";
}
echo "<br>-------------------------------------<br>";	
for($i=5;$i<=5;$i++){
	echo $i;
	for($j=0;$j<$i;$j++){
		 echo $j;
	}
	 echo "<br>";
}
