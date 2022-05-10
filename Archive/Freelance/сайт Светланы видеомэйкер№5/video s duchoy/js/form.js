jQuery(function ($) {

    var errorTxt = 'Ошибка отправки';
    $("#sendform").validate({
        submitHandler: function (form) {
            var form = document.forms.sendform,
                formData = new FormData(form),
                xhr = new XMLHttpRequest();

            xhr.open("POST", "send.php");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        document.getElementById('sendform').reset();
                        var element = document.getElementById("contacts__file-return");
                        element.classList.add("contacts__file-return--passive");
                        $('.contacts__pop-up').addClass('contacts__pop-up--active');
                    }
                }
            };
            xhr.send(formData);
        }
    });

    $('.contacts__file').on('click', function () {
        $('.contacts__file-return').removeClass('contacts__file-return--passive');
    });

    $('.contacts__close').on('click', function () {
        $('.contacts__pop-up').removeClass('contacts__pop-up--active');
    });

    var fileInput = document.querySelector(".contacts__file"),
        button = document.querySelector(".contacts__file-trigger"),
        the_return = document.querySelector(".contacts__file-return");

    button.addEventListener("keydown", function (event) {
        if (event.keyCode == 13 || event.keyCode == 32) {
            fileInput.focus();
        }
    });
    button.addEventListener("click", function (event) {
        fileInput.focus();
        return false;
    });
    fileInput.addEventListener("change", function (event) {
        the_return.innerHTML = this.value;
    });

});