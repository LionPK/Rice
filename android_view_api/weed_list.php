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
$stmt = $conn->prepare("SELECT id_weed, type_weed, name_weed, detail_weed FROM weed ORDER BY id_weed ASC;");

//executing the query
$stmt->execute();

//binding results to the query
$stmt->bind_result($id_weed, $type_weed, $name_weed, $detail_weed);

$weed_list = array();

//traversing through all the result
while($stmt->fetch()) {
    $temp = array();
    $temp['id_weed'] = $id_weed;
    $temp['type_weed'] = $type_weed;
    $temp['name_weed'] = $name_weed;
    $temp['detail_weed'] = $detail_weed;

    array_push($weed_list, $temp);

}

//displaying the result in json format
echo json_encode($weed_list);