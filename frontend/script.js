const song = document.getElementById("first-song");
const pause = document.getElementById("pause");
var audio = new Audio("audio/birds.wav");

song.addEventListener("click", function(e){
    audio.play();
})

pause.addEventListener("click", function(e){
    audio.pause();
})

const song2 = document.getElementById("2nd-song");
const pause2 = document.getElementById("pause2");
var audio2 = new Audio("audio/rain.wav");

song2.addEventListener("click", function(e){
    audio2.play();
})

pause2.addEventListener("click", function(e){
    audio2.pause();
})

const song3 = document.getElementById("3nd-song");
const pause3 = document.getElementById("pause3");
var audio3 = new Audio("audio/crickets.wav");

song3.addEventListener("click", function(e){
    audio3.play();
})

pause3.addEventListener("click", function(e){
    audio3.pause();
})

const song4 = document.getElementById("4nd-song");
const pause4 = document.getElementById("pause4");
var audio4 = new Audio("audio/dry-leaves.wav");

song4.addEventListener("click", function(e){
    audio4.play();
})

pause4.addEventListener("click", function(e){
    audio4.pause();
})

const song6 = document.getElementById("6nd-song");
const pause6 = document.getElementById("pause6");
var audio6 = new Audio("audio/volcano.wav");

song6.addEventListener("click", function(e){
    audio6.play();
})

pause6.addEventListener("click", function(e){
    audio6.pause();
})


const song7= document.getElementById("7nd-song");
const pause7 = document.getElementById("pause7");
var audio7 = new Audio("audio/fish.wav");

song7.addEventListener("click", function(e){
    audio7.play();
})

pause7.addEventListener("click", function(e){
    audio7.pause();
})

const song8= document.getElementById("8nd-song");
const pause8 = document.getElementById("pause8");
var audio8 = new Audio("audio/birdsquak.wav");

song8.addEventListener("click", function(e){
    audio8.play();
})

pause8.addEventListener("click", function(e){
    audio8.pause();
})

const song9= document.getElementById("9nd-song");
const pause9 = document.getElementById("pause9");
var audio9 = new Audio("audio/water.wav");

song9.addEventListener("click", function(e){
    audio9.play();
})

pause9.addEventListener("click", function(e){
    audio9.pause();
})

const song10= document.getElementById("10nd-song");
const pause10 = document.getElementById("pause10");
var audio10 = new Audio("audio/ambience.mp3");

song10.addEventListener("click", function(e){
    audio10.play();
})

pause10.addEventListener("click", function(e){
    audio10.pause();
})