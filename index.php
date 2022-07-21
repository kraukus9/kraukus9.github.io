<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.11.7/video-js.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.11.7/video.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/videojs-contrib-eme@3.8.0/dist/videojs-contrib-eme.js"></script>

    <title>Test VideJS DRM</title>
</head>
<body>

    <div style="margin: 50px auto;">
        <video id="my-video" class="video-js"></video>
    </div>



    <script>
        
        var player = videojs(
            'my-video',
            {
                controls: true,
                fluid: true,
                html5: {
                    vhs: { 
                        overrideNative: true 
                    }
                }
            },
            function() {
                var player = this;
                player.eme();
                player.src({
                    src: 'https://335dd25271c94a6ba41bcd92f1a63ce4.mediatailor.us-east-1.amazonaws.com/v1/dash/9d062541f2ff39b5c0f48b743c6411d25f62fc25/freecast-DRM6-SC/14254100/content/m.mpd?ads.vast_id=670340&session_ticket=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IlVKbXBzbnBMTkd3MGZpMlJLdWtrIiwiaXNzIjoiY29udGVudHNlcnZlciIsInNjcCI6eyJyc2MiOnsiZGlzdHJpYnV0aW9uOmlkIjoiMTQyNTQxMDAifSwiYWN0IjpbImRpc3RyaWJ1dGlvbjpzZXJ2ZSJdfSwiZXhwIjoxNjU4MzY2NTU4fQ.2w-8GujPKJ64WuMaQhD4Fg7V7GwfzHvo84M3iwlGakM',
                    type: 'application/dash+xml',                    
                    keySystems: {
                      'com.widevine.alpha': 'https://discovery-freecast.sotalcloud.com/sdp/v2/assets/385007/wv-license?session_ticket_id=UJmpsnpLNGw0fi2RKukk',                     
                    }
                });

            
                player.ready(function() {

                    player.tech(true).on('keystatuschange', function(event) {    
                        console.log("event: ", event);        

                    });                        

                });                
            }            
        
        );        


    </script>
</body>
</html>