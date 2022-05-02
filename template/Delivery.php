<section class="Delivery" id="Delivery">
    <div class="Container">
        <div class="Delivery-Body">
            <div class="Delivery-Left">
                <h2 class="Delivery-Heading">
                    Доставка курьером или&nbsp;почтой России
                </h2>
                <ul class="Delivery-List DeliveryList">
                    <li class="DeliveryList-Item">
                        Доставка в течение 14 рабочих дней.
                    </li>
                    <li class="DeliveryList-Item">
                        Бесплатная доставка при покупке курсов.
                    </li>
                </ul>
                <a href="tel:<?=preg_replace("/[^0-9]/", '', $phone);?>"
                   class="Delivery-Phone">
                    <?=$phone?>
                </a>
                <ul class="Delivery-List DeliveryList">
                    <li class="DeliveryList-Item">
                        Ежедневно с 9:00 до 21:00 по мск
                    </li>
                </ul>
            </div>
            <div class="Delivery-Right">
                <ul class="Delivery-Partner DeliveryPartner">
                    <li class="DeliveryPartner-Item">
                        <img src="<?php echo get_template_directory_uri() . '/img/DeliveryPartner-Img1.png' ?>"
                             alt=""
                             class="DeliveryPartner-Img">
                    </li>
                    <li class="DeliveryPartner-Item">
                        <img src="<?php echo get_template_directory_uri() . '/img/DeliveryPartner-Img2.png' ?>"
                             alt=""
                             class="DeliveryPartner-Img">
                    </li>
                    <li class="DeliveryPartner-Item">
                        <img src="<?php echo get_template_directory_uri() . '/img/DeliveryPartner-Img3.png' ?>"
                             alt=""
                             class="DeliveryPartner-Img">
                    </li>
                    <li class="DeliveryPartner-Item">
                        <img src="<?php echo get_template_directory_uri() . '/img/DeliveryPartner-Img4.png' ?>"
                             alt=""
                             class="DeliveryPartner-Img">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>