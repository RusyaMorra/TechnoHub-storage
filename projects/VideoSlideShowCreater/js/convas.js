

var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var video = document.getElementById('video');
var img = document.getElementById("photo");
// set canvas size = video size when known
video.addEventListener('loadedmetadata', function() {
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
});
video.addEventListener('play', function() {
  var $this = this; //cache
  (function loop() {
    if (!$this.paused && !$this.ended) {
     
      ctx.drawImage($this, 0, 0);
      
       
      setTimeout(loop, 1000 / 30); // drawing at 30fps
    }
  })();
}, 0);





const btnSave = document.getElementById('btnSave');
btnSave.addEventListener('click',function(){
   
    canvas.toBlob(function(Blob){
        saveAs(Blob, 'project.png');
    });

});

   



