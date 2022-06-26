const admInscription = document.getElementsByClassName("footer__admin-custom-panel")[0];
const formCnt = document.getElementsByClassName("formAdminContainer")[0];
const xMark = document.getElementsByClassName("closeForm")[0];

admInscription.addEventListener("click", onAdminClick);

function onAdminClick(e) {
   formCnt.classList.add("_visibleAdmin");
   xMark.addEventListener("click", closeAdminForm)
}

function closeAdminForm() {
   formCnt.classList.remove("_visibleAdmin");
}