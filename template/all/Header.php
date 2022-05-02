
<header class="Header DefmenuBtn-Container_fixed">

    <div class="Container">
        <div class="Header-Body">
            <a href="/" class="Header-Logo Logo">
                <img class="Logo-Image" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="">
            </a>

            <nav class="Header-Nav HeaderNav">
                <a href="#Product" class="HeaderNav-Link">
                    Продукция
                </a>
                <a href="#Courses" class="HeaderNav-Link">
                    Спецпредложения
                </a>
                <a href="#HowOrder" class="HeaderNav-Link">
                    Оплата
                </a>
                <a href="#Delivery" class="HeaderNav-Link">
                    Доставка
                </a>
            </nav>

            <div class="Header-Social HeaderSocial">
                <a href="https://www.instagram.com/guarchibaoline/"
                   target="_blank"
                   class="HeaderSocial-Item">
                    <img src="<?php echo get_template_directory_uri() . '/img/instagram.png' ?>"
                         alt=""
                         class="HeaderSocial-Img">
                </a>
                <a href="https://www.facebook.com/guarchibaoline" class="HeaderSocial-Item"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/img/fb.png' ?>"
                         alt=""
                         class="HeaderSocial-Img">
                </a>
                <a href="https://ok.ru/guarchibaoline" class="HeaderSocial-Item"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/img/ok.png' ?>"
                         alt=""
                         class="HeaderSocial-Img">
                </a>
                <a href="https://vk.com/guarchibaoline" class="HeaderSocial-Item"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/img/vk.png' ?>"
                         alt=""
                         class="HeaderSocial-Img">
                </a>
            </div>

            <div class="Header-Info HeaderInfo">
                <a href="tel:<?=preg_replace("/[^0-9]/", '', $phone);?>"
                   class="HeaderInfo-Phone HeaderPhone">
                    <span class="HeaderPhone-Number"><?=$phone?></span>
                </a>
                <span class="HeaderInfo-Text">по всему миру</span>
            </div>

            <div class="DefmenuBtn Header-DefmenuBtn">
                <div class="DefmenuBtn-Icon">
                    <span class="DefmenuBtn-Line"></span>
                    <span class="DefmenuBtn-Line"></span>
                    <span class="DefmenuBtn-Line"></span>
                </div>
            </div>
        </div>
    </div>

</header>
