<?php

//database constants
define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME', 'rice_area');

//connecting to database and getting the connection object
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Checking if any error occured while connecting
if(mysqli_connect_error()) {
    echo "เชื่อมต่อ MySQL ผิดพลาด: " . mysqli_connect_error();
    die();

}

//creating a query
$stmt = $conn->prepare("SELECT id_soil, type_soil,  detail_soil FROM soil ORDER BY id_soil ASC;");

//executing the query
$stmt->execute();

//binding results to the query
$stmt->bind_result($id_soil, $type_soil, $detail_soil);

$soil_list = array();

//traversing through all the result
while($stmt->fetch()) {
    $temp = array();
    $temp['id_soil'] = $id_soil;
    $temp['type_soil'] = $type_soil;
    $temp['detail_soil'] = $detail_soil;

    array_push($soil_list, $temp);

}

//displaying the result in json format
echo json_encode($soil_list);