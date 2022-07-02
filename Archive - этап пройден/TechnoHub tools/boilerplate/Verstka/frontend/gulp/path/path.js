module.exports = {
	path: {
		build: { // Build files
			root: 'build/',   //папка  сборки
			style: 'build/css',  //папка  сборки css
			img: 'build/assets/images',  //папка  сборки картинок
            fonts: 'build/assets/fonts', //папка  сборки шрифтов
			imgFavicons: 'build/images/favicons',
			js: 'build/js',  //папка  сборки js
			zip: 'zip'
		},
		src: { // Source files
            root:'app/',
			pug: 'app/*.pug',
			style: 'app/scss/main.scss',
			img: 'app/assets/images/**/*.+(png|jpg|jpeg|gif)',
			js: 'app/js/index.js',
			fonts: 'app/assets/fonts/**/*',
			resources: 'app/resources/**/*'
		},
		watch: { // Watch files
			json: 'app/data/*.json',
			pug: 'src/**/*.pug',
			style: 'app/scss/**.+(sass|scss)',
            styleComponents: 'app/components/**/*.+(sass|scss)'
		},
		clean: {
			all: './build'
		}
	}
}
