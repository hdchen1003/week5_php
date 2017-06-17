<html>
<head>
<title>php第五周作業</title>
</head>
<body>
<?php

	$mon=date("n");
	if($mon==1){
		echo '<img src=m1.jpg>'."<br/>";
	}
	else if($mon==2){
		echo '<img src=m2.jpg>'."<br/>";
	}
	else if($mon==3){
		echo '<img src=m3.jpg>'."<br/>";
	}
	else if($mon==4){
		echo '<img src=m4.jpg>'."<br/>";
	}
	else if($mon==5){
		echo '<img src=m5.jpg>'."<br/>";
	}
	else if($mon==6){
		echo '<img src=m6.jpg>'."<br/>";
	}
	else if($mon==7){
		echo '<img src=m7.jpg>'."<br/>";
	}
	else if($mon==8){
		echo '<img src=m8.jpg>'."<br/>";
	}
	else if($mon==9){
		echo '<img src=m9.jpg>'."<br/>";
	}
	else if($mon==10){
		echo '<img src=m10.jpg>'."<br/>";
	}
	else if($mon==11){
		echo '<img src=m11.jpg>'."<br/>";
	}
	else if($mon==12){
		echo '<img src=m12.jpg>'."<br/>";
	}

	echo date ("今天是 Y 年 n 月 j 日 H點 i分 s秒 星期l ",mktime(date('H'+8)))."<br/>"."<br/>";


	echo date ("離世界末日剩下 z天 i分 s秒",mktime(365-date('z'),60-date('i'),60-date('s')));
?>
</body>
</html>
