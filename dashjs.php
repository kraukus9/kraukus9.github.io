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

    <script class="code">
        function init() {
            var protData = {
                "com.widevine.alpha": {
                    "serverURL": "https://drm-widevine-licensing.axtest.net/AcquireLicense",
                    "httpRequestHeaders": {
                        "X-AxDRM-Message": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ2ZXJzaW9uIjoxLCJjb21fa2V5X2lkIjoiYjMzNjRlYjUtNTFmNi00YWUzLThjOTgtMzNjZWQ1ZTMxYzc4IiwibWVzc2FnZSI6eyJ0eXBlIjoiZW50aXRsZW1lbnRfbWVzc2FnZSIsImZpcnN0X3BsYXlfZXhwaXJhdGlvbiI6NjAsInBsYXlyZWFkeSI6eyJyZWFsX3RpbWVfZXhwaXJhdGlvbiI6dHJ1ZX0sImtleXMiOlt7ImlkIjoiOWViNDA1MGQtZTQ0Yi00ODAyLTkzMmUtMjdkNzUwODNlMjY2IiwiZW5jcnlwdGVkX2tleSI6ImxLM09qSExZVzI0Y3Iya3RSNzRmbnc9PSJ9XX19.FAbIiPxX8BHi9RwfzD7Yn-wugU19ghrkBFKsaCPrZmU"
                    },
                    priority: 0
                }
            };
            var video,
                player,
                url = "https://media.axprod.net/TestVectors/v7-MultiDRM-SingleKey/Manifest_1080p.mpd";

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
<script src="../highlighter.js"></script>
</body>
</html>
