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
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjU4NjA1NzYyLCJqdGkiOiIwODdjNTg1MzYzNjY0YTI4ODE0NWJjYmE3OWI5MmUzYSIsInVzZXJfaWQiOjM5MDg1NX0.GJyzut4Pu-1AVndndADAdBxo2ruQ52WsR9szyIJjxu4';
$headers[] = 'Origin: https://selecttv.freecast.com';
$headers[] = 'Referer: https://selecttv.freecast.com/';
$headers[] = 'Sec-Ch-Ua: ^^.Not/A)Brand^^\";v=^^\"99^^\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sotalcloud-Token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjFGVERoaW5XdVJQbUpuM05QNncwVWdjTFd0TGVTM3pBIn0.tVfu_vt5i4PKLVxuKwOe_Tx2dh8ufaSk3JY5dmnkC6U';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$splitzy = explode (",$result);
echo $splitzy;
?>
