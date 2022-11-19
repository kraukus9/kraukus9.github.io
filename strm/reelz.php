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
$auth = file_get_contents("../files/tokens/selecttv-auth.php");
$token = file_get_contents("../files/tokens/selecttv-token.php");
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-services.freecast.com/live/api/v5/web/packages/value/channels/sc-385007/streams/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api-services.freecast.com';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNjY4ODMwOTc4LCJqdGkiOiIyMGE2MDgxMTYxNTA0MmQ3OTgxZGQxN2ZlZjYxOTc0NSIsInVzZXJfaWQiOjQ1NjI0MH0.J1oDWnuEVbuXRRcZpHIxFOfcFVmsh0n_CRxH3oj4-aE';
$headers[] = 'Origin: https://watch.freecast.com';
$headers[] = 'Referer: https://watch.freecast.com/';
$headers[] = 'Sec-Ch-Ua: ^^.Not/A)Brand^^\";v=^^\"99^^\",';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sotalcloud-Token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6InRQQ1lkUXlHYXhBV1drRU9hZXdkMHNnUUo5Zk9PY2ZRIn0.hMDFUIjiiWO3kZL7wGVKXp6FlzNjSDNtz9dUfdCkEtQ';
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
?>
<script>
    function init() {
        var protData = {
            "com.widevine.alpha": {
                "serverURL": "<?php echo $str_arr[71]; ?>",
                priority: 0
            }
        };
        var video,
            player,
            url = "<?php echo $str_arr[61]; ?>";

        video = document.querySelector("video");
        player = dashjs.MediaPlayer().create();
        /* restart playback in muted mode when auto playback was not allowed by the browser */
        player.on(dashjs.MediaPlayer.events.PLAYBACK_NOT_ALLOWED, function (data) {
            console.log('Playback did not start due to auto play restrictions. Muting audio and reloading');
            video.muted = true;
            player.initialize(video, url, true);
        });
        player.initialize(video, url, true);
        player.setProtectionData(protData);
    }

    function check() {
        if (location.protocol === 'http:' && location.hostname !== 'localhost') {
            var out = 'This page has been loaded under http. This might result in the EME APIs not being available to the player and any DRM-protected content will fail to play! ' +
                'If you wish to test manifest URLs that require EME support, then <a href=\'https:' + window.location.href.substring(window.location.protocol.length) + '\'>reload this page under https</a>.'
            var div = document.getElementById('http-warning');
            div.innerHTML = out;
            div.style.display = ''
        }
    }
</script>
</head>
<body>

                <video controls="true"></video>

</main>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        check();
        init();
    });
</script>
<script src="highlighter.js"></script>
</body>
</html>
