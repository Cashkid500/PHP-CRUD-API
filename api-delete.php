<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$pid = $data["id"];

require_once "dbconfig.php";

echo $query = "DELETE FROM tbl_product WHERE product_id='". $pid."'";

if(mysqli_query($conn, $query) or die("Delete Query Failed")){
    echo json_encode(array("message" => "Product Deleted Successfully", "status" => true));
} else {
    echo json_encode(array("message" => "Failed Product Not Deleted", "status" => false));
}

?>