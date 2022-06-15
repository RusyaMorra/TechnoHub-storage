<?php

function buildFolder(){
   
    $foldersArray = array(
        'folder1' => 'img',
        'folder2' => 'music',
        'folder3' => 'result',
        'folder4' => 'text',
    );

    if (!file_exists('ffmpeg/data/users/ID' . get_last_id()['id'])) {
    $build =  mkdir('ffmpeg/data/users/ID' . get_last_id()['id'], 0777, true);
        if (file_exists('ffmpeg/data/users/ID' . get_last_id()['id'])) {
            foreach($foldersArray as $folder){

                mkdir('ffmpeg/data/users/ID' . get_last_id()['id'] . '/' . $folder, 0777, true);
            }
            $textData = get_last_id()['text'];
            file_put_contents('ffmpeg/data/users/ID'. get_last_id()['id'] . '/text' . '/text.txt', $textData);
        }
    } 
}








