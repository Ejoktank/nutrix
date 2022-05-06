/*//=require components/example.js*/

// function will clear input elements on ever form on HTML page
function clearForms() {
    // variable declaration
    var x, y, z, type = null;
    // loop through forms on HTML page
    for (x = 0; x < document.forms.length; x++) {
        // loop through each element on form
        for (y = 0; y < document.forms[x].elements.length; y++) {
            // define element type
            type = document.forms[x].elements[y].type;
            // alert before erasing form element
            //alert('form='+x+' element='+y+' type='+type);
            // switch on element type
            switch (type) {
                case 'text':
                case 'textarea':
                case 'password':
                case 'tel':
                    //case "hidden":
                    document.forms[x].elements[y].value = '';
                    break;
                case 'radio':
                case 'checkbox':
                    document.forms[x].elements[y].checked = '';
                    break;
                case 'select-one':
                    document.forms[x].elements[y].options[0].selected = true;
                    break;
                case 'select-multiple':
                    for (z = 0; z < document.forms[x].elements[y].options.length; z++) {
                        document.forms[x].elements[y].options[z].selected = false;
                    }
                    break;
            } // end switch
        } // end for y
    } // end for x
}

function sendForm(form) {
    var reachgoal = form.dataset.reachgoal;

    var formData = new FormData(form);

    var formBtn = form.querySelector('button.Btn');
    formBtn.classList.add('Btn_disabled');
    formBtn.disabled = true;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/ok.php");
    xhr.send(formData);
    xhr.onreadystatechange = function () { // (3)
        if (xhr.readyState != 4) return;

        if (xhr.status != 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            //yaCounter33093903.reachGoal(reachgoal);
            parent.$.fancybox.close();
            jQuery.fancybox.open(jQuery('.ImThanks').html(xhr.responseText), {
                padding: 0,
            });
            //jQuery.fancybox( jQuery('.ImThanks').html(xhr.responseText) );

            formBtn.classList.remove('Btn_disabled');
            formBtn.disabled = false;
            clearForms();
        }

    };
    return false;
}
'use strict';

/**
 *
 * @param options
 formId: 'profile',
 formValidClass: 'form_valid',
 formInvalidClass: 'form_invalid',
 inputErrorClass: 'input_error'
 */
function validateForm(options) {
    var form = document.getElementById(options.formId);

    if (!form) {
        console.log("Cannot find form with id: " + options.formId);
        return;
    }

    var funcHandler = options.funcHandler || sendForm;
    var formValidClass = options.formValidClass || 'Form_valid';
    var formInvalidClass = options.formInvalidClass || 'Form_invalid';
    var inputErrorClass = options.inputErrorClass || 'Input_error';

    function requiredValid(elem) {
        if (elem.value == '' && elem.hasAttribute('data-required')) {
            errorInput(elem);
        }
    }

    function validElem(elem) {
        var regExp;
        var value = elem.value;

        switch (elem.dataset.validator) {
            case 'length':
                value = value.length;
                lenghtCheck(elem, value);

                requiredValid(elem);

                break;
            case 'letters':
                regExp = /^[^\s]([a-zа-яё\s\-]*)$/i;
                if (!regExp.test(value)) errorInput(elem);

                requiredValid(elem);

                break;
            case 'number':
                if (isNaN(Number(value))) {
                    errorInput(elem);
                    return;
                }

                value = parseInt(value);
                lenghtCheck(elem, value);

                requiredValid(elem);

                break;
            case 'regexp':
                regExp = new RegExp(elem.dataset.validatorPattern);
                if (!regExp.test(value) && value != '') errorInput(elem);

                requiredValid(elem);

                break;
            case 'file':
                if (elem.value === '') {
                    if (!elem.parentNode.querySelector('.FileErrorText')) {
                        var para = document.createElement('p');
                        para.classList.add('FileErrorText');
                        para.textContent = 'Нет прикрепленного файла';
                        setTimeout(function () {
                            elem.parentNode.removeChild(para);
                        }, 1000);
                        elem.parentNode.insertBefore(para, elem);
                    }
                }

                requiredValid(elem);

                break;
            default:
                requiredValid(elem);

                break;
        }
    }

    function lenghtCheck(elem, value) {
        var min, max;
        if (elem.dataset.validatorMin) {
            min = parseInt(elem.dataset.validatorMin);
        }
        if (elem.dataset.validatorMax) {
            max = parseInt(elem.dataset.validatorMax);
        }

        if (min > value || value > max) {
            errorInput(elem);
        }
    }

    function errorInput(elem) {
        elem.classList.add(inputErrorClass);
        setTimeout(function () {
            elem.classList.remove(inputErrorClass);
        }, 500)
    }

    function checkForm() {
        try {
            var inputList = form.querySelectorAll('input');

            for (var i = 0; i < inputList.length; i++) {
                validElem(inputList[i]);

                if (inputList[i].classList.contains(inputErrorClass)) {
                    form.classList.remove(formValidClass);
                    form.classList.add(formInvalidClass);
                    inputList[i].focus();
                    return false;
                }
                form.classList.remove(formInvalidClass);
                form.classList.add(formValidClass);
            }
            return true;
        } catch (e) {
            console.log(e);
        }
    }

    form.addEventListener('blur', function (event) {
        validElem(event.target);
    }, true);

    form.addEventListener('focus', function (event) {
        if (event.target.classList.contains(inputErrorClass)) {
            errorInput(elem);
        }
    }, true);

    form.addEventListener('click', function (event) {
        if (event.target.tagName === 'INPUT' && event.keyCode == 13) {
            checkForm();
        }
    }, true);

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (checkForm()) funcHandler(form);
    });
}


