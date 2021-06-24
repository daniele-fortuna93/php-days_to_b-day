<?php
header('Content-Type: application/json');
include('db.php');


$result = $mysqli->query("SELECT * FROM users");
$response = [];
foreach ($result as $row) {
    $record['name'] = $row['name'];
    $record['lastname'] = $row['lastname'];
    $record['birth_date'] = $row['birth_date'];
    $response[] = $record;
}
echo json_encode($response);
    
mysqli_close($mysqli);


	
    
	
