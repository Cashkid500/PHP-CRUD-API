<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$pid = $data["id"];
$pname = $data["name"];
$pprice = $data["price"];

require_once "dbconfig.php";

echo $query = "UPDATE tbl_product SET product_name = '".$pname."' , product_price = '".$pprice."' WHERE product_id = '".$pid."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed"))
{
    echo json_encode(array("message" => "Product Updated Successfully", "status" => true));
}
else{
echo json_encode(array("message" => "Failed Product Not Updated", "status" => false));
}

?>