<?php
$eredmeny = 0;
$kezelo = fopen("box.txt","r");
$min = 0;
$i= 0;
$eredmeny2=0;
if($kezelo){
	while(($sor = fgets($kezelo)) != false){
		$meret = explode("x",$sor);
		$l = intval($meret[0]);
		$w = intval($meret[1]);;
		$h = intval($meret[2]);;
		$oldalak = array($l,$w,$h);
		sort($oldalak);
		$eredmeny += 2*($l*$w + $l*$h + $h*$w) + ($oldalak[0] *$oldalak[1]) ;
		$eredmeny2 += 2*($oldalak[0] +$oldalak[1]) + ($l*$w*$h);	
	}
	echo  'Összesen '.$eredmeny.' square feet csomogoló anyag kell.<br>';
	echo  'Összesen '.$eredmeny2.' feet szallag kell.';
}else{
	echo'Hiba a file megnyitása során.';
}

?>