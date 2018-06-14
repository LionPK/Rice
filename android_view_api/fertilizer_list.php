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
$stmt = $conn->prepare("SELECT id_fer, type_fer, name_fer, detail_fer FROM fertilizer ORDER BY id_fer ASC;");

//executing the query
$stmt->execute();

//binding results to the query
$stmt->bind_result($id_fer, $type_fer, $name_fer, $detail_fer);

$fertilizer_list = array();

//traversing through all the result
while($stmt->fetch()) {
    $temp = array();
    $temp['id_fer'] = $id_fer;
    $temp['type_fer'] = $type_fer;
    $temp['name_fer'] = $name_fer;
    $temp['detail_fer'] = $detail_fer;

    array_push($fertilizer_list, $temp);

}

//displaying the result in json format
echo json_encode($fertilizer_list);