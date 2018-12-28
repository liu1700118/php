<?php
header("Access-Control-Allow-Origin:http://localhost:63341");
header("Access-Control-Allow-Credentials:true");
$userName=array('userName'=>'123');
echo json_encode($userName);
