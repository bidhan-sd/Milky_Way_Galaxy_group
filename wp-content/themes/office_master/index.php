<?php
	// 3rd tutorial.
	$x = 10;
	$_num = 10;
	//echo "This is x value ".$x; 
	//echo "This is x value $x "; 
	//echo 'This is x value $x '; 
	//echo "This is x value $_num "; 
	
	//Array.
	//$var = array('One','Two','Three');
	//echo $var[2];
	
	//4th tutorial
	/*	$a = 2 + 5;
		$b = 2 - 5;
		$c = 2 * 5;
		$d = 2 / 5;
		$e = 2 % 5;
		echo $a."<br/>";
		echo $b."<br/>";
		echo $c."<br/>";
		echo $d."<br/>";
		echo $e."<br/>";
	*/
	//Assinment operator
		/*$ab = 5;
		$ab %= 10;
		echo $ab;*/
	//Compare operator
		//echo "<br/>";
		//echo 6 >= '5';
	
	//5th turorial.compare operator.
		/*echo 6 !== '6';
		echo 7 >= 7;*/
		
	//Increment operator.
		/*
			$var = 10;
			echo $var++;//post increment
			echo ++$var;//pre increment
		*/
	//IF Statement.
		/*
			$tk = 10;
			if($tk >= 50){
				echo "Buy Two ice-cream";
			}elseif($tk >= 10){
				echo "Bye One ice-cream";
			}else{
				echo "Low Balance";
			}
		*/
		
	//6th turorial . Switch statement.
		/*
		$day = "fri";
		switch($day){
			case "fri":
			echo "Friday";
			break;
			
			case "sat":
			echo "Saterday";
			break;
			
			case "sun":
			echo "Sunday";
			break;
			
			case "mon":
			echo "Monday";
			break;
			
			case "tue":
			echo "Tushday";
			break;
			
			case "Wed":
			echo "Wednesday";
			break;
			
			default:
			echo "thusday";
			break;
		}
		*/
		//While loop
		/*$var = 0;
		while($var <= 100){
			echo $var . " ";
			$var++;
		}*/
	
	//7th turorial For loop.
	/*$var = 101;
	do{
		echo $var; 
	}while($var <= 100)*/
	
	/* for($var =0; $var<=100 ; $var++){
		echo $var . " ";
	} */
	$arr = ['bidhan','sutra','dhar','kanchan','pur','high'];
	foreach($arr as $value){
		//echo $value . "<br/>";
	}
	
	//This process another way.
	$arr = ['bidhan','sutra','dhar','kanchan','pur','high'];
	$arrlength = count($arr);
	for($i=0;$i<$arrlength; $i++){
		echo $i." = ".$arr[$i]."<br/>";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>