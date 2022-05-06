<div>
    <script type="text/javascript" src="/wp-content/themes/nutrix/js/im-js.js"></script>
    <div class="ImCallback">
        <div class="ImCallback-Body">
            <p class="ImCallback-Title">Вы выбрали <b><?=$_GET['zag1'];?></b></p>
            <p class="ImCallback-Subtitle">Введите контактные данные</p>
            <form class="ImCallback-Form Form ImCallbackForm" id="form10" data-reachgoal="<?=$_GET['reachgoal'];?>">
                <div class="ImCallbackForm-FormBg">
                    <div class="Container">
                        <div class="Form-Row Form-Row_col2">
                            <div class="Form-Column">
                                <div class="Form-Row">
                                    <p class="ImCallbackForm-Heading">
                                        Выберите Фитококтейль:
                                    </p>
                                    <ul class="ImCallbackForm-ProductList">
                                        <li class="ImCallbackForm-ProductList-Item">
                                            <label class="Radio">
                                                <input  class="Radio-Control"
                                                        type="radio"
                                                        value="Guarchibao Sachets"
                                                        name="product-type"
                                                        checked>
                                                <span class="Radio-Wrap">
                                                      <span class="Radio-Dot"></span>
                                                      <span class="Radio-Name">
                                                          Guarchibao Sachets
                                                      </span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="ImCallbackForm-ProductList-Item">
                                            <label class="Radio">
                                                <input class="Radio-Control"
                                                       type="radio"
                                                       value="Guarchibao Sachets"
                                                       name="product-type">
                                                <span class="Radio-Wrap">
                                                      <span class="Radio-Dot"></span>
                                                      <span class="Radio-Name">
                                                          Guarchibao Dianorm (для людей,<br> страдающих диабетом 1 и 2 типа)
                                                      </span>
                                                </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="Form-Row">
                                    <div class="Input">
                                        <input
                                            placeholder="Введите ваше имя"
                                            name="name"
                                            class="Input-Control"
                                            data-validator="letters"
                                            data-required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="Form-Column">
                                <div class="Form-Row">
                                    <div class="Input">
                                        <input
                                            type="tel"
                                            placeholder="Введите телефон"
                                            name="phone"
                                            class="Input-Control MaskedPhone1"
                                            data-validator="regexp"
                                            data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                            data-required
                                        />
                                    </div>
                                </div>
                                <div class="Form-Row">
                                    <textarea
                                        class="Textarea ImCallbackForm-Textarea"
                                        name="delivery-address"
                                        placeholder="Адрес доставки:"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                        <img src="/wp-content/themes/nutrix/img/ImCallbackForm-Leaf_left.png"
                             alt=""
                             class="ImCallbackForm-Leaf ImCallbackForm-Leaf_left">
                        <img src="/wp-content/themes/nutrix/img/ImCallbackForm-Leaf_right.png"
                             alt=""
                             class="ImCallbackForm-Leaf ImCallbackForm-Leaf_right ">
                    </div>
                </div>
                <div class="Form-Row">
                    <input name="head_mess" type="hidden" value="<?=$_GET['headmess'];?>">
                    <input name="page_id" type="hidden" value="<?=$_GET['page_id'];?>">
                    <button class="Btn Form-Btn ImCallback-Btn">
                        Далее
                    </button>
                    <div class='ImCallback-ProcessingPersonalDataText ProcessingPersonalDataText'>
                        Нажимая на кнопку, вы соглашаетесь на обработку персональных<br> данных и с условиями публичного договора оферты
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>