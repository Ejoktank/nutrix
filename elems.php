<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <?php include ("template/all/head.php")?>
</head>
<body>
<div style="display: flex; flex-wrap: wrap;">
    <?php
    $dir  = '../src/img/svg/';
    $files = array_diff( scandir( $dir), array('..', '.'));
    foreach($files AS $i => $filename) {
        printf(
            '<div style="padding: 0 10px;text-align: center;border: 1px solid #000;">
                    <svg class="" style="width: 50px; fill: #000;">
                        <use
                            xlink:href="img/sprite.svg#%s"
                            href="img/sprite.svg#%s"></use>
                    </svg>
                    <p style="font-size: 12px;">%s</p></div>',
            urlencode( $filename),
            substr($filename, 0, -4),
            $filename
        );
    }
    ?>
</div>

<svg class="">
    <use
        xlink:href="img/sprite.svg#tel"
        href="img/sprite.svg#tel"></use>
</svg>

<a class="Btn FancyBtn"
   data-fancybox
   data-type="ajax"
   data-src="/im-blocks/imassage.php?headmess=<?=urlencode("Главная форма");?>&zag1=<?=urlencode("Заявка на консультацию менеджера");?>&zag2=<?=urlencode("Перезвоним в течение 5 минут");?>&reachgoal=main_form"
   href="javascript:;">
    Узнать подробнее
</a>

<form class="Form Form_line" id="form-ch" data-reachgoal="form-ch">
    <div class="Input Input_bgWhite">
        <input
            type="tel"
            placeholder="Введите номер телефона"
            name="phone"
            class="Input-Control MaskedPhone"
            data-validator="regexp"
            data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
            data-required
        />
    </div>
    <button class="Btn">
        Получить
    </button>
    <input name="head_mess" type="hidden" value="Главная форма">
    <input name="page_id" type="hidden" value="<?=$page_id;?>">
</form>

<form class="Form" id="form-check" data-reachgoal="form-check">
    <div class="Form-Row">
        <div class="Input Input_bgWhite">
            <input
                placeholder="Введите ваше имя"
                name="name"
                class="Input-Control"
                data-validator="letters"
                data-required
            />
        </div>
    </div>
    <div class="Form-Row">
        <div class="Input Input_bgWhite">
            <input
                type="tel"
                placeholder="Введите номер телефона"
                name="phone"
                class="Input-Control MaskedPhone"
                data-validator="regexp"
                data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                data-required
            />
        </div>
    </div>
    <div class="Form-Row">
        <input name="head_mess" type="hidden" value="">
        <input name="page_id" type="hidden" value="<?=$page_id;?>">
        <button class="Btn">
            Test
        </button>
    </div>
</form>

<h2 class="Heading Heading_lvl2">Предоставляемые <span class="Heading_decorLine">услуги</span></h2>

<div class="Player">

    <video class="Player-Video Player-Video_js_viewer" preload="auto" controls poster="/img/playerPreview.jpg" >
        <source src="/video/PlaceholderVideo.mp4" type="video/mp4">
        <!--<source src="https://archive.org/download/WebmVp8Vorbis/webmvp8.ogv" type="video/ogg">
        <source src="https://archive.org/download/WebmVp8Vorbis/webmvp8.webm" type="video/webm">-->
        Your browser doesn't support HTML5 video tag.
    </video>

    <div class="Player-Controls">
        <div class="Player-Progress PlayerProgress">
            <div class="PlayerProgress-Filled"></div>
        </div>
        <button class="Player-Button Player-Button_js_toggle" title="Toggle Play">►</button>
        <div></div>
        <div></div>
        <div class="Player-Volume">
            <svg class="Icon">
                <use
                        xlink:href="img/sprite.svg#volume"
                        href="img/sprite.svg#volume"></use>
            </svg>
            <input type="range" name="volume" class="Player-Slider" min="0" max="1" step="0.05" value="1">
        </div>
        <button class="Player-Button Player-Button_js_fullscreen">full</button>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

<?php include ("template/all/bot-scripts.php")?>
