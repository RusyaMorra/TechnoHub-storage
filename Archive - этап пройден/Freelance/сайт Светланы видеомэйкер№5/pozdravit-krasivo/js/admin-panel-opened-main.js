

//delete, edit, add buttons
let adminBoxes = document.getElementsByClassName("portfolio__item");
document.body.insertAdjacentHTML("afterbegin", `
      <div class="addNewItemContainer">
         <div class="addNewItem">+</div>
      </div>
      <form action="../../../../formHandle/mainHandle.php" method="GET" class="mainAddBox _hide" enctype='multipart/form-data'>
         <p>
            <p><strong>Ваша картинка</strong></p>
            <input type="file" name="image" value="">
         </p>
         <p>
            <p><strong>Заголовок</strong></p>
            <input type="text" name="title" value="">
         </p>
         <p>
            <p><strong>Тэг</strong></p>
            <input type="text" name="tag" value="">
         </p>
         <p>
            <p><strong>Ссылка на ютуб</strong></p>
            <input type="text" name="youtube" value="">
         </p>

         <p> 
            <button type="submit" name="addNew">Добавить</button>
         </p>
         <p style="color: red" title="Но если вы их таки оставите, то данные просто не загрузятся">
            Пустые поля не допускаются*
         </p>
         <div class="closeAddingFormContainer">
            <div class="closeAddingForm">&times;</div>
         </div>
      </form>
   `)
let biggest = 0;
for (let i = 0; i < adminBoxes.length; i++) {
   const adminBox = adminBoxes[i];
   const dataId = adminBox.getAttribute("data-id");
   if (biggest < dataId) {
      biggest = dataId * 1;
   }
   adminBox.insertAdjacentHTML("afterbegin", `
   <div class=\"adminDeleteBoxContainer\">
      <form action="formHandle/mainHandle.php" method="POST" class=\"adminDeleteBox\">
         <button data-delete="${dataId}" name="deleteBox${dataId}" >&times;</button>
      </form>
   </div>
   `);
   adminBox.insertAdjacentHTML("afterbegin", `
      <div class=\"adminEditBoxContainer\">
         <div class=\"adminEditBox\">
            <div  data-edit="${dataId}">&#9998;</div>
         </div>
      </div>
      <form action="formHandle/mainHandle.php" method="POST" data-form="${dataId}" class="mainEditBox" enctype='multipart/form-data'>
         <p>
            <p><strong>Ваша картинка</strong></p>
            <input type="file" name="image" value="">
         </p>
         <p>
            <p><strong>Заголовок</strong></p>
            <input type="text" name="title" value="">
         </p>
         <p>
            <p><strong>Тэг</strong></p>
            <input type="text" name="tag" value="">
         </p>
         <p>
            <p><strong>Ссылка на ютуб</strong></p>
            <input type="text" name="youtube" value="">
         </p>
         
         <p> 
            <button type="submit" name="do_edit${dataId}">Обновить</button>
         </p>
         
         <div class="closeAnotherFormContainer">
            <div class="closeAnotherForm">&times;</div>
         </div>
      </form>
   `);

   const deleteButton = adminBox.querySelector("[data-delete]");
   deleteButton.addEventListener("click", hideThat);
}

//hiding by javascript
function hideThat(e) {
   localStorage.setItem("mainisAddedNew", false);
   const block = e.target.closest(".portfolio__item");
   block.style.display = "none";
   const id = e.target.getAttribute("data-delete");
   localStorage.setItem(`maindeleted${id}`, `${id}`);
}


