<!doctype html>
<?php
	$sum = 0;
	function result($x){
		if ($x=="0"){
		$sum += 0;
		}
		if ($x=="1"){
		$sum += 1;
		}
		if ($x=="2"){
		$sum += 2;
		}
	}
	result($_POST["single"]);
	result($_POST["character"]);
	result($_POST["help"]);
	result($_POST["limit"]);
	result($_POST["mate"]);
?>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
</head>
	
<body>
<h1>測驗結果</h1>
	<?php
		$sum = 0;
		function result($x){
			if ($x=="0"){
			$sum += 0;
			}
			if ($x=="1"){
			$sum += 1;
			}	
			if ($x=="2"){
			$sum += 2;
			}
		}
		result($_POST["single"]);
		result($_POST["character"]);
		result($_POST["help"]);
		result($_POST["limit"]);
		result($_POST["mate"]);
		if ($sum ==0){
			echo "好人卡郵筒\n
			個性太好，全心全意付出，不求回報\n
			你可能不適合談戀愛";
		}
		if ($sum >=7&&$sum<=9){
			echo "S屬性
			個性強勢，控制愈強烈
			對喜歡的人會不自覺想欺負一下";
		}
		if ($sum >=4&&$sum<=6){
			echo "傲嬌
			平常說話帶刺、態度強硬高傲
			在一定的條件下害臊地黏膩在另一半";
		}
		if ($sum >=1&&$sum<=3){
			echo "M屬性
			性格弱，希望另一半可以替自己決定任何事";
		}
	?>
</body>
</html>