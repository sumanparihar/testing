<?php
echo "test";
$cmd='curl https://api.sandbox.paypal.com/v1/payments/payment/PAY-3PJ81320D5045362LK5GB2ZQ\
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer AR5nHeF3O0vmBkRCHjfT6YANUz5Ubapu4re_EDik19_gfaAKLOrY1ZHPignll-9LHbJBGdOdCvdiFK3Z"';
exec($cmd,$result);
$pageurl = 'curl https://api.sandbox.paypal.com/v1/payments/payment/PAY-3PJ81320D5045362LK5GB2ZQ\
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer AR5nHeF3O0vmBkRCHjfT6YANUz5Ubapu4re_EDik19_gfaAKLOrY1ZHPignll-9LHbJBGdOdCvdiFK3Z"';


$theurl = $pageurl;
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //needed so that the $result=curl_exec() output is the file and isn't just true/false

//execute post
$result = curl_exec($pageurl);


curl_setopt($ch, CURLOPT_POSTFIELDS); 
$response = curl_exec($ch);
print_r($response);
?>