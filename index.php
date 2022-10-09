<html>
<head>
<script>
<?php 
    $videolar_ad=array();
    $ilk="";
    $videolar_klasor=opendir("videolar");
    while($video=readdir($videolar_klasor)) {
        if($video!="."&&$video!="..")
        {
            if($ilk == "")
        {
            array_push($videolar_ad,$video);
            shuffle($videolar_ad);
        }
else
{
    array_push($videolar_ad,$video);
    shuffle($videolar_ad);
}
}
}
closedir($videolar_klasor);
$toplam=count($videolar_ad);
$son= $toplam-1;
$dosyalar="var videos=new Array(";

for($sira=0;$sira<$toplam; $sira++)
{
    $video_ad= "videolar/". $videolar_ad[$sira];
    if($sira!=$son) 
    {
        $dosyalar_ek="\"".$video_ad."\",";
    }
    else
    {
        $dosyalar_ek="\"".$video_ad."\");";
    }
    $dosyalar.=$dosyalar_ek;
}
echo $dosyalar ?>


    var currentVideo = 0;
     
function nextVideo() {

    videoPlayer = document.getElementById("play-video")

    videoPlayer.removeEventListener('ended',nextVideo,false);
    
    videoPlayer.src = videos[currentVideo];
    videoPlayer.play()
    
    currentVideo = (currentVideo + 1) % videos.length
    
    videoPlayer.addEventListener('ended', nextVideo,false); 
}

function ooops() {
    console.log(document.getElementById("play-video").error.code)
}
</script>
    </head>

    
    <body> 
<div class="video-player">
    <video  class="videom" id="play-video" controls autobuffer id="backgroundvid"></video>
</div>  
<script>
    document.getElementById("play-video").addEventListener('error', ooops,false);

        function ooops() {
            console.log(document.getElementById("play-video").error)
        }
    
    nextVideo()
    var elem = document.getElementById("video-player");
if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) {
  elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) {
  elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) { 
  elem.msRequestFullscreen();
}
</script>
</body>
</html>
