<?php
header("Access-Control-Allow-Origin:http://10.30.29.67:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type,xfilecategory,xfilename,xfilesize");
$userName=array('userName'=>'123456');
echo json_encode($userName);