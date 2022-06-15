//input files img and music
/*
let errors = 0;
let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
	console.dir( inputs);
	
	let resvalidate = document.querySelector('.result-massage');
	let label = input.nextElementSibling,
		labelVal = label.querySelector('.input__file-button-text').innerText;
	
	

	input.addEventListener('change', function (e) {
		let countFiles = '';
		if (this.files && this.files.length >= 3 && this.files && this.files.length <= 20  ){

			for(let i  = 0; i <= this.files.length; i++ ){
				var fileTypes = [
					'image/jpeg',
					'image/pjpeg',
					'image/png'
				]
				 console.log(this.files[i].type);
				
					
				if(this.files[i].type === fileTypes[0] && this.files[i].type === fileTypes[2] && this.files[i].type === fileTypes[3] ){ 
					countFiles = this.files.length;
					resvalidate.innerText = `Отлично, файлы загружены!`;
					resvalidate.classList.remove('error');
					resvalidate.classList.add('success');
							//console.log(this.files[i].type)
					if (countFiles){
					  	label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
					}else{
						label.querySelector('.input__file-button-text').innerText = labelVal;
					}
							
						
				}else{
							
					this.files[0] = ''; 
							
					resvalidate.innerText = `Допустим формат .jpg,.jpeg,.png`;
					resvalidate.classList.add('error');
					errors++
							
						
				}
						
					
			}
			


		}else{
			resvalidate.innerText = `вы выбрали меньше 3 файлов или больше 20!`;
			resvalidate.classList.add('error');
			resvalidate.classList.remove('success');

		}

		
	    //проверки валидации
		
		
	});
});


let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
	console.dir( inputs);
	
	let resvalidate = document.querySelector('.result-massage');
	let label = input.nextElementSibling,
		labelVal = label.querySelector('.input__file-button-text').innerText;
	
	

	input.addEventListener('change', function (e) {
		let countFiles = '';
		if (this.files && this.files.length >= 3 && this.files && this.files.length <= 20  ){

			for(let i  = 0; i <= this.files.length; i++ ){
				var fileTypes = [
					'image/jpeg',
					'image/pjpeg',
					'image/png'
				]
				 console.log(this.files[i].type);
				
					
				if(this.files[i].type === fileTypes[0] && this.files[i].type === fileTypes[2] && this.files[i].type === fileTypes[3] ){ 
					countFiles = this.files.length;
					resvalidate.innerText = `Отлично, файлы загружены!`;
					resvalidate.classList.remove('error');
					resvalidate.classList.add('success');
							//console.log(this.files[i].type)
					if (countFiles){
					  	label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
					}else{
						label.querySelector('.input__file-button-text').innerText = labelVal;
					}
							
						
				}else{
							
					this.files[0] = ''; 
							
					resvalidate.innerText = `Допустим формат .jpg,.jpeg,.png`;
					resvalidate.classList.add('error');
					errors++
							
						
				}
						
					
			}
			


		}else{
			resvalidate.innerText = `вы выбрали меньше 3 файлов или больше 20!`;
			resvalidate.classList.add('error');
			resvalidate.classList.remove('success');

		}

		
	    //проверки валидации
		
		
	});
});








//Edit slider for admin

const stract = {
	"footage": 1,
	"wpID": 32,
	"img": [],
	'mp3': 'sdfdsf.mp3',
	'text': 'всего наилучшего',

}
*/

const Form = document.getElementById('formsend');


Form.addEventListener('submit', fromProcessing)




function fromProcessing(event){
	event.preventDefault(); 
	
	addPost();

	

	// if(errors === 0){
	// 	addPost();
	// }else{
	// 	'ошибки валидации, не все поля заполнены'
	// }
}





async function addPost(){
	
	const text = document.getElementById('text').value,
	      pictures =document.getElementById('input__file'),
	  	  music = document.getElementById('input__file_music');
	  	  


		
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

	const res = await fetch('http://plugin/api/v1/formdata',{
	
		method:'POST',
		body:formData
	});
	
	

	const data = await  res.json();
	
	console.log(data)
	// if (data.status===true){
		
	// //   await	getPosts()
	//  }
	  
}






//Memory category
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')







