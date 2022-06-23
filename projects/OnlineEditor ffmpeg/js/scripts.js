	//input files img and music

	let inputs = document.querySelectorAll('.input__file');
	Array.prototype.forEach.call(inputs, function () {
	});
	//console.dir( inputs);
	let resvalidate = document.querySelector('.result-massage'); //текст валидации
	let label = inputs[0].nextElementSibling,//инпуты
		labelVal = label.querySelector('.input__file-button-text').innerText;// текст на кнопке типо файла: 3
    
 
	let resvalidateaudio = document.querySelector('.result-massage-audio'); //текст валидации
	let label2 = inputs[1].nextElementSibling,//инпуты
		labelVal2 = label2.querySelector('.input__file-button-text-audio').innerText;// текст на кнопке типо файла: 3
	
		
		
	//дефолтный цвет кнопок и состояние не активности 
	let btn1 = document.querySelector('.input__file-button'); 
	let btn2 = document.querySelector('.cl-change'); 
	let btn3 = document.querySelector('.music-btn-col'); 
	let resbtn = document.querySelector('.res-btn'); 
		
	btn1.style.backgroundColor = 'rgba(255, 140, 0, 0.5)';
	btn2.style.backgroundColor = 'rgba(255, 140, 0, 0.5)';
	btn3.style.backgroundColor = 'rgba(255, 140, 0, 0.5)';
	resbtn.style.backgroundColor = 'rgba(161, 161, 161, 0.5)';
    inputs[0].setAttribute('disabled', 'disabled');
    inputs[1].setAttribute('disabled', 'disabled');
    resbtn.setAttribute('disabled', 'disabled');

   //or grab it by tagname etc
  

	// my-script.js ищем внутренний номер элемента для того что бы подставлять под него футажи
	setTimeout(() => {
		let dots = document.querySelector('.slick-dots');
		// навание кнопок
		 document.querySelector('.slick-prev').innerText = 'Назад';
		 document.querySelector('.slick-next').innerText = 'Далеее';
		
        
		//категория в память
		//сдесь добавим превью на ячейки выбора 0
		
		dots.children[0].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[0].children[0].style.backgroundPosition = 'center';
		dots.children[0].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[0].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 1
	
		dots.children[1].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr2.jpg)';
		dots.children[1].children[0].style.backgroundPosition = 'center';
		dots.children[1].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[1].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 2
	
		dots.children[2].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[2].children[0].style.backgroundPosition = 'center';
		dots.children[2].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[2].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 3
		
		dots.children[3].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr2.jpg)';
		dots.children[3].children[0].style.backgroundPosition = 'center';
		dots.children[3].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[3].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 4
		
		dots.children[4].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[4].children[0].style.backgroundPosition = 'center';
		dots.children[4].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[4].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 5
		
		dots.children[5].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr2.jpg)';
		dots.children[5].children[0].style.backgroundPosition = 'center';
		dots.children[5].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[5].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 6
		
		dots.children[6].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[6].children[0].style.backgroundPosition = 'center';
		dots.children[6].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[6].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 7
	
		dots.children[7].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr2.jpg)';
		dots.children[7].children[0].style.backgroundPosition = 'center';
		dots.children[7].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[7].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 8
		
		dots.children[8].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[8].children[0].style.backgroundPosition = 'center';
		dots.children[8].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[8].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 9
		
		dots.children[9].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr2.jpg)';
		dots.children[9].children[0].style.backgroundPosition = 'center';
		dots.children[9].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[9].children[0].style.backgroundSize = 'cover';
		//сдесь добавим превью на ячейки выбора 10
		
		dots.children[10].children[0].style.backgroundImage = 'url(../previewsDots/memory/pr1.jpg)';
		dots.children[10].children[0].style.backgroundPosition = 'center';
		dots.children[10].children[0].style.backgroundRepeat = 'no-repeat';
		dots.children[10].children[0].style.backgroundSize = 'cover';
		

       // ищем жлемент футажа 
		dots.addEventListener('click', findInner );
		function findInner(){
			
			for (let index = 0; index < dots.children.length; index++) {
	
				if(dots.children[index].classList.contains("slick-active")){
	
					let res = 	dots.children[index].textContent;
					let tempfootagenum = document.querySelector('.tempfootagenum');
					tempfootagenum.innerText = res;
					
					 // результат который нужно будет добавить в  form data
				}
			
				
			}
			
		}
		
		
	}, 1000);	



 
	// валидация текста

    let resvalidatetext = document.querySelector('.result-massage-text'); 
   
	let inputtext = document.getElementById('text');

	inputtext.addEventListener('keyup', valtext);

	let texterrors = 0;
    function valtext (e) {
		
		if(inputtext.value.length > 1 ){

			if(inputtext.value.length>=20  ){
				
				if(inputtext.value.length <= 50 ){
					resvalidatetext.innerText = `Отлично!`;
					resvalidatetext.classList.remove('error');
					resvalidatetext.classList.add('success');
					btn1.style.backgroundColor = 'orange';
					inputs[0].removeAttribute('disabled', 'disabled');
					inputs[0].addEventListener('change',imgvalid);
					texterrors = 0
					return texterrors;
				}else{
					resvalidatetext.classList.remove('success');	
					resvalidatetext.innerText = `Текст слишком длинный`;
					resvalidatetext.classList.add('error');
					texterrors++
				}
				
			}else{
				resvalidatetext.classList.remove('success');	
				resvalidatetext.innerText = `Вы не ввели текст или он слишком короткий`;
				resvalidatetext.classList.add('error');
				texterrors++
			}
		}else{
			resvalidatetext.classList.remove('success');	
			resvalidatetext.innerText = `добавьте ваш текст`;
			resvalidatetext.classList.remove('error');
		}
		//console.log('текст' + texterrors ) 

      	
	}








	let errors = 0;
	//валидация фото
	function imgvalid (e) {
		
		let countFiles = '';
		if (this.files && this.files.length >= 3 && this.files && this.files.length <= 20  ){
			countFiles = this.files.length;
			var fileTypes = [
				'image/jpeg',
				'image/pjpeg',
				'image/png'
			]
			var fileTypesNON = [
				'video/mp4'
			]
			
			
			for(let i = 0; i < this.files.length; i++ ){
			
				
				for(let j = 0; j < fileTypes.length; j++ ){
					
					if( this.files[i].type !==  fileTypesNON[0] ){ 
							
						if( this.files[i].type === fileTypes[0] ||this.files[i].type === fileTypes[1]  ){
							if( this.files[i].size < 300000){
								resvalidate.innerText = `Отлично, файлы загружены!`;
								resvalidate.classList.remove('error');
								resvalidate.classList.add('success');
								
							
							    //отображение файлов

									//console.log(this.files[i].type)
								if (countFiles){
									label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
								}else{
									label.querySelector('.input__file-button-text').innerText = labelVal;
								}
								errors = 0
								btn2.style.backgroundColor = 'orange';
								btn3.style.backgroundColor = 'orange';
								inputs[1].removeAttribute('disabled', 'disabled');
								btn3.href = "#openModal"
								inputs[1].addEventListener('change', validmusic);
								previewFile(this.files);
									//отображение файлов
									function previewFile(file) {
									
										for (let index = 0; index <= file.length; index++) {
											let reader = new FileReader()
											reader.readAsDataURL(file[index]);
											reader.onloadend = function() {
											let img = document.createElement('img')
											img.src = reader.result
											document.getElementById('prew-list').appendChild(img)
											}
										}
									} 
								return errors;
							}else{
								this.files[0] = ''; 
								resvalidate.classList.remove('success');	
								resvalidate.innerText = `размер файлов очень большой`;
								resvalidate.classList.add('error');
								errors++
							}

						}else{
									
							this.files[0] = ''; 
							resvalidate.classList.remove('success');	
							resvalidate.innerText = `Допустим формат .jpg,.jpeg,.png`;
							resvalidate.classList.add('error');
							errors++
										
									
						}
									
								
					}else{
									
						this.files[0] = ''; 
						resvalidate.classList.remove('success');	
						resvalidate.innerText = `Допустим формат .jpg,.jpeg,.png`;
						resvalidate.classList.add('error');
						errors++
									
								
					}
					

				}
						
					
			}
			


		}else{
			resvalidate.innerText = `вы выбрали меньше 3 файлов или больше 20!`;
			resvalidate.classList.add('error');
			resvalidate.classList.remove('success');
			errors++

		}
		
		
	    //проверки валидации
		return errors;
		
	}

























	
	

	
	
	
	
	let errorsaudio = 0;
	//валидация музыки
	function validmusic (e) {
		
		let countFiles = '';
		if (this.files && this.files.length > 0 && this.files && this.files.length < 2  ){
			countFiles = this.files.length;
			btn3.href = "#"
			btn3.style.backgroundColor = 'rgba(255, 140, 0, 0.5)';
			var fileTypesaudio = [
				'audio/mpeg',
				
			]
		
			
			
			if( this.files[0].type ===  fileTypesaudio[0]  ){ 
							
				
				if( this.files[0].size < 9000000){
					resvalidateaudio.innerText = `Отлично, файл загружен!`;
					resvalidateaudio.classList.remove('error');
					resvalidateaudio.classList.add('success');
						//console.log(this.files[i].type)
					if (countFiles){
						label2.querySelector('.input__file-button-text-audio').innerText = 'Выбрано файлов: ' + countFiles;
					}else{
						label2.querySelector('.input__file-button-text-audio').innerText = labelVal2;
					}

					errorsaudio = 0
					resbtn.removeAttribute('disabled', 'disabled');
					resbtn.style.backgroundColor = 'grey';
					
					//console.log('текст' + ' ' + texterrors + ' ' + 'фото '+ ' ' + errors + ' ' + 'аудио' + ' ' + errorsaudio)
					//console.log(inputs[0].files.length );
					//console.log(inputs[1].files.length );
					if(inputs[0].files.length >= 3 && inputs[1].files.length > 0 && texterrors === 0 && errors === 0 && errorsaudio === 0 ){
						//console.log('отправленно на сервер');
						const Form = document.getElementById('formsend');
						Form.addEventListener('submit', fromProcessing)
					}






				}else{
					this.files[0] = ''; 
					resvalidateaudio.classList.remove('success');	
					resvalidateaudio.innerText = `размер файла очень большой`;
					resvalidateaudio.classList.add('error');
					errorsaudio++
				}
	
				
									
								
			}else{
									
				this.files[0] = ''; 
				resvalidateaudio.classList.remove('success');	
				resvalidateaudio.innerText = `Допустим формат .mp3`;
				resvalidateaudio.classList.add('error');
				errorsaudio++
									
								
			}
	
	
	
	
		}else{
			resvalidateaudio.innerText = `нужно выбрать один файл`;
			resvalidateaudio.classList.add('error');
			resvalidateaudio.classList.remove('success');
			errorsaudio++
	
		}
		//console.log('аудио ' + errorsaudio)
		
		
		
	}



	




//Edit slider for admin

const stract = {
	"footage": 1,
	"wpID": 32,
	"img": [],
	'mp3': 'sdfdsf.mp3',
	'text': 'всего наилучшего',

}



function fromProcessing(event){
	event.preventDefault(); 
	addPost();
}

async function addPost(){
	
	const text = document.getElementById('text').value,
	      pictures =document.getElementById('input__file'),
	  	  music = document.getElementById('input__file_music'),
	  	  footage = document.querySelector('.tempfootagenum').textContent;

console.log(footage)
		
	let pectureFiles  =	pictures.files;	
    let musicFile  = music.files[0];		

	let formData = new FormData();
	formData.append('text', text);
	if(pectureFiles.length > 0){
		for(let i = 0; i < pectureFiles.length; i++ )	{
			formData.append('fileToUpload[]',  pectureFiles[i]);
			
		}
	}
	formData.append('music',  musicFile);
	formData.append('footagenum',  footage);

	const res = await fetch('http://plugin/api/v1/formdata',{
	
		method:'POST',
		body:formData
	});
	
	

	const data = await  res.json();
	
	console.log(data)
 	if (data.status===true){
		
	window.open("http://plugin/ffmpeg/startPython.php" , "_blank");
		
	}
	  
}

















