const hov=document.getElementById('hov');
const menusub=document.querySelector('.sub-menu');
hov.addEventListener('mousemove',()=>{menusub.style.display = 'block';});
document.addEventListener('click',()=> menusub.style.display = 'none') ;
/*
for (var i = 0; i < hov.length; ++i) {
    hov[i].hov.addEventListener('mousemove',(eventObject)=>{menusub.style.display = 'block'; let targer = eventObject.currentTarget});
}
const menuIn=document.querySelector('wrapper-right__language-options2');
const innerwidth = window.innerWidth;
if(innerwidth<=900){
    menuIn.style.display='block';
}
*/

