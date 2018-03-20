<?php
//streaming code

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

// below is from ajax code
        require 'espconnect.php';
        $result = mysqli_query($con,"SELECT macAddr FROM `location` ORDER BY time DESC LIMIT 0,1");
//      $result = mysqli_query($con,"SELECT location FROM names WHERE name = 'Alex'");
        $row = mysqli_fetch_assoc($result);

//      echo 'test';
//      echo $row[mac];
//      echo $_POST['name'];

// This next bit was put in to see if I could operate on the data before it is returned.

	if ($row[macAddr] == "2C:E6:CC:0B:0D:C8") {  //South Lab
        	$new_data = "left:320px;top:150px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:10:47:D8") { //schwants / hurtic room
		$new_data = "left:475px;top:500px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0A:46:B8") {  // hanvey room
		$new_data = "left:100px;top:350px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:6B:08") {  // west end 2nd fl hall
		$new_data = "left:100px;top:450px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:0B:08") {  // 53 gym
		$new_data = "left:250px;top:450px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:09:BC:C8") {  // dist office
		$new_data = "left:325px;top:525px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0E:B6:48") {  // Elem Office
		$new_data = "left:525px;top:400px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:0B:78") {  // 2000 gym
		$new_data = "left:700px;top:240px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:10:4E:58") {  // Baker - Elem hall
		$new_data = "left:520px;top:250px;";
   }	elseif ($row[macAddr] == "C0:8A:DE:21:D2:28") {  // EC in 2000 end
		$new_data = "left:815px;top:250px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0E:2D:F8") {  // Wrestling Rm 2000 end
		$new_data = "left:660px;top:325px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0F:BE:18") {  //  Pauly Classrom - Barthel Hallway
		$new_data = "left:500px;top:320px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:6D:68") {  //  Library
		$new_data = "left:400px;top:450px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:6d:68") {  //  Library2
		$new_data = "left:450px;top:450px;";
   }	elseif ($row[macAddr] == "E8:1D:A8:30:5D:58") {  //  Hoemberg Classrom
		$new_data = "left:320px;top:300px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:0D:C8") {  //  South Lab
		$new_data = "left:250px;top:150px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:70:98") {  //  K Weishalla Room
		$new_data = "left:200px;top:300px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0F:CC:48") {  //  Cafeteris
		$new_data = "left:400px;top:350px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0F:93:78") {  //  Rm 129 kindergarten
		$new_data = "left:550px;top:470px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:09:28") {  //  3rd fl math
		$new_data = "left:30px;top:400px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:6A:58") {  //  Harig 2nd fl hall
		$new_data = "left:130px;top:400px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:0F:9B:98") {  //  Reiwer Elem Hall
		$new_data = "left:550px;top:250px;";
   }	elseif ($row[macAddr] == "6C:AA:B3:10:0C:A8") {  //  Elem Hall - Troy Anderson
		$new_data = "left:530px;top:350px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:0B:78") {  //   2000 Gym
		$new_data = "left:700px;top:200px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:0B:68:D8") {  //   Hanson's Room
		$new_data = "left:300px;top:270px;";
   }	elseif ($row[macAddr] == "2C:E6:CC:09:84:68") {  //   north lab
		$new_data = "left:260px;top:160px;";
   }	else {
		$new_data = "left:10px;top:10px;";
//		$new_data = $row[macAddr];
   }

//        echo (mysqli_num_rows($result) !== 0) ? $row[location] : "Not Found";

//generate random number for demonstration
//$new_data = rand(0, 900);
//$new_data = $row[mac];
//echo the new number

echo "data:".$new_data."\n\n";
flush();

?>
