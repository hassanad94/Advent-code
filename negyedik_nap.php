<?php
ini_set('max_execution_time', 5000);
$code = "bgvyzdsv";
$mdcode = md5($code);
$i = 0;
$talalt = false;



do{
	$mdcode = md5($code.strval($i));
	//echo'code: '.$code.strval($i).'   md5: '.$mdcode.'<br>';
	if(substr($mdcode,0,5)==="00000"){
		echo'A biztonsági kód: bgvyzdsv'.$i.
		$talalt =true;
	}
	$i++;
}while($talalt != true);
?>