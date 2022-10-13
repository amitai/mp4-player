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


function beep() {
var audio = document.getElementById("beep");
audio.play();
}
function horn() {
var audio = document.getElementById("horn");
audio.play();
}
function laser() {
var audio = document.getElementById("laser");
audio.play();
}
function rewind() {
var audio = document.getElementById("rewind");
audio.play();                                              
var bekind = document.getElementById('play-video');
bekind.pause();
bekind.currentTime = 0;
bekind.load();
}
function gun() {
var audio = document.getElementById("gun");
audio.play();
}
