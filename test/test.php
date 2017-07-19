<?php
// $a="*";
//  for($i=0;$i<5;$i++){
//  	echo <br/>;
//  }
$i=1;
 $num='*';
// echo "<br/>";
while($i<=5){
	if($i==1){echo"$num".'<br>';}
	$i++;
	if($i>1){
		echo $num.="**";
		echo '<br/>';
		$i++;
	}
}

?>