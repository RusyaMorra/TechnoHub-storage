$('.slider-company').slick({
    slidesToShow: 6,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 992,
        settings: {
            slidesToShow: 5,
            centerMode: true,
            centerPadding: '20px',
            variableWidth: true
        }
    }]
});
$('.slider-card').slick({
    slidesToShow: 2,
    infinite: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
        }
    }]
});

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = '2021-12-31'; //for Ukraine
initializeClock('countdown', deadline);

var blockTitle =$('#blockTitle');
var blockText =$('#blockText');
var blockBtn =$('#blockBtn');

var minRisk_1 =["Рекомендуем открыть вклад","Это самый нерисковый способ сохранить капитал, т.к. все вклады до 1,4 миллиона рублей застрахованы. Вы получите доходность, покрывающую инфляцию, не рискуя своими деньгами.","Подобрать вклад"];
var averageRisk_1 = ["Рекомендуем купить облигации банков","Это позволит получать регулярный доход без дополнительного риска. Корпоративные облигации доходнее вкладов и покупая их можно вернуть 13% налогового вычета.","Подобрать облигацию"];
var highRisk_1 = ["Рекомендуем вложить деньги в акции","Это даст возможность получить максимальный прирост вашим деньгам. С другой стороны всегда нужно помнить о рисках, поэтому рекомендуем новичкам покупать акции на небольшие суммы.","Подобрать акцию"];

var minRisk_2 = ["Рекомендуем оформить специальный продукт","Специально для пользователей есть возможность оформить программу с фиксированным, гарантированным доходом на выгодных условиях и сроком до 1 года.","Подобрать продукт"];
var averageRisk_2 = ["Рекомендуем посмотреть все предложения","Мы собрали для вас самые интересные предложения для вложения средств","Подобрать готовое решение"];
var highRisk_2 = ["Рекомендуем купить популярные фонды","Это решение не занимает ваше время на изучение фондового рынка и дает возможность одной покупкой приобретать сразу несколько компаний, снизив риски без потери доходности.","Подобрать фонд"];

$(document).ready(function() {
    $('.range').attr('value', '6');
    $('.gOkYaY').css('stroke-dashoffset', 384)
    $('.risk span').text("низкий риск")
    $('.risk span').css('background', 'rgb(27, 175, 93)')
})





$('#flexRadioDefault1').click(function() {
	var val = $('.range').val()
    var valNum = parseInt(val)
	
    $('.range').attr('max', '54')
    var step = $('.gOkYaY').css('stroke-dashoffset').replace(/[^-\d\.]/g, '');
    $('.gOkYaY').css('stroke-dashoffset', step)
	if (valNum < 7) {
$(blockTitle).text(minRisk_1[0]);
$(blockText).text(minRisk_1[1]);
$(blockBtn).text(minRisk_1[2]);
}
if (valNum > 7 && valNum < 35 ) {
$(blockTitle).text(averageRisk_1[0]);
$(blockText).text(averageRisk_1[1]);
$(blockBtn).text(averageRisk_1[2]);
}
if (valNum > 35 ) {
$(blockTitle).text(highRisk_1[0]);
$(blockText).text(highRisk_1[1]);
$(blockBtn).text(highRisk_1[2]);
}

    $('.range').attr('oninput', 'change1()')
})
$('#flexRadioDefault2').click(function() {
    var val = $('.range').val()
    var valNum = parseInt(val)
    $('.range').attr('max', '60')
    $('.range').attr('value', valNum)
    var step = $('.gOkYaY').css('stroke-dashoffset').replace(/[^-\d\.]/g, '');
    $('.gOkYaY').css('stroke-dashoffset', 600 - (valNum * 10))
    var output = document.getElementById('rangeValue')
    output.innerHTML = valNum
    if (valNum >= 60) {
        output.innerHTML = 60
        $('.range').attr('value', '60')
        $('.gOkYaY').css('stroke-dashoffset', 0)
    }
	if (valNum < 7) {
$(blockTitle).text(minRisk_2[0]);
$(blockText).text(minRisk_2[1]);
$(blockBtn).text(minRisk_2[2]);
}
if (valNum > 7 && valNum < 28 ) {
$(blockTitle).text(averageRisk_2[0]);
$(blockText).text(averageRisk_2[1]);
$(blockBtn).text(averageRisk_2[2]);
}
if (valNum > 28) {
$(blockTitle).text(highRisk_2[0]);
$(blockText).text(highRisk_2[1]);
$(blockBtn).text(highRisk_2[2]);
}

    $('.range').attr('oninput', 'change2()')

})

function change2() {
    var val = $('.range').val()
    var valNum = parseInt(val)
    if ($('#flexRadioDefault2').prop('checked') == true) {

        if (valNum < 7) {
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
			$(blockTitle).text(minRisk_2[0]);
$(blockText).text(minRisk_2[1]);
$(blockBtn).text(minRisk_2[2]);
        }
        if (valNum >= 7) {
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
			$(blockTitle).text(averageRisk_2[0]);
$(blockText).text(averageRisk_2[1]);
$(blockBtn).text(averageRisk_2[2]);
        }
        if (valNum >= 28) {
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
			$(blockTitle).text(highRisk_2[0]);
$(blockText).text(highRisk_2[1]);
$(blockBtn).text(highRisk_2[2]);
        }
        if (valNum <= 60) {
            $('.gOkYaY').css('stroke-dashoffset', 600 - (valNum * 10))
        }
    }
    var output = document.getElementById('rangeValue')
    output.innerHTML = val
}

