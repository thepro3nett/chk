<?php 

/////////////////////////ðŸ±Raw Api for **Braintree** payment gateway #OSCAR]ðŸ±/////////////////////////

error_reporting(0);
date_default_timezone_set('Asia/bangkok');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];




  
$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

//$crawleraproxy = 'proxy.crawlera.com:8010';
//$proxyauth = '92a7b8a4e0de4b829b914280cbb772ad:';

/////////////////////////ðŸ± [RANDOMISE]ðŸ±/////////////////////////



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
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","outlook.com");
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

/*
switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}
*/


function saveCVV($cc) {
    $file = dirname(FILE) . "/cvv.txt";
    $fp = fopen($file, "a+");
    fwrite($fp, $cc . PHP_EOL);
    fclose($fp);
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.stripe.com/6');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: m.stripe.com',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: text/plain;charset=UTF-8',
//'cookie: m=3795b78f-8d87-415c-a511-b3bd2382f2c5a13857',
'origin: https://m.stripe.network',
'referer: https://m.stripe.network/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_POSTFIELDS, 'JTdCJTIydjIlMjIlM0ExJTJDJTIyaWQlMjIlM0ElMjI3ZjkyY2U1NjMyYjI3YmQ0NGY4YTE5NGM1NWFkZWRmZCUyMiUyQyUyMnQlMjIlM0E0My43NjUlMkMlMjJ0YWclMjIlM0ElMjI0LjUuMzMlMjIlMkMlMjJzcmMlMjIlM0ElMjJqcyUyMiUyQyUyMmElMjIlM0FudWxsJTJDJTIyYiUyMiUzQSU3QiUyMmElMjIlM0ElMjJodHRwcyUzQSUyRiUyRnBMUEhvMDZNLTNXVkJhanA2b1ZsbS0taU9QTXlLT0J5Wm9ZcjFITjh0ek0uaVZuUVcwYXJmSWdnMWM1UGJhcll1MTBtdGJ1Tm8wNWowOGdJNk4wWGZqMC5odlNuMEhiSlFwNFVoXzFCQ0ctV0UzWDloam81SHVhdzRlbENMWnZYSVBBJTJGJTIyJTJDJTIyYiUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGOFhhQl91SThjdjNKZXhRa1g2cVRhczNYeXpnNTJQRG04VVE1SDRLd0ljTS5pVm5RVzBhcmZJZ2cxYzVQYmFyWXUxMG10YnVObzA1ajA4Z0k2TjBYZmowLmh2U24wSGJKUXA0VWhfMUJDRy1XRTNYOWhqbzVIdWF3NGVsQ0xadlhJUEElMkZadG9FdlNxdlJFdVFRWV9UYzN2a1RiZVN6XzdPa0t4eGJkR1Z5UUxPVVZNJTJGOUN4eWlGeUhMcWJ5em92SFRLNXZraGpDSlV5TmdieVlvQzR6a1RyMy1iMCUyRl80R09iRjhEbnBKYkZBUVktNThaaHdtQmpBTTlVd1l2U0gtWUNmc203QmclM0ZmZHRQZUxiX3lhTkh1WWpFbUZZZjdhSWNYdUdTNTNSNUhUdnV6eE1sOXJBJTNEdVpDVjZtWjdrRDB3b1Njd2tGQ195VmpZLXJ6enNyV3k3bzNvaVJmVzAtayUyNjBwb08tVFBMbzlub0VjRzNsOGlReEM4U1dIVnNiM29aSUpZWXBLR0NfM3MlM0RVa09Kb0tmWEc0ZXlUMGJNVjBScU5wRFJSVnBzX2hwcnVxMTgzc2VvYUQ4JTI2NWE0TWdmVDM1T0sxd1RuU3hXY0xJYjZDdzhBeUxneEJpcVFfLUoya1VwNCUzRFlmX3hvdHplTlJuTG1SQzdNa3RYaUprNEZ6Vnd5VU9aRkVQSHlJY3YyLUklMjZDenpOYWxDT2pTTmhfRXp2Q3ZvbWt3N3gtWDFreDNTanhPdUI0dHdGTlVjJTNETHJQR0wtaEhrR292UHNNZlRsSURzN0lYclNQeUtNY2R4V2lHMHQ3R0t5cyUyNlBhdVd0Z0Q0Rlg0OHQ5TEhYUmY1bHV2eDRrLXliYVNwZ3hsUzBYb283TlUlM0RMclBHTC1oSGtHb3ZQc01mVGxJRHM3SVhyU1B5S01jZHhXaUcwdDdHS3lzJTI2ZmR0UGVMJTNEdVpDVjZtJTI2NGFBeURfJTNEOUN4eWlGJTJDNjVrMWF4JTJDc1dmTEdMJTJDOE9oYzRMJTJDcWwwZnJPJTJDUkUxRDF6JTJDM29XbTljJTI2a21fRkc0JTNETHJQR0wtJTI2N0JVQklRJTNELWZpZXYxJTI2bnpYQnZEJTNEMlN4UHJhJTI2UXp2QUNIJTNEV1ctZXhxJTI2SjN6T3BIJTNER0tKTHdXJTI2dHNpLXRaJTNEalFSQWg1JTI2Y0dCdmQ2JTNEZWJDSkpnaUhMRHJtLXJWMGM2RUNMcUhQZ2FIRHlSZDNvZXdzMDhOaHdKayUyMiUyQyUyMmMlMjIlM0ElMjJOZlRxeFlyZGJERkxKSDN5Q2ZNaWNPN0FnY2FUNWEycVRFUXZLMVk3TGtBJTIyJTJDJTIyZCUyMiUzQSUyMjJhNzZmMGJhLWEzYzQtNDM0Ni05MjU0LTM0NzNhNTNlN2RmYmM2Yjc0MiUyMiUyQyUyMmUlMjIlM0ElMjJOQSUyMiUyQyUyMmYlMjIlM0FmYWxzZSUyQyUyMmclMjIlM0F0cnVlJTJDJTIyaCUyMiUzQXRydWUlMkMlMjJpJTIyJTNBJTVCJTIybG9jYXRpb24lMjIlNUQlMkMlMjJqJTIyJTNBJTVCJTVEJTJDJTIybiUyMiUzQTQ4OS42Njk5OTk5ODA4MzM0JTJDJTIydSUyMiUzQSUyMmNjLndlbW92ZS5ldSUyMiUyQyUyMnYlMjIlM0ElMjJhY3Qud2Vtb3ZlLmV1JTIyJTdEJTJDJTIyaCUyMiUzQSUyMjE0MmI2MjMyMWQ2M2M4MzRmODZmJTIyJTdE');
$result = curl_exec($ch);
//echo $result2;
if (preg_match('~set-cookie: (.*)~i', $result, $match)) {
   $cookies = trim($match[1]);
}

$ccs = trim(strip_tags(getstr($cookies,'m=',';Expires')));
//echo $ccs;
//echo $cookies;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://m.stripe.com/6');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: m.stripe.com',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: text/plain;charset=UTF-8',
//'cookie: m='.$ccs.'',
'origin: https://m.stripe.network',
'referer: https://m.stripe.network/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_POSTFIELDS, 'JTdCJTIydjIlMjIlM0ExJTJDJTIyaWQlMjIlM0ElMjI3ZjkyY2U1NjMyYjI3YmQ0NGY4YTE5NGM1NWFkZWRmZCUyMiUyQyUyMnQlMjIlM0E0My43NjUlMkMlMjJ0YWclMjIlM0ElMjI0LjUuMzMlMjIlMkMlMjJzcmMlMjIlM0ElMjJqcyUyMiUyQyUyMmElMjIlM0FudWxsJTJDJTIyYiUyMiUzQSU3QiUyMmElMjIlM0ElMjJodHRwcyUzQSUyRiUyRnBMUEhvMDZNLTNXVkJhanA2b1ZsbS0taU9QTXlLT0J5Wm9ZcjFITjh0ek0uaVZuUVcwYXJmSWdnMWM1UGJhcll1MTBtdGJ1Tm8wNWowOGdJNk4wWGZqMC5odlNuMEhiSlFwNFVoXzFCQ0ctV0UzWDloam81SHVhdzRlbENMWnZYSVBBJTJGJTIyJTJDJTIyYiUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGOFhhQl91SThjdjNKZXhRa1g2cVRhczNYeXpnNTJQRG04VVE1SDRLd0ljTS5pVm5RVzBhcmZJZ2cxYzVQYmFyWXUxMG10YnVObzA1ajA4Z0k2TjBYZmowLmh2U24wSGJKUXA0VWhfMUJDRy1XRTNYOWhqbzVIdWF3NGVsQ0xadlhJUEElMkZadG9FdlNxdlJFdVFRWV9UYzN2a1RiZVN6XzdPa0t4eGJkR1Z5UUxPVVZNJTJGOUN4eWlGeUhMcWJ5em92SFRLNXZraGpDSlV5TmdieVlvQzR6a1RyMy1iMCUyRl80R09iRjhEbnBKYkZBUVktNThaaHdtQmpBTTlVd1l2U0gtWUNmc203QmclM0ZmZHRQZUxiX3lhTkh1WWpFbUZZZjdhSWNYdUdTNTNSNUhUdnV6eE1sOXJBJTNEdVpDVjZtWjdrRDB3b1Njd2tGQ195VmpZLXJ6enNyV3k3bzNvaVJmVzAtayUyNjBwb08tVFBMbzlub0VjRzNsOGlReEM4U1dIVnNiM29aSUpZWXBLR0NfM3MlM0RVa09Kb0tmWEc0ZXlUMGJNVjBScU5wRFJSVnBzX2hwcnVxMTgzc2VvYUQ4JTI2NWE0TWdmVDM1T0sxd1RuU3hXY0xJYjZDdzhBeUxneEJpcVFfLUoya1VwNCUzRFlmX3hvdHplTlJuTG1SQzdNa3RYaUprNEZ6Vnd5VU9aRkVQSHlJY3YyLUklMjZDenpOYWxDT2pTTmhfRXp2Q3ZvbWt3N3gtWDFreDNTanhPdUI0dHdGTlVjJTNETHJQR0wtaEhrR292UHNNZlRsSURzN0lYclNQeUtNY2R4V2lHMHQ3R0t5cyUyNlBhdVd0Z0Q0Rlg0OHQ5TEhYUmY1bHV2eDRrLXliYVNwZ3hsUzBYb283TlUlM0RMclBHTC1oSGtHb3ZQc01mVGxJRHM3SVhyU1B5S01jZHhXaUcwdDdHS3lzJTI2ZmR0UGVMJTNEdVpDVjZtJTI2NGFBeURfJTNEOUN4eWlGJTJDNjVrMWF4JTJDc1dmTEdMJTJDOE9oYzRMJTJDcWwwZnJPJTJDUkUxRDF6JTJDM29XbTljJTI2a21fRkc0JTNETHJQR0wtJTI2N0JVQklRJTNELWZpZXYxJTI2bnpYQnZEJTNEMlN4UHJhJTI2UXp2QUNIJTNEV1ctZXhxJTI2SjN6T3BIJTNER0tKTHdXJTI2dHNpLXRaJTNEalFSQWg1JTI2Y0dCdmQ2JTNEZWJDSkpnaUhMRHJtLXJWMGM2RUNMcUhQZ2FIRHlSZDNvZXdzMDhOaHdKayUyMiUyQyUyMmMlMjIlM0ElMjJOZlRxeFlyZGJERkxKSDN5Q2ZNaWNPN0FnY2FUNWEycVRFUXZLMVk3TGtBJTIyJTJDJTIyZCUyMiUzQSUyMjJhNzZmMGJhLWEzYzQtNDM0Ni05MjU0LTM0NzNhNTNlN2RmYmM2Yjc0MiUyMiUyQyUyMmUlMjIlM0ElMjJOQSUyMiUyQyUyMmYlMjIlM0FmYWxzZSUyQyUyMmclMjIlM0F0cnVlJTJDJTIyaCUyMiUzQXRydWUlMkMlMjJpJTIyJTNBJTVCJTIybG9jYXRpb24lMjIlNUQlMkMlMjJqJTIyJTNBJTVCJTVEJTJDJTIybiUyMiUzQTQ4OS42Njk5OTk5ODA4MzM0JTJDJTIydSUyMiUzQSUyMmNjLndlbW92ZS5ldSUyMiUyQyUyMnYlMjIlM0ElMjJhY3Qud2Vtb3ZlLmV1JTIyJTdEJTJDJTIyaCUyMiUzQSUyMjE0MmI2MjMyMWQ2M2M4MzRmODZmJTIyJTdE');
$result = curl_exec($ch);
//echo $result;

$muid = trim(strip_tags(getstr($result,'"muid":"','"')));
$guid = trim(strip_tags(getstr($result,'"guid":"','"')));
$sid = trim(strip_tags(getstr($result,'"sid":"','"')));
$keys = array(
1 => 'pk_live_dC2mEWCJi3qR2vLZz10crAHK',
); 

$key = array_rand($keys);
$keyStripe = $keys[$key];
//echo $guid;

$rand = substr(sha1(mt_rand()),17,4);
$randm = rand(0000,9999);

$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);  
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);


