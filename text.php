<!DOCTYPE html>

<hmtl> 
<head> 
<title>cc</title> 

</head> 
<body> 

	<?php  

		
		$url="file:///C:/xampp/htdocs/test.txt";
		$temp1 = file_get_contents($url);
		$temp1 = iconv("BIG5","UTF-8", $temp1);

		$temp2 = str_replace(",", "", $temp1);
		$temp2 = str_replace(".", "", $temp2);
		$temp2 = str_replace("(", "", $temp2);
		$temp2 = str_replace(")", "", $temp2);
		$temp2 = str_replace("— ", "", $temp2);
		$temp2 = str_replace("\"", "", $temp2);	
		$temp2 = str_replace("\n", " ", $temp2);
		//echo $temp2;
		

		$tt = explode(" ", $temp2);

		//echo substr_count($temp2, "a");

		$i = count($tt);
		$ff = array();
		$tempArray = array();
		$cc = 0;
		;

		for ($r=0 ; $r<$i ; $r++){
			$tt[$r] = trim($tt[$r]);
		}

		sort($tt);

		echo '<pre>',print_r(array_count_values($tt)),'</pre>'

		// for($j=0 ; $j<$i ; $j++){
		// 	if( !(in_array($tt[$j], $tempArray))){
		// 		$tempArray[$cc] = $tt[$j];
		// 		$ff[$cc][0] = $tt[$j];
		// 		$ff[$cc][1] = substr_count($temp2, $tt[$j]);
		// 		$cc ++ ;
		// 	}
		// }
		// //echo $cc;

		// for ($x=0 ; $x<$cc ; $x++){
		// 	for ($y=0 ; $y<2 ; $y++){
		// 		echo $ff[$x][$y];
		// 		echo " ";
		// 	}
		// 	echo "<br>" ;
		// }

	?>


	
	
</body> 
</html>