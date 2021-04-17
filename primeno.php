<?php

//$n=11;
if(isset($_GET['sub'])){
	$n=$_GET['n1'];
	echo $n;
	

$num=0;
for($i=2; $i<$n; $i++){
	if(($n%$i)==0){
		$num=1;
		break;
	}
}	

if($num==1){
	$a="no. is not a prime no.";
	}
	else
	{
	$a=" no. is prime no.";
	}

}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="get">
	Enter No.<input type="number" name="n1">
	<input type="submit" name="sub">
	<h1><?php echo @$a?></h1>

</form>
</body>
</html>