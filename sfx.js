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
