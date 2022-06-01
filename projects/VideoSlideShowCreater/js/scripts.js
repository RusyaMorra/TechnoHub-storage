//input files img and music

let errors = 0;
let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
	
	
let label = input.nextElementSibling,
	labelVal = label.querySelector('.input__file-button-text').innerText;
	
	

	input.addEventListener('change', function (e) {
		let countFiles = '';
		if (this.files && this.files.length >= 1){
		countFiles = this.files.length;
		}

		
	    //проверки валидации
		
		
		for(let i  = 0; i <= this.files.length; i++ ){
			var fileTypes = [
				'image/jpeg',
				'image/pjpeg',
				'image/png'
			]
			 //console.log(i)
			
				for(let j = 0; j <= fileTypes.length; j++ ){  
					if(this.files[i].type === fileTypes[j]){ 
						//console.log(this.files[i].type)
						if (countFiles){
						label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
						}else{
						label.querySelector('.input__file-button-text').innerText = labelVal;
						}
						
					return true; 
					}
					else{
						
						this.files[0] = ''; 
						let resvalidate = document.querySelector('.result-massage');
						resvalidate.innerText = `Допустим формат .jpg,.jpeg,.png`;
						resvalidate.classList.add('error');
						errors++
						
					
					}
					
				}	
		}


		
		
		
	});

	

});








//animation img










/*



//Edit slider for admin


const addForm = document.getElementById('add-tamplate')


addForm.addEventListener('click', addPost  )


async function addPost(){

	const title =document.getElementById('title').value,
	  body = document.getElementById('body').value;

	let formData = new FormData();
	formData.append('title', title);
	formData.append(' body',  body);

	const res = await fetch('http://myapi/posts',{
		method:'POST',
		body: formData
	});

	const data = await  res.json();
	if (data.status===true){
	  await	getPosts()
	}
	  
}






//Memory category
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')
// const item = document.getElementById('slick-slide-control00')



*/




