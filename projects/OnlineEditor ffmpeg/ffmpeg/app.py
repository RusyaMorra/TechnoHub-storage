#!
#!c:/Users/comp/AppData/Local/Programs/Python/Python38/python.exe
# -*- coding: utf-8 -*

import os
 
lpi = 3 # прододжительность каждого эффекта
effects_count = 3 # всего эффектов
(w,h) = (1920,1080) # высота ширина клипа





# готовлюсь читать данные из директории
sep  = os.path.sep
dataIDuser = f"{os.getcwd()}{sep}data{sep}users{sep}"
listId = []
for filename in  os.listdir(dataIDuser):
    
    listId.append(filename) 
    
lastID = listId[len(listId)-1]
footages = f"{os.getcwd()}{sep}data{sep}footages{sep}memory{sep}"
data_dir = f"{os.getcwd()}{sep}data{sep}users{sep}{lastID}{sep}"
data_dir_img = f"{os.getcwd()}{sep}data{sep}users{sep}{lastID}{sep}img{sep}"
out_file = f"{os.getcwd()}{sep}data{sep}users{sep}{lastID}{sep}result{sep}out.mp4"





# текстовки футаж
with open(f"{data_dir}userData{sep}userDatafootage.txt", 'r', encoding='utf8') as f:  
    footageName = f.read()

# текстовки музыка
with open(f"{data_dir}userData{sep}musicData.txt", 'r', encoding='utf8') as f:  
    musicData = f.read()

# текстовки
with open(f"{data_dir}text{sep}text.txt", 'r', encoding='utf8') as f:  
    texts = f.read().splitlines()
 




# картинки
images = [f"{data_dir_img}{i}" for i in os.listdir(data_dir_img) if i.endswith(".jpg") or i.endswith(".png")]
 
images_count = len(images) # количество картинок
texts_count = len(texts) # количество строк текста
clip_length = images_count * lpi * effects_count # общая длина клипа зависит от колва картинок, продолжительности каждого эффекта и колва эффектов
text_length = clip_length // texts_count # продолжительность показа каждого куска текста



 
'''
Основной цикл формирования анимации картинок
'''
animation = []
overlays = ""
for i in range(0,images_count):
    # timestamp старта анимации текущей картинки
    tst = i * (effects_count * lpi) #допустим если i = 0 будет 0     если i = 1 будет 9      если i = 2 будет 18 итд
    # сначала в инпутах у меня белый фон, затем звуковая дорожка и видео, соотв. картинки начинаются после них
    input_num2 = i + 3
    footagestream = 2
   
    # animation effects
    # animation.append(f"[{footagestream}:v:0]chromakey=0x000000:0.01:0.3[footageon];[{input_num2}:v:0][footageon]overlay[{input_num2}]")
    # увеличенную картинку вписываем в высоту
                                                            #  0     0  +  3=3       3080
    animation.append(f"[{input_num2}]scale=-1:'if(between(t, {tst}, {tst + lpi}), {h * lpi} - (t - {tst + 1})*{h}, 1)':eval=frame[i1{input_num2}]")
    # показываем картинку вписанную в высоту экрана
    animation.append(f"[{input_num2}]scale=-1:'if(between(t, {tst + lpi}, {tst + 2 * lpi}), {h},1)':eval=frame[i2{input_num2}]")
    # увеличиваем картинку назад
    animation.append(f"[{input_num2}]scale=-1:'if(between(t, {tst + 2 * lpi}, {tst + 3 * lpi}), {h} + {h *4/ lpi}*(t-{tst + 2 * lpi}) , 1)':eval=frame[i3{input_num2}]")
 
    # объединяем анимации наложением
    # overlays += f",[{footagestream}:v:0]chromakey=0x000000:0.01:0.3[footageon],[{input_num2}:v:0][footageon]overlay[{input_num2}]"
    overlays += ",[0]" if i == 0 else f"[b{input_num2-1}],[b{input_num2-1}]"
    overlays += f"[i1{input_num2}]overlay=(W-w)/2:(H-h)/2[x{input_num2}1]"
    overlays += f",[x{input_num2}1][i2{input_num2}]overlay=(W-w)/2:(H-h)/2[x{input_num2}2]"
    overlays += f",[x{input_num2}2][i3{input_num2}]overlay=(W-w)/2:(H-h)/2"
    #overlays += f"[{footagestream}:v:0]chromakey=0x000000:0.01:0.3[footageon],[{input_num2}:v:0][footageon]overlay[{input_num2}]"
 
text_filters = ""
# для каждой строки текста из файла будет свой drawtext со своей анимацией
for i, text in enumerate(texts):
    # текст строки + стилизация
    drawtext = f",drawtext=text='{text}':font=Arial:fontsize=70:fontcolor=#FFFFFF"
    drawtext += f":y=H - {texts_count - i+1}*50" # прижимаем блок текста вниз, но каждая строка будет на новой строке
    # анимация выкатывания строки
    drawtext += f":x='if(between(t, {i*text_length}, {(i+1)*text_length}), (W - (t - {i*text_length})*( (w - 100)/{text_length})), 100)'"
    # скрываем текстовки пока не начали выкатывать
    drawtext +=  f":enable='between(t, {i*text_length}, {clip_length})'"
    # добавляем drawtext текущего текста к фильтрам
    text_filters += drawtext
 
filters = ",".join(animation) + overlays + text_filters + f"[end],[{footagestream}:v:0]chromakey=0x000000:0.01:0.3[footageon],[footageon]scale=-1:1080[footageon2],[end][footageon2]overlay=(W-w)/2:(H-h)/2[end2]"  
print(filters)

#exit()
# / с фильтрами закончили
 
'''
Собираю ffmpeg
'''
cmd = f"ffmpeg  -f lavfi -i color=c=gray:s={w}x{h} " # белый фон
cmd += f"-i {data_dir}music{sep}{musicData}"
cmd += f" -i {footages}{footageName} -loop 1   "
cmd += " ".join([f"-loop 1 -i {i}" for i in images]) + " " # массив входных картинок
cmd += f"-t {clip_length} "
cmd += f"-filter_complex \"{filters}\" "
cmd += f"-map [end2]:v -map 1:a -shortest "
cmd += f"-y {out_file}"
 
print(cmd) # вывод подготовленной команды
os.system(cmd) # выполняю
#os.system(r'"C:\Program Files\VideoLAN\VLC\vlc.exe" ' + out_file) # для удобства под виндой
