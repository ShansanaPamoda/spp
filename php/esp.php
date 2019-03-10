<?php

	$voltage = $_POST['voltage'];
	$voltage = (float)$voltage;
	$current = $_POST['current'];
	$current = (float)$current;
	$power = ($voltage * $current);
        
        $link = mysqli_connect("fdb24.awardspace.net", "2920583_root", "19940319Spp", "2920583_root")or die("ERROR: Could not connect.". mysqli_connect_error());
        
        
        $date = date("Ymd");;
        
        date_default_timezone_set("Asia/Colombo");
        
        $time = date("His");
        
     
        
        
        $sql = "INSERT INTO room1 (time, date, current, voltage , power) VALUES ($time , $date , $current, $voltage , $power)";
        
        $results = mysqli_query($link, $sql) or die ("ERROR: Could not able to execute $sql. " . mysqli_error($link));
    
         echo "data subbmited sucessfully";//<br>
		 echo 'power =',$power;
        // Close connection
        mysqli_close($link);
		

?>