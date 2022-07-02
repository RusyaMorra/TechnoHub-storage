//Подключаем плагины и сохраняем их в переменной const
   const {src, dest, watch, parallel, series } = require('gulp');      //Добавляем Gulp src и Watch dest parallel
   const scss              = require('gulp-sass');                     //Добавляем scss
   const concat            = require('gulp-concat');                   //Добавляем конкатинацию
   const uglify            = require('gulp-uglify-es').default;        //Добавляем плагин uglify
   const autoprefixer      = require('gulp-autoprefixer');             //Добавляем Вендорные префиксы
   const imagemin          = require('gulp-imagemin');                 //Плагин для сжатия картинок
   const del               = require('del');                           //Добавляем плагин чистки dist
   const babel             = require('gulp-babel');                    //babel
   const pug               = require('gulp-pug');                      //pug
   const browserSync  = require('browser-sync').create();         //Добавляем автообнавление браузера






   const tasks =   require('./gulp/bsync');
   const browsersync = tasks.browsersync;



    // tasks.forEach((taskPath) => {
	//     require(taskPath);
    // })





    //Функция копиляции pug
    function pugCompile(){
        return src('app/*.pug')
        .pipe(
            pug({
                pretty:true
            })
        )
        .pipe(dest('app/'));
    };



    //Функция что бы чистить dist папку
    function cleanDist(){
       return del('dist')


    }

    //Функция сжатия картинок
    function images(){
       return src('app/assets/images/**/*') //Путь из
       .pipe(imagemin(
           [
               imagemin.gifsicle({interlaced: true}),
               imagemin.mozjpeg({quality: 75, progressive: true}),
               imagemin.optipng({optimizationLevel: 5}),                   // Оптимизация
               imagemin.svgo({
                   plugins: [
                       {removeViewBox: true},
                       {cleanupIDs: false}
                   ]
               })
           ]
       ))
       .pipe(dest('build/assets/images'))    //Путь в

    }


    //Функция для js
    function scripts(){
       return src('app/js/index.js')  //От куда берем...

       .pipe (babel ({
        presets: ['@babel/env']    //bable
        }))
       .pipe(concat('bandle.min.js')) //Конкатинируем
       .pipe(uglify())                //Что делаем(сжимаем)(минифицируем)
       .pipe(dest('app/js'))          //Куда ложем
       .pipe(browserSync.stream())    //Стриминг
    }







   //Функция обработки css
   function styles(){
       return src('app/scss/main.scss')                      //От куда берем...
           .pipe(scss({outputStyle: 'compressed'}))           //Что делаем(сжимаем)
           .pipe(concat('style.min.css'))                     //Конкатинируем
           .pipe(autoprefixer({
               overrideBrowserslist: ['last 10 version'],     // Для 10 последних версий
               grid:true
           }))
           .pipe(dest('app/css'))                             //Куда ложем
           .pipe(browserSync.stream())                        //Стриминг

   }


   //Билдим все в dist
   function build(){
       return src([
          'app/css/style.min.css',     //путь из
          'app/assets/fonts/**/*',     //путь из
          'app/js/bandle.min.js',      //путь из
          'app/*.html'                 //путь из
       ], {base:'app'}) // тянем папки за собой
       .pipe(dest('build')) //путь в
   }



    //Слежение за изменениями
    function  watching(){
       watch(['app/scss/**.scss'], styles);                       // слежение за всеми файлами scss
       watch(['app/components/**/*.scss'], styles);                       // слежение за всеми файлами scss
       watch(['app/js/index.js', '!app/js/script.min.js'], scripts);   // слежение за всеми файлами js
       watch(['app/*.pug']).on('change', browserSync.reload);      // отслеживание Html или pug
    }


   exports.styles      = styles;      //Некий output функции стилей
   exports.pugCompile  = pugCompile;  //Некий output функции pug
   exports.watching    = watching;    //Некий output функции слежения
   exports.browsersync = browsersync; //Некий output функции обновления браузера
   exports.scripts     = scripts;     //Некий output функции скриптов
   exports.images      = images ;     //Некий output Картинок
   exports.cleanDist   = cleanDist;   //Некий output чистки диста


   exports.build       = series(cleanDist, images, build) ;                      //Некий output билда
   exports.default     = parallel(pugCompile, styles, scripts, browsersync, watching);  //Запускаем паралельно
