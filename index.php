<?php // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-services.freecast.com/live/api/v5/web/packages/value/channels/sc-385007/streams/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api-services.freecast.com';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjU4NzY3OTI1LCJqdGkiOiIwNDkyYzg2NTZjYTk0ODRlOWI5MzgyMmVlZmM1Mjg2YyIsInVzZXJfaWQiOjQxNTA5N30.bJkj5mTP3FygNix_utVvUDSncYrFPT0-VlGKj1w2RZU';
$headers[] = 'Origin: https://selecttv.freecast.com';
$headers[] = 'Referer: https://selecttv.freecast.com/';
$headers[] = 'Sec-Ch-Ua: ^^.Not/A)Brand^^\";v=^^\"99^^\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sotalcloud-Token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjdlNDVrNG1qTlcyVm5XZEhMV2NPQTBXSE1ybFlEZXU1In0.To9pY-N0_XWBUNpFPbKZCKV23VbUSP7H515g9eM3Fsw';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
// Replaces all "quotations" with random code
$replace = str_replace('"', 'KKK1', $result);
// Explodes in to array by random code
$str_arr = explode ("KKK1", $replace); 
//print_r($str_arr);
echo $str_arr[61];
echo $str_arr[61];
?>
