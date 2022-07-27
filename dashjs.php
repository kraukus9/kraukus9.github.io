<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Widevine DRM instantiation example</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dashjs/4.4.1/dash.all.debug.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

    <style>
        video {
            width: 640px;
            height: 360px;
        }
    </style>
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
//echo $str_arr[61];
//echo $str_arr[71];
?>
	<script class="code">	
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
            player.initialize(video, url, true);
            player.setProtectionData(protData);
        }

        function check() {
            if (location.protocol === 'http:' && location.hostname !== 'localhost') {
                var out = 'This page has been loaded under http. This might result in the EME APIs not being available to the player and any DRM-protected content will fail to play. ' +
                    'If you wish to test manifest URLs that require EME support, then <a href=\'https:' + window.location.href.substring(window.location.protocol.length) + '\'>reload this page under https</a>.'
                var div = document.getElementById('http-warning');
                div.innerHTML = out;
                div.style.display = ''
            }
        }
    </script>
</head>
<body>

<main>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <img class=""
                 src="../lib/img/dashjs-logo.png"
                 width="200">
        </header>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert" style="display: none" id="http-warning">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h3>Widevine DRM instantiation example</h3>
                    <p>This example shows how to use dash.js to play streams with Widevine DRM protection. </p>
                    <p>For a detailed explanation on DRM playback in dash.js checkout the
                        <a href="https://github.com/Dash-Industry-Forum/dash.js/wiki/Digital-Rights-Management-(DRM)-and-license-acquisition"
                           target="_blank">Wiki</a>.</p>
                </div>
            </div>
            <div class="col-md-8">
                <video controls="true"></video>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="code-output"></div>
            </div>
        </div>
        <footer class="pt-3 mt-4 text-muted border-top">
            &copy; DASH-IF
        </footer>
    </div>
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
