echo "** Hey, Azzrael Youtube viewers!!!"
ffmpeg.exe  -f lavfi -i color=c=#ffe4b5:s=1920x1080 -loop 1 -i 1.jpg -s "1920x1080" -t 5 -filter_complex "[1:v]scale=1920:-40[fg], [0:v][fg]overlay=y=-'t*((h-1080)/100)':eof_action=endall" -y out.mp4
pause