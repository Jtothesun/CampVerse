const song = document.getElementById("first-song");
const pause = document.getElementById("pause");
var audio = new Audio("audio/birds.wav");

song.addEventListener("click", function(e){
    audio.play();
})

pause.addEventListener("click", function(e){
    audio.pause();
})