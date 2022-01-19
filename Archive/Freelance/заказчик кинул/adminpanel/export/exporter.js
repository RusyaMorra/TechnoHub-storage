var fetch = require('node-fetch');
const fs = require('fs');
 

fetch('http://localhost:1337/api/export')
.then(res => res.json())
.then(json => {
 
  if(json.data.attributes.switcher){


    
    
    
     fetch('http://localhost:1337/api/buttoncontent')
     .then(res => res.json())
            .then(json => {
              
            let result =  JSON.stringify({json}, null, 4)
          
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "button/button.json";
    fs.writeFile(filepath,fileContent  , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
     
    })
    
    const dir = '/button'
    
    fs.mkdir(__dirname + dir, { recursive: true }, (err) => {
        if (err) {
            console.error(err)
            return
        }
    })
    
    if (!fs.existsSync(dir)) {
        try {
          fs.mkdirSync(__dirname + dir, { recursive: true })
        } catch (error) {
            console.error(error)
        }
    } else {
        console.log('Папка существует')
    }
    
    fetch('http://localhost:1337/api/singleposts')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "basic-blog/basic-blog.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir2 = '/basic-blog'
    
    fs.mkdir(__dirname + dir2, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir2)) {
       try {
         fs.mkdirSync(__dirname + dir2, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
    
    
    fetch('http://localhost:1337/api/galleryelements')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "gallery/gallery-element.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir3 = '/gallery'
    
    fs.mkdir(__dirname + dir3, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir3)) {
       try {
         fs.mkdirSync(__dirname + dir3, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
    
    
    fetch('http://localhost:1337/api/postwithimgs')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "img-blog/img-blog.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir4 = '/img-blog'
    
    fs.mkdir(__dirname + dir4, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir4)) {
       try {
         fs.mkdirSync(__dirname + dir4, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
    
    
    fetch('http://localhost:1337/api/nav')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "nav-pages/nav-pages.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir5 = '/nav-pages'
    
    fs.mkdir(__dirname + dir5, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir5)) {
       try {
         fs.mkdirSync(__dirname + dir5, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
    
    fetch('http://localhost:1337/api/taglisttitleimgpost')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "tag-list-blog/tag-list-blog.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir6 = '/tag-list-blog'
    
    fs.mkdir(__dirname + dir6, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir6)) {
       try {
         fs.mkdirSync(__dirname + dir6, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
    
    fetch('http://localhost:1337/api/taglistgallery')
    .then(res => res.json())
           .then(json => {
             
           let result =  JSON.stringify({json}, null, 4)
         
    //var encoding = "utf8"        если что можно указать третим значением encoding
    
    // Change the content of the file as you want
    // or either set fileContent to null to create an empty file
    var fileContent = result;
    // The absolute path of the new file with its name
    var filepath = "tag-list-gallery/tag-list-gallery.json";
    fs.writeFile(filepath,fileContent , (err) => {
    if (err) throw err;
    console.log("The file was succesfully saved!");
    }); 
    
    
    })
    
    const dir7 = '/tag-list-gallery'
    
    fs.mkdir(__dirname + dir7, { recursive: true }, (err) => {
       if (err) {
           console.error(err)
           return
       }
    })
    
    if (!fs.existsSync(dir7)) {
       try {
         fs.mkdirSync(__dirname + dir7, { recursive: true })
       } catch (error) {
           console.error(error)
       }
    } else {
       console.log('Папка существует')
    }
  }else{
      console.log('switcher turns off you should activate this in admin panel')
  }
})