//hiding after reload by using localStorage in js
window.addEventListener('load', e => {
   const numberItems = document.querySelectorAll(".portfolio__item");
   for (let i = 0; i < numberItems.length; i++) {
      const currentItem = numberItems[i];
      const id = currentItem.getAttribute("data-id");
      const currentStoragekey = localStorage.getItem(`maindeleted${id}`);
      if (currentStoragekey != null) {
         const currentItemdocument = document.querySelector(`[data-id="${currentStoragekey}"]`);
         currentItemdocument.style.display = "none";
      }
      //adding image after reload
      const block = document.querySelector(`div[data-id="${id}"]`);
      const currentImageValue = localStorage.getItem(`mainimage${id}`);
      if (currentImageValue != "null" && currentImageValue != null) {
         block.querySelector(".portfolio__item-img").setAttribute("src", currentImageValue);
      }
      //adding youtube after reload
      const currentYoutubeValue = localStorage.getItem(`mainyoutube${id}`);
      if (currentYoutubeValue != "null" && currentYoutubeValue != null && currentYoutubeValue != "") {
         block.querySelector(".portfolio__link").setAttribute("href", currentYoutubeValue);
      }
      //adding title after reload
      const currentTitleValue = localStorage.getItem(`maintitle${id}`);
      if (currentTitleValue != "null" && currentTitleValue != null && currentTitleValue != "") {
         block.querySelector(".portfolio__item-name").textContent = currentTitleValue;
      }
      //adding tag after reload
      const currentTagValue = localStorage.getItem(`maintag${id}`);
      if (currentTagValue != "null" && currentTagValue != null && currentTagValue != "") {
         block.querySelector(".portfolio__tag").textContent = currentTagValue;
      }


   }
});

setTimeout(e => {
   localStorage.clear();
}, (1000 * 6))


//EDIT BUTTON
//close form
const xMarksEditSettings = document.querySelectorAll(".closeAnotherForm");
for (let i = 0; i < xMarksEditSettings.length; i++) {
   const xMark = xMarksEditSettings[i];
   xMark.addEventListener("click", xMarks)

}
function xMarks(e) {
   const target = e.target.closest(".mainEditBox");
   target.style.visibility = "hidden";
   target.style.opacity = "0";
   target.style.pointerEvents = "none";
}

//open edit form
const editBoxes = document.querySelectorAll(".adminEditBox");
for (let i = 0; i < editBoxes.length; i++) {
   const editBox = editBoxes[i];
   editBox.addEventListener("click", clickEdit)
}
function clickEdit(e) {
   const id = e.target.dataset.edit;
   const currentEditBox = document.querySelector(`[data-form="${id}"]`);
   currentEditBox.style.visibility = "initial";
   currentEditBox.style.opacity = "initial";
   currentEditBox.style.pointerEvents = "initial";

   //uploading image and other data by js
   const inputImageField = e.target.parentElement.parentElement.nextElementSibling[0];
   inputImageField.addEventListener("change", onInputImageField);
   console.log(inputImageField);

   function onInputImageField(e) {
      if (!e.target.files.length) {
         return;
      }

      const files = Array.from(e.target.files);
      files.forEach(file => {
         if (!file.type.match("image")) {
            return
         }
         const reader = new FileReader();
         reader.onload = e => {
            localStorage.setItem(`mainimage`, `${e.target.result}`);
         }
         reader.readAsDataURL(file)
      })
   }

   //adding to local storage edtited item
   const currentEdit = document.querySelector(`button[name="do_edit${id}"`);
   currentEdit.addEventListener("click", e => {
      localStorage.setItem("mainisAddedNew", false);
      // e.preventDefault();
      //img
      const name = e.target.getAttribute("name");
      const id = name.replace(/^\D+/g, "");
      const imageCode = localStorage.getItem("mainimage");
      localStorage.setItem(`mainimage${id}`, imageCode);
      //youtube
      const youtube = e.target.parentElement.parentElement.querySelector("input[name=\"youtube\"]").value;
      if (youtube != "") { localStorage.setItem(`mainyoutube${id}`, youtube); }
      //title
      const title = e.target.parentElement.parentElement.querySelector("input[name=\"title\"]").value;
      if (title != "") { localStorage.setItem(`maintitle${id}`, title); }
      //tag
      const tag = e.target.parentElement.parentElement.querySelector("input[name=\"tag\"]").value;
      if (tag != "") { localStorage.setItem(`maintag${id}`, tag); }

   })
}

//ADDING ANOTHER ITEM FORM
const addNew = document.querySelector(".addNewItemContainer");
addNew.addEventListener("click", addingNewItem);
function addingNewItem() {
   const currentForm = document.querySelector(".mainAddBox");
   currentForm.classList.remove("_hide");
   const closeWindow = document.querySelector(".closeAddingFormContainer");
   closeWindow.addEventListener("click", e => {
      currentForm.classList.add("_hide");
   })
}