<?php
require_once 'autoload.php';


// header("Content-type: application/json; charset=utf-8");

define('MERCHANT_ID' , 1396424);
define('MERCHANT_PASSWORD' , 'test');
define('IPSP_GATEWAY' ,  'api.fondy.eu');
$client = new Ipsp_Client( MERCHANT_ID , MERCHANT_PASSWORD, IPSP_GATEWAY );
$ipsp   = new Ipsp_Api( $client );
