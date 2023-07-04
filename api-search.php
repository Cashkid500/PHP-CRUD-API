<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$data = json_decode(file_get_contents("php://input"), true);

$psearch = $data["search"];

require_once "dbconfig.php";

echo $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%" . $psearch . "%'"; 

$result = mysqli_query($conn, $query) or die("Search Query Failed.");

$count = mysqli_num_rows($result);

if ($count>0){
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($rows);
}
else {
    echo json_encode(array("message" => "No Search Found.", "status" => false));
}

?>