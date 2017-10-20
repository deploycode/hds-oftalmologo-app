function vidplay() {
   var video = document.getElementById("Video1");
   var button = document.getElementById("play");
   if (video.paused) {
      video.play();
      button.textContent = "||";
   } else {
      video.pause();
      button.textContent = ">";
   }
}
