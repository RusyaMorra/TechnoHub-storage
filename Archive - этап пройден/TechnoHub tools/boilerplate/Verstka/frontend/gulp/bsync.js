const browserSync  = require('browser-sync').create();         //Добавляем автообнавление браузера
const path = require('./path/path');
const serverPath = path.path.src.root;
//Функция  авто обнавления браузера
module.exports = {
  browsersync: function (){
   browserSync.init({
       server: {
           baseDir: serverPath  //Основная директория

       },
       browser: 'chrome.exe',
       notify: false,

   });

   }
}
