const OpenPopUp=document.getElementById('OpenPopUp');
const ClosePopUp=document.getElementById('PopUpClose');
const PopUp=document.getElementById('PopUp');

OpenPopUp.addEventListener('click', function(e){
    e.preventDefault();
    PopUp.classList.add('Active');
})
ClosePopUp.addEventListener('click',()=>{
    PopUp.classList.remove('Active')
})