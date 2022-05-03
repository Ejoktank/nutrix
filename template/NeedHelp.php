<section class="NeedHelp" id="NeedHelp">
    <div class="Container">
        <div class="NeedHelp-Body">
            <div class="NeedHelp-Content">
                <h2 class="Heading Heading_lvl2 NeedHelp-Heading">
                    Нужна помощь?
                </h2>
                <p class="NeedHelp-Subheading">
                    Задайте свой вопрос
                </p>
                <form class="Form NeedHelp-Form NeedHelpForm" id="form-need-help" data-reachgoal="need">
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
                                    placeholder="Телефон"
                                    name="phone"
                                    class="Input-Control MaskedPhone"
                                    data-validator="regexp"
                                    data-validator-pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$"
                                    data-required
                            />
                        </div>
                    </div>
                    <div class="Form-Row">
                        <textarea
                                class="Textarea NeedHelpForm-Textarea"
                                name="delivery-address"
                                placeholder="Ваш вопрос..."
                        ></textarea>
                    </div>
                    <div class="Form-Row">
                        <p class="NeedHelpForm-Personal">
                            Нажимая на кнопку, вы соглашаетесь на обработку персональных данных
                        </p>
                    </div>
                    <div class="Form-Row">
                        <input name="head_mess" type="hidden" value="">
                        <input name="page_id" type="hidden" value="<?=$page_id;?>">
                        <button class="Btn Form-Btn">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
            <div class="NeedHelp-Img">
                <img src="<?php echo get_template_directory_uri() . '/img/NeedHelp.png' ?>" alt="" srcset="">
            </div>
        </div>
    </div>
</section>