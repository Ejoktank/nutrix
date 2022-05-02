
/*(function () {
    var sliderMainImg = document.querySelector('.IProductSlider-Main-Img');
    var sliderSlides = document.querySelectorAll('*[data-slider-min]');

    function setMainImg() {
        console.log(this)
    }

    sliderSlides.forEach(function (item) {
        console.log(item)
        item.addEventListener('click', function () {
            sliderMainImg.src = this.dataset.sliderMin;
        });
        item.addEventListener('touchstart', function () {
            sliderMainImg.src = this.dataset.sliderMin;
        });
    })
})()*/

$(document).ready(function () {

    $(".MaskedPhone1").inputmask("8 (999) 999-99-99", {
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

    $(".ProcessingPersonalDataText-Link").fancybox({
        maxWidth: 700
    });

    validateForm({
        formId: 'form10'
    });

    $('.IProductSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false,
        asNavFor: '.IProductSliderNav',
        prevArrow: '<div class="Slider-Arrow Slider-Arrow_prev Slider-Arrow_simple">\n' + '                        <img src="/img/Slider-Arrow-Icon_simple.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>',
        nextArrow: '<div class="Slider-Arrow Slider-Arrow_next Slider-Arrow_simple">\n' + '                        <img src="/img/Slider-Arrow-Icon_simple.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>'
    });

    $('.IProductSliderNav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        dots: false,
        focusOnSelect: true,
        asNavFor: '.IProductSlider',
        prevArrow: '<div class="Slider-Arrow Slider-Arrow_prev Slider-Arrow_simple">\n' + '                        <img src="/img/Slider-Arrow-Icon_simple.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>',
        nextArrow: '<div class="Slider-Arrow Slider-Arrow_next Slider-Arrow_simple">\n' + '                        <img src="/img/Slider-Arrow-Icon_simple.png"\n' + '                             alt=""\n' + '                             class="Slider-SlideImg Slider-Arrow-Icon">\n' + '                    </div>'
    });
});
//# sourceMappingURL=im-js.js.map
