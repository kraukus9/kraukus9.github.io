<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test Flight</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dashjs/4.4.1/dash.all.debug.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <style>
        video {
            width: 100%;
        }
    </style>
<?php // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$auth = file_get_contents("../files/tokens/selecttv-auth.txt");
$token = file_get_contents("../files/tokens/selecttv-token.txt");
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-services.freecast.com/live/api/v5/web/packages/value/channels/sc-414723/streams/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api-services.freecast.com';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Authorization: Bearer $auth';
$headers[] = 'Origin: https://watch.freecast.com';
$headers[] = 'Referer: https://watch.freecast.com/';
$headers[] = 'Sec-Ch-Ua: ^^.Not/A)Brand^^\";v=^^\"99^^\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sotalcloud-Token: $token';
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
//echo $str_arr[61];
//echo $str_arr[71];
print_r $headers;
?>

  <?php echo $str_arr[71]; ?>
</body>
</html>
