<?php
//две проверки выполнят одно и тоже

	$word = "Hello";
	
if ($word == "Hello"){
	echo "1";
	} else {
	echo "2";
}

echo $word=="Hello"?"1":"2"; //если выполнится условие, то выполнится код после "?", если нет, то код после ":"
?>