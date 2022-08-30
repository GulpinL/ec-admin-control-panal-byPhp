<?php

$data_array = array(
    // <!-- title, price,thumbnail,description,created_at,updated_at,category_id,brand,discount -->

    'title' =>  $_POST['title'],
    'price' =>  $_POST['price'],
    'thumbnail' =>  $_POST['thumbnail'],
    'description' =>  $_POST['description'],
    "created_at"=> date("Y/m/d"),
    "updated_at" => date("Y/m/d"),
    'category_id' =>  $_POST['category_id'],
    'brand' =>  $_POST['brand'],
    'discount' =>  $_POST['discount']
);

// $url = "http://localhost:9000/api/v1/product/addProduct";
$url = "https://ezcamp-api-list.herokuapp.com/api/v1/product/addProduct";

$data=http_build_query($data_array);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_TIMEOUT , 15);

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

header("Location: ./_layout.php");


?>