<?php


include('connect.php');

$gname = $_GET['gname'];

#groupname, role
if($result = $mysqli->query("select name from timerecommending where groupname = \"$gname\" and recommendrank = 1")){
	if($result->num_rows){
		for($count = 0; $count < 1; $count++){
			$row = mysqli_fetch_array($result);
			printf("%s", $row[0]);
		}
		#$result->free();
	} else{
	echo "결과 없음";
	}
}

$mysqli->close();