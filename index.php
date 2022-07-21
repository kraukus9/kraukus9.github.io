    <video-js id="my_video_1" class="vjs-default-skin" controls preload="auto" width="100%" height="100%"> </video-js>

    <link href="//vjs.zencdn.net/7.2/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.2/video.min.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming@1.3.0/dist/videojs-http-streaming.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/videojs-contrib-eme@4.0.1/dist/videojs-contrib-eme.cjs.min.js"></script>

    <script>
        var player = videojs('my_video_1');
        player.eme();
        player.src({
            src: 'https://335dd25271c94a6ba41bcd92f1a63ce4.mediatailor.us-east-1.amazonaws.com/v1/dash/9d062541f2ff39b5c0f48b743c6411d25f62fc25/freecast-DRM6-SC/14254100/content/m.mpd?ads.vast_id=670340&session_ticket=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVKbXBzbnBMTkd3MGZpMlJLdWtrIiwiaXNzIjoiY29udGVudHNlcnZlciIsInNjcCI6eyJyc2MiOnsiZGlzdHJpYnV0aW9uOmlkIjoiMTQyNTQxMDAifSwiYWN0IjpbImRpc3RyaWJ1dGlvbjpzZXJ2ZSJdfSwiZXhwIjoxNjU4MzY2NTU4fQ.2w-8GujPKJ64WuMaQhD4Fg7V7GwfzHvo84M3iwlGakM',
            type: 'application/dash+xml',
            keySystems: {
                'com.widevine.alpha': 'https://discovery-freecast.sotalcloud.com/sdp/v2/assets/385007/wv-license?session_ticket_id=UJmpsnpLNGw0fi2RKukk'
            }
        });
    </script>