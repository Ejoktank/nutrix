<div class="BurgerMenu">
    <div class="BurgerMenu-Content">
        <div class="BurgerMenu-Content-In">
            <div class="BurgerMenu-Top">
                <div class="BurgerMenu-Close">
                    <img class="BurgerMenu-Close-Icon icon-close"
                         src="<?php echo get_template_directory_uri() . '/img/icon-close.svg' ?>"
                         alt=""
                    >
                </div>
            </div>
            <nav class="BurgerMenu-LinksWrap" id="BurgerMenu-LinksWrap">
                <a href="#Product" class="BurgerMenu-Links">Продукция</a>
                <a href="#HowOrder" class="BurgerMenu-Links">Оплата</a>
                <a href="#Delivery" class="BurgerMenu-Links">Доставка</a>
            </nav>
            <div class="BurgerMenu-Footer">
                <a href="tel:<?=preg_replace("/[^0-9]/", '', $phone);?>"
                   class="BurgerMenu-Footer-Phone">
                    <?=$phone?>
                </a>
                <div class="BurgerMenu-Footer-Bot">
                    <p class="BurgerMenu-Footer-Text">
                        по всему миру
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>