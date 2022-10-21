<html>
  <head>
    <title>Hls.js demo - basic usage</title>
  </head>

  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.5.14/hls.min.js"></script>

    <center>
      <h1>Hls.js demo - basic usage</h1>
      <video height="100%" width="100%" id="video" controls></video>
    </center>

    <script>
var video = document.getElementById('video');
      if (Hls.isSupported()) {
        var hls = new Hls({
          debug: true,
        });
        hls.loadSource('https://nesnhd.akamaized.net/hls/live/2093906/nesnhd/master.m3u8');
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function () {
          video.muted = false;
          video.play();
        });
      }
    </script>
  </body>
</html>