$(document).ready(function () {

    var phonemaskOk = 0;

    $(".MaskedPhone").inputmask("8 (999) 999-99-99", {
        "oncomplete": function () {
            phonemaskOk = 1;
        },
        "onincomplete": function () {
            phonemaskOk = 0;
        },
        "oncleared": function () {
            phonemaskOk = 0;
        }
    });

    $('input').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            var qid = $(this).parents('form').attr('alt');
            var qreachgoal = $(this).parents('form').attr('data-reachgoal');
            formcheck(qid, qreachgoal);
        }
    });

    $(".FancyBtn").fancybox({
        padding: 0
    });

    $(".FancyMedia").fancybox({
        padding: 0
    });

    $(".ProcessingPersonalDataText-Link, .ImPolitic").fancybox({
        maxWidth: 700
    });

    $('.ForThoseSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: false,
        prevArrow: '<div class="Slider-Arrow Slider-Arrow_prev">\n' + '                        <img src="/wp-content/themes/nutrix/img/Slider-Arrow-Icon.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>',
        nextArrow: '<div class="Slider-Arrow Slider-Arrow_next">\n' + '                        <img src="/wp-content/themes/nutrix/img/Slider-Arrow-Icon.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>'
    });

    $('.StarRecommendSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        dots: false,
        mobileFirst: true,
        prevArrow: '<div class="StarRecommendSlider-Arrow StarRecommendSlider-Arrow_prev">\n' + '                        <img src="/wp-content/themes/nutrix/img/Slider-Arrow-Icon.png"\n' + '                             alt=""\n' + '                             class="StarRecommendSlider-SlideImg StarRecommendSlider-Arrow-Icon">\n' + '                    </div>',
        nextArrow: '<div class="StarRecommendSlider-Arrow StarRecommendSlider-Arrow_next">\n' + '                        <img src="/wp-content/themes/nutrix/img/Slider-Arrow-Icon.png"\n' + '                             alt=""\n' + '                             class="StarRecommendSlider-SlideImg StarRecommendSlider-Arrow-Icon">\n' + '                    </div>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                swipe: false
                // speed: 500,
                // fade: true,
                // cssEase: 'linear'
                // slidesToShow: 1,
                // slidesToScroll: 1,
                // centerMode: true,
                // variableWidth: true
            }
        }]
    });

    $('.FormSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        dots: false,
        prevArrow: '',
        nextArrow: '<button type="button" class="FormSlider-Arrow FormSlider-Next Btn">' + 'Продолжить <img src="/wp-content/themes/nutrix/img/SliderArrow.png" alt="">' + '</button>'
    });

    /*var myDefMenu = new DefMenu({
        btn : ".DefmenuBtn"
        //menu : ".mydefmenu",
        //build : true,
        //links: "auto"
    });*/

    var myDefMenu = new DefMenu({
        btn: ".DefmenuBtn",
        menu: ".BurgerMenu"
        //build : true,
        //links: "auto"
    });

    $('.BurgerMenu-Close').on('click', function () {
        myDefMenu.close();
    });

    $('.Accordion-Title').on('click', function () {
        $(this).parent().toggleClass('Accordion-Item_open');
    });

    function animatedAnchorScroll(self) {
        var target = $(self).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 80
        }, 500);
    }
    $('a[href^="#"]').click(function () {
        animatedAnchorScroll(this);
        myDefMenu.close();
        return false;
    });

    validateForm({
        formId: 'form-need-help'
        //formValidClass: 'Form_valid',
        //formInvalidClass: 'Form_invalid',
        //inputErrorClass: 'Input_error'
    });

    /*var center = [54.728243, 55.955951];
    var iconCoord = [54.728243, 55.955951];
    mapInit(center, iconCoord);*/
});
//# sourceMappingURL=main.js.map