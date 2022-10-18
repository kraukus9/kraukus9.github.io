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
<script>
    function init() {
        var video,
            player,
            url = "https://nesnhd.akamaized.net/hls/live/2093906/nesnhd/master.m3u8";

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
