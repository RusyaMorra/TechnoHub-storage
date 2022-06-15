
ffmpeg.exe   -i 1.jpg  -i video2.mp4  -i audio.mp3  -f lavfi -i color=c=gray:s=1920x1080 -s "1920x1080" -t 5  -filter_complex "[1:v:0]chromakey=0x000000:0.01:0.3[vuhod1];[0:v:0][vuhod1]overlay[vuhod2]"  -map [vuhod2]:v -map 2:a -shortest    out.mp4 -vf scale=1920x1080    
pause


