  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
  var video = document.getElementById('video');
  var img = document.getElementById("photo");
  // ctx.fillStyle = "green";
  // ctx.fillRect(10, 10, 100, 100);
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

   



let video,c1,ctx1,c_tmp,ctx_tmp,convasWrapper; 

function init() {
  video = document.getElementById('video');
 

  //главный конвас 
  c1 = document.getElementById('output-canvas');
  ctx1 = c1.getContext('2d');


  //дополнительный конвас
  convasWrapper = document.getElementById("convasWrapper");
  c_tmp = convasWrapper.createElement('canvas');
  video.addEventListener('loadedmetadata', function() {
    c_tmp.width = video.videoWidth;
    c_tmp.height = video.videoHeight;
  });
  ctx_tmp = c_tmp.getContext('2d');


 

 //event на начало проигрывания видео 
  video.addEventListener('play', computeFrame );
}


function computeFrame() {

  ctx_tmp.drawImage(video, 0, 0, video.videoWidth , video.videoHeight );
  let frame = ctx_tmp.getImageData(0, 0, video.videoWidth , video.videoHeight );

  ctx1.putImageData(frame, 0, 0);
  setTimeout(computeFrame, 0);
}


document.addEventListener("DOMContentLoaded", () => {
  init();
});



//делаем альфаканал

for (let i = 0; i < frame.data.length /4; i++) {
  let r = frame.data[i * 4 + 0];
  let g = frame.data[i * 4 + 1];
  let b = frame.data[i * 4 + 2];

}



if (r > 70 && r < 160 && g > 95 && g < 220 && b > 25 && b < 150) 
   frame.data[i * 4 + 3] = 0;
   


//наложение видео

video2 = document.createElement('video');
video2.src = "fire.mp4"
video2.muted = true;
video2.autoplay = true;



ctx_tmp.drawImage(video2, 0, 0, video2.videoWidth , video2.videoHeight );
let frame2 = ctx_tmp.getImageData(0, 0, video2.videoWidth , video2.videoHeight );



  if (r > 70 && r < 160 && g > 95 && g < 220 && b > 25 && b < 150) 
  {  
      frame.data[i * 4 + 0] = frame2.data[i * 4 + 0];
      frame.data[i * 4 + 1] = frame2.data[i * 4 + 1];
      frame.data[i * 4 + 2] = frame2.data[i * 4 + 2];
  }


function record(canvas, time) {
  var recordedChunks = [];
  return new Promise(function (res, rej) {
      var stream = canvas.captureStream(25 /*fps*/);
      mediaRecorder = new MediaRecorder(stream, {
          mimeType: "video/mp4; codecs=vp9"
      });
      //ondataavailable will fire in interval of `time || 4000 ms`
      mediaRecorder.start(time || 4000);
      mediaRecorder.ondataavailable = function (event) {
          recordedChunks.push(event.data);
           // after stop `dataavilable` event run one more time
          if (mediaRecorder.state === 'recording') {
              mediaRecorder.stop();
          }
      }
      mediaRecorder.onstop = function (event) {
          var blob = new Blob(recordedChunks, {type: "video/mp4" });
          var url = URL.createObjectURL(blob);
          res(url);
      }
  })
}




const recording = record(canvas, 10000)
// play it on another video element
var video$ = document.createElement('video')
document.body.appendChild(video$)
recording.then(url => video$.setAttribute('src', url) )
// download it

var link$ = document.createElement('a')

link$.setAtribute('download','recordingVideo')
recording.then(url => {
link$.setAttribute('href', url)
link$.click()
})
document.body.appendChild(link$)

  

