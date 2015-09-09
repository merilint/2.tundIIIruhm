<?php
    $first_name = "Merilin";
	$last_name = "Takk";
	echo $first_name." ".$last_name;

?>
<br>
<?php

    $age = 5;
	
	//testib loogikat, juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine", muul juhul "täisealine"
    
	//if's sisse loogikaehe
	if($age < 18) {
		//tõene
		
		echo "alaealine";
		
    } else {
		//väär
		
		echo "täisealine";
		
	}

?>	