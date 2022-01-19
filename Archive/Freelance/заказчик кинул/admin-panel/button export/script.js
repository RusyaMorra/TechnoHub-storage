const btn = document.getElementById('btn');
btn.addEventListener('click',()=>{
    call();
})


async function call(){
    await  getsinglePosts();
    await getImgTitlePosts();
}


async function  getsinglePosts(){
let res = await fetch('http://admin-panel/single-article');
let posts = await res.json();
document.querySelector('.post-list').innerHTML='';
posts.forEach((post) => {
 document.querySelector('.post-list').innerHTML+=`
  <div class="card" style="width: 18rem;">
 <div class="card-body">
 <h5 class="card-title">${post.article}</h5>
 <p class="card-text">${post.body.text}</p>

 </div>
</div>
`
 
});
}
async function  getImgTitlePosts(){
let res = await fetch('http://admin-panel/artical-title-img');
let posts = await res.json();
document.querySelector('.post-list2').innerHTML='';
posts.forEach((post) => {
 document.querySelector('.post-list2').innerHTML+=`
  <div class="card" style="width: 30rem;">
 <div class="card-body">
 <img src="${post.body.photo.main}" class="img-1" alt="">
 <h5 class="card-title">${post.name}</h5>
 <p class="card-text">${post.body.content.text}</p>

 </div>
</div>
`

const imgsize = document.querySelector('.img-1');

imgsize.style.width=`${post.body.photoforpreview.imagesize.maxsize.width}`+'px';

 
});
}


