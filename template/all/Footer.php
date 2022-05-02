<footer class="Footer">
    <div class="Container">
        <div class="Footer-Body">
            <div class="Footer-Left">
                <p class="Footer-Phone">
                    Горячая линия
                    <a href="tel:<?=preg_replace("/[^0-9]/", '', $phone);?>"
                       class="Footer-PhoneLink">
                        <?=$phone?>
                    </a>
                </p>
                <p class="Footer-WorkText">
                    Работаем по всему миру
                </p>
                <ul class="Footer-Social FooterSocial">
                    <li class="FooterSocial-Item">
                        <a href="https://vk.com/guarchibaoline"
                           target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/vk.png' ?>" alt="" class="FooterSocial-Icon">
                        </a>
                    </li>
                    <li class="FooterSocial-Item">
                        <a href="https://www.instagram.com/guarchibaoline/"
                           target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/instagram.png' ?>" alt="" class="FooterSocial-Icon">
                        </a>
                    </li>
                    <li class="FooterSocial-Item">
                        <a href="https://www.facebook.com/guarchibaoline"
                           target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/fb.png' ?>" alt="" class="FooterSocial-Icon">
                        </a>
                    </li>
                    <li class="FooterSocial-Item">
                        <a href="https://ok.ru/guarchibaoline"
                           target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/img/ok.png' ?>" alt="" class="FooterSocial-Icon">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="Footer-Center">
                <ul class="Footer-LinkList FooterLinkList">
                    <!--<li class="FooterLinkList-Item">
                        <a class="FancyBtn FooterLinkList-Link"
                           data-fancybox
                           data-type="ajax"
                           data-src="/im-blocks/politic.php"
                           href="javascript:;">
                            Политика конфиденциальности
                        </a>
                    </li>
                    <li class="FooterLinkList-Item">
                        <a class="FancyBtn FooterLinkList-Link"
                           data-fancybox
                           data-type="ajax"
                           data-src="/im-blocks/politic.php"
                           href="javascript:;">
                            Согласие на обработку персональных данных
                        </a>
                    </li>
                    <li class="FooterLinkList-Item">
                        <a class="FancyBtn FooterLinkList-Link"
                           data-fancybox
                           data-type="ajax"
                           data-src="/im-blocks/politic.php"
                           href="javascript:;">
                            Договор оферта
                        </a>
                    </li>-->
                    <li class="FooterLinkList-Item">
                        <a class="FooterLinkList-Link"
                           href="/files/politika.pdf"
                           target="_blank">
                            Политика конфиденциальности
                        </a>
                    </li>
                    <li class="FooterLinkList-Item">
                        <a class="FooterLinkList-Link"
                           href="/files/soglasie.pdf"
                           target="_blank">
                            Согласие на обработку персональных данных
                        </a>
                    </li>
                    <li class="FooterLinkList-Item">
                        <a class="FooterLinkList-Link"
                           href="/files/publichnay_oferta.pdf"
                           target="_blank">
                            Договор оферта
                        </a>
                    </li>
                </ul>
            </div>
            <div class="Footer-Right">
                <img src="/img/Footer-Logo.png" alt="" class="Footer-Logo">
                <p class="Footer-Copyright">
                    Copyright © 2019 Guarchibao.<br> Все права защищены
                </p>
            </div>
            <a href="#Intro" class="Footer-ArrowToTop">
                <img src="/img/Footer-ArrowToTop-Icon.png" alt="" class="Footer-ArrowToTop-Icon">
            </a>
        </div>
    </div>
</footer>

<div class="ImThanks">
    <!--<img src="/img/ImThanks-Leaf.png" alt="" class="ImThanks-Leaf">
    <div class="ImThanks-Title">
        Спасибо за покупку!
    </div>
    <div class="ImThanks-Subtitle">
        Подтверждение заказа придет на указанный e-mail.
    </div>
    <p class="ImThanks-SocialTitle">
        Добавляйтесь в официальные аккаунты:
    </p>
    <figure class="ImThanks-Social">
        <img src="/img/instagram.png"
             alt=""
             class="ImThanks-Social-Img">
        <figcaption>@guarchibaoline</figcaption>
    </figure>-->
</div>

