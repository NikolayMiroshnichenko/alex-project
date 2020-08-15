<?php
    
    require_once 'ajax/fondy/autoload.php';
	// send google
	$response = array();
    $field1 = isset($_POST['name']) ? $_POST['name'] : false;
    $field2 = isset($_POST['email']) ? $_POST['email'] : false;
    $field3 = isset($_POST['phone']) ? $_POST['phone'] : false;

    $utm_source = isset($_POST['utm_source']) ? $_POST['utm_source'] : false;
    $utm_medium = isset($_POST['utm_medium']) ? $_POST['utm_medium'] : false;
    $utm_campaign = isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : false;
    $utm_term = isset($_POST['utm_term']) ? $_POST['utm_term'] : false;
    $utm_content = isset($_POST['utm_content']) ? $_POST['utm_content'] : false;

    $field9 = isset($_POST['namecourse']) ? $_POST['namecourse'] : false;
    $field10 = isset($_POST['price']) ? $_POST['price'] : false;
    $fieldFB = isset($_POST['cookfb']) ? $_POST['cookfb'] : false;

    $url = 'https://docs.google.com/forms/d/e/1FAIpQLSd0EFzHgHfepT4VGqGXhY-cmGww3R14g4oR5PaTUYIrl58QXQ/formResponse?hl=en'; // куда слать, это атрибут action у гугл формы 

    $data = array(); // массив для отправки в гугл форм
    $data['entry.573615656'] = $field1; // указываем соответствия полей, ключи массива это нэймы оригинальных полей гуглформы
    $data['entry.426403319'] = $field2;
    $data['entry.1981620753'] = $field3;

    $data['entry.1446344174'] = $field4;
    $data['entry.1054378487'] = $field5;
    $data['entry.1923715127'] = $field6;
    $data['entry.177168480'] = $field7;
    $data['entry.464800458'] = $field8;

    $data['entry.1095959411'] = $field9;
    $data['entry.51740125'] = $field10;

    $data['entry.518612067'] = $fieldFB;

    $data = http_build_query($data); 

    $options = array( // задаем параметры запроса
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );
    $context  = stream_context_create($options); // создаем контекст отправки
    $result = file_get_contents($url, false, $context); // отправляем


    $fieldNfrId = "Название формы:";
    $fieldNname = "Имя:";
    $fieldNphone = "Телефон:";
    $fieldNemail = "Email:";
    $fieldNsumm = "Сумма:";
    $fieldNutm_source = "utm_source:";
    $fieldNutm_medium = "utm_medium:";
    $fieldNutm_campaign = "utm_campaign:";
    $fieldNutm_term = "utm_term:";
    $fieldNutm_content = "utm_content:";
    $fieldNfieldFB = "fb user id:";
    

$token = "1068946556:AAGBPJB-WeFm7v-2CEcQH1WjO9MefqAnxKs";
$chat_id = "-1001318021688";
$arr = array(
  $fieldNfrId => $field9,
  $fieldNname => $field1,
  $fieldNphone => $field3,
  $fieldNemail => $field2,
  $fieldNsumm => $field10,
  $fieldNutm_source => $utm_source,
  $fieldNutm_medium => $utm_medium,
  $fieldNutm_campaign => $utm_campaign,
  $fieldNutm_term => $utm_term,
  $fieldNutm_content => $utm_content,
  $fieldNfieldFB => $fieldFB,

);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

   
    $orderId = number_format(round(microtime(true)*10),0,'.','');

       
        define('MERCHANT_ID' , 1437496);
        define('MERCHANT_PASSWORD' , 'NFfzfrrmIkPvFe0CV274UvZlJAgaRPq7');
        // define('MERCHANT_ID' , 1396424);
        // define('MERCHANT_PASSWORD' , 'test');
        define('IPSP_GATEWAY' ,  'api.fondy.eu');
        $client = new Ipsp_Client( MERCHANT_ID , MERCHANT_PASSWORD, IPSP_GATEWAY );
        $ipsp   = new Ipsp_Api( $client );

        $pricecop = $field10 * 100;
        // $order_id = time();
        $data = $ipsp->call('checkout',array(
            'product_id' => $field9,
         'order_id'    => $orderId,
         'order_desc'  => $field9,
         'currency'    => $ipsp::USD,
         'amount'      => $pricecop,
         'sender_email' => $field2,
         'response_url'=> 'https://protargeting.team/messenger_marketing/status.php'
        ))->getResponse();
        // redirect to checkoutpage
        $responseData = sprintf($data->checkout_url);

        echo $responseData;




?>