function generateUUID() {
    $data = random_bytes(16);

    // Set version to 4
    $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
    // Set the variant to RFC 4122
    $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

$generateUUID = generateUUID();



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://webcast.tiktok.com/webcast/room/chat/?aid=1988&app_language=en&app_name=tiktok_web&browser_language=en-GB&browser_name=Mozilla&browser_online=true&browser_platform=Win32&browser_version=5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F129.0.0.0%20Safari%2F537.36%20Edg%2F129.0.0.0&channel=tiktok_web&content=Hi&cookie_enabled=true&data_collection_enabled=true&device_id=7329362107756267014&device_platform=web_pc&emotes_with_index=&focus_state=true&from_page=user&history_len=5&is_fullscreen=false&is_page_visible=true&os=windows&priority_region=&referer=https%3A%2F%2Fwww.tiktok.com%2Fforyou%3Flang%3Den&region=DZ&room_id=7422062875286375186&root_referer=https%3A%2F%2Fwww.tiktok.com%2F&screen_height=864&screen_width=1536&tz_name=Europe%2FBerlin&user_is_login=true&verifyFp=verify_m1vci3jj_VxTDJhfR_8LmK_4gI1_BHsK_bGE7MgxE7v6Z&webcast_language=en&msToken=EH5mrAey3YKKZv1q7BvXWxzprj5ptC6hDOhGL4Jmr8MYDc2V_RPTKw7JgHiT4TZkgY48ePBOtbPqhajvHHhLUXpN1jKfc5U5VJIHZZePfMoKBIeJfIMtxSIsQTfrXS9bfn-_4_ZRE9eZuSq4AxC7hBE=&X-Bogus=DFSzswVLCwGANtiqtBwS-ShPmk3C&_signature=_02B4Z6wo000018.k84gAAIDDvDmxKTblHf.P5PcAAJUCe5');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-GB,en;q=0.9,en-US;q=0.8';
$headers[] = 'Content-Length: 0';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Cookie: tt_csrf_token=2cQQFgdb-RidN36qSRSJPqVzDqCTxDhQPe6g; tt_chain_token=2ZrkNcBgsoMb5kL2z8MRNg==; ak_bmsc=CFB9D9B24E064C640539E907E481E35A~000000000000000000000000000000~YAAQhJQQApKyNFKSAQAAkV7SWRnBMOxDAWg80NSnvCZ7Z3L1+kC02OAaGHeQVxs3XcJONmb+VxzRm/LLxPBR4fr5M2tkuiN+JpAU8UjkF+37D7cWvbODT4BESVt6bnht0BSAKRkdNLmsEFmh2NmHq2akeKhrth8vEsIKqxUhbcLQDvcmI9iHpyr9gAYjS1MiH+AzJ5C7PerAPpQcgwPfhKfy3kjmcHf74MC+SDUJqEWpBTSmQlVjD69xp1FD28dwWHFOcHtBE81tSXBKcVqwnA/AmP67F4WRqwcMBp68o9EML3uuSSUI65IeJ+GRARlfWs7QKq2vq+saufPEXbMS2mMr3TjaHbWNcTo36ZxE+rwD57z5J/7fYqZGv6msP3YQ/rGJqPS9rbG+aJE=; passport_csrf_token=b391e9419e13500168a24ed805401a8e; passport_csrf_token_default=b391e9419e13500168a24ed805401a8e; s_v_web_id=verify_m1vci3jj_VxTDJhfR_8LmK_4gI1_BHsK_bGE7MgxE7v6Z; multi_sids=7422063460249633798%3Ae28253fa7e8c43af8fe80f59e8eba6e3; cmpl_token=AgQQAPMvF-RO0rc-mcM4pN0__9a5MrCaf4SkYNThgQ; passport_auth_status=bb6aa53b6b52fdc7dfc4d934652c3cea%2C; passport_auth_status_ss=bb6aa53b6b52fdc7dfc4d934652c3cea%2C; sid_guard=e28253fa7e8c43af8fe80f59e8eba6e3%7C1728083860%7C15552000%7CWed%2C+02-Apr-2025+23%3A17%3A40+GMT; uid_tt=817ebda998a364bdd4b2c892c0e89fadb3e92dddb9a86c829f8f8998d393334e; uid_tt_ss=817ebda998a364bdd4b2c892c0e89fadb3e92dddb9a86c829f8f8998d393334e; sid_tt=e28253fa7e8c43af8fe80f59e8eba6e3; sessionid=e28253fa7e8c43af8fe80f59e8eba6e3; sessionid_ss=e28253fa7e8c43af8fe80f59e8eba6e3; sid_ucp_v1=1.0.0-KGU2YjQ2OTIxYzUyMjA0ZDgzMzM2OGJiNmRlMmM4NmUxODNmNWY1N2QKIQiGiNiEy-ydgGcQlO-BuAYYswsgDDCT74G4BjgIQBJIBBADGgZtYWxpdmEiIGUyODI1M2ZhN2U4YzQzYWY4ZmU4MGY1OWU4ZWJhNmUz; ssid_ucp_v1=1.0.0-KGU2YjQ2OTIxYzUyMjA0ZDgzMzM2OGJiNmRlMmM4NmUxODNmNWY1N2QKIQiGiNiEy-ydgGcQlO-BuAYYswsgDDCT74G4BjgIQBJIBBADGgZtYWxpdmEiIGUyODI1M2ZhN2U4YzQzYWY4ZmU4MGY1OWU4ZWJhNmUz; store-idc=maliva; store-country-code=dz; store-country-code-src=uid; tt-target-idc=useast1a; tt-target-idc-sign=bAVxrfjar6tpVvNh_Ldr9Ao7hdH8IdyTnukn5B14NxXyTzqnLQglZkwWgjkBfbM-1B7Yr6XGtLtq0WevyVlwpZD8-FJa3Fj0KWtmCbNaD5-acOOqAh9JEKJNUSXBZY54EXDzA3QWrrjL_4bVvbxBbwGMt9MDjrRraGR-f2WpOp-Q0ULWuko1wBX6WG_zxdXw8Vb01zkktUfvBIhpYzeCdJI0FSYsnXmgMxyX3BJYfk9saX2F5P670vAaGnZ3N-1cSpF5uLAp6yOsYmx_GulpZRJL5TS6CQeC6_rFhhHZdlMzvcCPLKDwUoVW80ha0dlQ764Y18YWAG1Nzq5UanCWfeK4MwfAaayZTl59wJF_7qhg6pmwZvki27QlHgXCqj2ECvFNEXqWgjSDLq6UHuU-MUe866vdXOcFybPgfc-O3LstxGltnAA-8G0hdmIlBkouEE5C3g96JM9stFHWkOWiqlmfouCEunebQCzhpOqhhy9XksuEFLx0YMnMagW6tVVK; odin_tt=cad69568cd488a0be56e1e49b305009bcd639845566ec16c6c5ae187bb22337c10b79281721bc8a45b3a4d246f966f50074188b9bd8bccaf48e5fbecdcf225ef920e918d0048d6103e18c233d51af56e; ttwid=1%7Cg2yW1N94qKOjNM0nxb8oODdtyKaT3DcJcYebICGVhOc%7C1728083874%7C04dc80347dd0ddbf7d14b89027e9964db0e5739e809645490efc709f0557ef95; csrfToken=834wgaSM-QpBWRKl5pBGOPIWNlUo8kaTsX_8; csrf_session_id=75ce738a7d596046c8d6c30f0d0a6754; bm_sv=DD2B678D49B0C8F10155F6ABE4570BCC~YAAQhJQQAgG4NFKSAQAAeYXTWRmcLDEcaYrsNTQ/e+3leRVfQo8KMUy4+4dg0U1yAwX59A9sQGA+f9MFVU5NC2dZqwQWxTpjzav7M8sxR+4tIDbIFd2Cl/RR7hel9RHXD4WD+Kw53LfZz+XOfhQJyi7h31epX98Arlse7WnrZEEMLJ/uzc2ECDN2LjnOuxKnyALHzmufcrmui4Hm0SnYwbN5sdAMYIRfv8fXyPl0VN8a305wHTjZ7okjDgxdKc0s~1; msToken=ZYFik0Pfpz_NqZmqhRdU_sOF1V1vZ-f8yxpY4Ta5xue_S_x2SAwnD0dPsDv2Hvy96UVWSSxzIvBB8kmOBp5i_Yoqhl5iqKiqT9unAjJ1tq2ogJnqFImC_yV588vD9tTe_vyMGCc_xEUtzHI6XjBakkY=';
$headers[] = 'Origin: https://www.tiktok.com';
$headers[] = 'Priority: u=1, i';
$headers[] = 'Referer: https://www.tiktok.com/';
$headers[] = 'Sec-Ch-Ua: \"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Tt-Ticket-Guard-Client-Data: eyJ0c19zaWduIjoidHMuMS44NjdkZTc2YzIwYTFiOTZkODU5MmRmYjZiNmZhMjIzZGE1ZjYwZGJmMGM2NjI5ODZjOGYzYWU4MjFmNzcxZjE4MGU3MGI0YmRhODJjMTM4MzZlNWNmYTE4Mzk0ZDcwMjQwZjhhZjE2MzFmMTY1YWU5NjAxMjJlZWZmZDQ1MzNkZCIsInJlcV9jb250ZW50IjoidGlja2V0LHBhdGgsdGltZXN0YW1wIiwicmVxX3NpZ24iOiJNRVlDSVFEd1FjNXhjUkJTMlVjZW80b2dDK29TS0FCTmRTNTloVG1NK3AvSWhkdWUyQUloQU9JS2tYa20rNDFSeGRXRkJwdDlMSEU1UkJJMmw2c3M2Z1RYQlcwT3g2ejEiLCJ0aW1lc3RhbXAiOjE3MjgwODM5Njh9';
$headers[] = 'Tt-Ticket-Guard-Iteration-Version: 0';
$headers[] = 'Tt-Ticket-Guard-Public-Key: BHQUPnlUKZudDN9266w7unseySJaKv9B7Nr8P0szuEB9AuK0GvZRLI0SVww4Y9zpj4q+GqouAsffu4idl+AeFSE=';
$headers[] = 'Tt-Ticket-Guard-Version: 2';
$headers[] = 'Tt-Ticket-Guard-Web-Version: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0';
$headers[] = 'X-Secsdk-Csrf-Token: 0001000000018c59cb868fed66cc239e512e735634ee0f9da20fe1bc31b3aba62577f9a23f6217fb6322c9d78f20,75ce738a7d596046c8d6c30f0d0a6754';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result1;



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mcs-va.tiktokv.com/v1/list');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "[{\"events\":[{\"event\":\"web_tt_ticket_guard_consumer_response\",\"params\":\"{\"_staging_flag\":0,\"sdk_version\":\"0.1.16\",\"self_platform\":\"web\",\"init_type\":\"pubKey\",\"sign_type\":\"pubKey\",\"params_for_special\":\"tiktok_account_login\",\"logid\":\"20241004231928B6F6DAA68F5ECCE3FF52\",\"path\":\"/webcast/room/chat/\",\"ticket_guard_version\":2,\"ticket_guard_iteration_version\":0,\"request_with_csr\":0,\"request_with_cert\":0,\"request_with_client_data\":1,\"error_code\":\"-99\",\"login_status\":\"1\",\"sign_version\":\"0\",\"cookie_status\":\"0\",\"data_from\":\"1\",\"cookie_crypt\":\"0\",\"iframe_status\":\"0\",\"match_md5_local\":\"-99\",\"match_md5_iframe\":\"-99\",\"is_pubkey_ts_sign\":\"1\",\"iframe_connection\":\"-99\",\"iframe_retrycount\":\"-99\",\"lost\":\"0\",\"init_match\":\"0\",\"is_new_cert\":\"0\",\"hostname\":\"www.tiktok.com\",\"cookie_domain\":\"3\",\"event_index\":1728084487129}\",\"local_time_ms\":1728083968856,\"is_bav\":0,\"session_id\":\"96ba5692-2046-42c8-864c-7ba5f3859188\"}],\"user\":{\"user_unique_id\":\"7329362107756267014\",\"user_id\":\"7329362107756267014\",\"device_id\":\"7329362107756267014\",\"web_id\":\"7126634413071513431\"},\"header\":{\"app_id\":1233,\"os_name\":\"windows\",\"os_version\":\"10\",\"device_model\":\"Windows NT 10.0\",\"language\":\"en-GB\",\"platform\":\"web\",\"sdk_version\":\"5.2.8_oversea\",\"sdk_lib\":\"js\",\"timezone\":2,\"tz_offset\":-7200,\"resolution\":\"1536x864\",\"browser\":\"Microsoft Edge\",\"browser_version\":\"129.0.0.0\",\"referrer\":\"https://www.tiktok.com/foryou?lang=en\",\"referrer_host\":\"www.tiktok.com\",\"width\":1536,\"height\":864,\"screen_width\":1536,\"screen_height\":864,\"tracer_data\":\"{\"$utm_from_url\":1}\",\"custom\":\"{}\"},\"local_time\":1728083968,\"verbose\":1}]");

$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: en-GB,en;q=0.9,en-US;q=0.8';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Origin: https://www.tiktok.com';
$headers[] = 'Priority: u=1, i';
$headers[] = 'Referer: https://www.tiktok.com/';
$headers[] = 'Sec-Ch-Ua: \"Microsoft Edge\";v=\"129\", \"Not=A?Brand\";v=\"8\", \"Chromium\";v=\"129\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
echo $result;

if(strpos($result, 'brandCode')) {

      saveCVV ("Live CVV -> $lista");
 {

    echo '<span class="badge badge-success">#Approved</span> ⭐ </span> <span class="badge badge-success">'.$lista.'</span> ⭐ <span class="badge badge-info">  • sᴛᴀᴛᴜs⇾ </span> <span class="badge badge-info"> Card Is Live</span> ⭐ </span> <span class="badge badge-info">• ɢᴀᴛᴇᴡᴀʏ⇾ Braintree Auth</span> </br>';
}

elseif(strpos($result1, 'success')) {

    echo '<span class="badge badge-success">#Approved</span> ⭐ </span> <span class="badge badge-success">'.$lista.'</span> ⭐ <span class="badge badge-info">  • sᴛᴀᴛᴜs⇾ </span> <span class="badge badge-info"> Card Is Live - CHARGED 🤑🤑🤑</span> ⭐ </span> <span class="badge badge-info">• ɢᴀᴛᴇᴡᴀʏ⇾ Braintree Auth</span> </br>';
}
else {
    echo '<span class="badge badge-danger">#Declined</span> ⭐ </span> <span class="badge badge-info">'.$lista.'</span> ⭐ <span class="badge badge-info">  • sᴛᴀᴛᴜs⇾ </span> <span class="badge badge-danger">Card Declined </span> </span> ⭐ <span class="badge badge-info">• ɢᴀᴛᴇᴡᴀʏ⇾ Braintree Auth</span> </br>';
}


   curl_close($ch);
  ob_flush();


?>