function change1() {
    var input = document.getElementById('input')
    var output = document.getElementById('rangeValue')
    var values = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100]
    input.oninput = function() {
        output.innerHTML = values[this.value]
        if (values[this.value] == 0) {
            $('.gOkYaY').css('stroke-dashoffset', 600)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 1) {
            $('.gOkYaY').css('stroke-dashoffset', 564)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 2) {
            $('.gOkYaY').css('stroke-dashoffset', 528)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 3) {
            $('.gOkYaY').css('stroke-dashoffset', 492)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 4) {
            $('.gOkYaY').css('stroke-dashoffset', 456)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 5) {
            $('.gOkYaY').css('stroke-dashoffset', 420)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 6) {
            $('.gOkYaY').css('stroke-dashoffset', 384)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 7) {
            $('.gOkYaY').css('stroke-dashoffset', 348)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 8) {
            $('.gOkYaY').css('stroke-dashoffset', 312)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 9) {
            $('.gOkYaY').css('stroke-dashoffset', 276)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 10) {
            $('.gOkYaY').css('stroke-dashoffset', 240)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 11) {
            $('.gOkYaY').css('stroke-dashoffset', 204)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }
        if (values[this.value] == 12) {
            $('.gOkYaY').css('stroke-dashoffset', 168)
            $('.risk span').text("низкий риск")
            $('.risk span').css('background', 'rgb(27, 175, 93)')
        }




        if (values[this.value] == 25) {
            $('.gOkYaY').css('stroke-dashoffset', 82.5)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 26) {
            $('.gOkYaY').css('stroke-dashoffset', 81.4)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 27) {
            $('.gOkYaY').css('strok7-dashoffset', 80.3)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 28) {
            $('.gOkYaY').css('stroke-dashoffset', 79.2)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 29) {
            $('.gOkYaY').css('stroke-dashoffset', 78.1)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 30) {
            $('.gOkYaY').css('stroke-dashoffset', 77)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 31) {
            $('.gOkYaY').css('stroke-dashoffset', 75.9)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 32) {
            $('.gOkYaY').css('stroke-dashoffset', 74.8)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 33) {
            $('.gOkYaY').css('stroke-dashoffset', 73.7)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 34) {
            $('.gOkYaY').css('stroke-dashoffset', 72.6)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }
        if (values[this.value] == 35) {
            $('.gOkYaY').css('stroke-dashoffset', 71.5)
            $('.risk span').text("средний риск")
            $('.risk span').css('background', 'rgb(254, 158, 0)')
        }

        if (values[this.value] == 70) {
            $('.gOkYaY').css('stroke-dashoffset', 33)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 71) {
            $('.gOkYaY').css('stroke-dashoffset', 31.9)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 72) {
            $('.gOkYaY').css('stroke-dashoffset', 30.8)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 73) {
            $('.gOkYaY').css('stroke-dashoffset', 29.7)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 74) {
            $('.gOkYaY').css('stroke-dashoffset', 28.6)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 75) {
            $('.gOkYaY').css('stroke-dashoffset', 27.5)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 76) {
            $('.gOkYaY').css('stroke-dashoffset', 26.4)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 77) {
            $('.gOkYaY').css('stroke-dashoffset', 25.3)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 78) {
            $('.gOkYaY').css('stroke-dashoffset', 24.2)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 79) {
            $('.gOkYaY').css('stroke-dashoffset', 23.1)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 80) {
            $('.gOkYaY').css('stroke-dashoffset', 22)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 81) {
            $('.gOkYaY').css('stroke-dashoffset', 20.9)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 82) {
            $('.gOkYaY').css('stroke-dashoffset', 19.8)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 83) {
            $('.gOkYaY').css('stroke-dashoffset', 18.7)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 84) {
            $('.gOkYaY').css('stroke-dashoffset', 17.6)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 85) {
            $('.gOkYaY').css('stroke-dashoffset', 16.5)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 86) {
            $('.gOkYaY').css('stroke-dashoffset', 15.4)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 87) {
            $('.gOkYaY').css('stroke-dashoffset', 14.3)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 88) {
            $('.gOkYaY').css('stroke-dashoffset', 13.2)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 89) {
            $('.gOkYaY').css('stroke-dashoffset', 12.1)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 90) {
            $('.gOkYaY').css('stroke-dashoffset', 11)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 91) {
            $('.gOkYaY').css('stroke-dashoffset', 9.9)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 92) {
            $('.gOkYaY').css('stroke-dashoffset', 8.8)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 93) {
            $('.gOkYaY').css('stroke-dashoffset', 7.7)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 94) {
            $('.gOkYaY').css('stroke-dashoffset', 6.6)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 95) {
            $('.gOkYaY').css('stroke-dashoffset', 5.5)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 96) {
            $('.gOkYaY').css('stroke-dashoffset', 4.4)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 97) {
            $('.gOkYaY').css('stroke-dashoffset', 3.3)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 98) {
            $('.gOkYaY').css('stroke-dashoffset', 2.2)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 99) {
            $('.gOkYaY').css('stroke-dashoffset', 1.1)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
        if (values[this.value] == 100) {
            $('.gOkYaY').css('stroke-dashoffset', 0)
            $('.risk span').text("высокий риск")
            $('.risk span').css('background', 'rgb(239, 45, 29)')
        }
		if (values[this.value ] < 7) {
$(blockTitle).text(minRisk_1[0]);
$(blockText).text(minRisk_1[1]);
$(blockBtn).text(minRisk_1[2]);
}
if (values[this.value] == 25 && values[this.value] < 35 ) {
$(blockTitle).text(averageRisk_1[0]);
$(blockText).text(averageRisk_1[1]);
$(blockBtn).text(averageRisk_1[2]);
}
if (values[this.value] > 35 ) {
$(blockTitle).text(highRisk_1[0]);
$(blockText).text(highRisk_1[1]);
$(blockBtn).text(highRisk_1[2]);
}
			


	
	
	
	
    }
}
