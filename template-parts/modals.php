<div class="modal modal__question">
    <div class="modal__dialog">
        <h2 class="modal__title">Есть вопросы?</h2>
        <button class="modal__close-button" type="button" data-js-header-close-modal-button>
            <svg width="18" height="18">
                <use href="./images/sprites.svg#closeButton"></use>
            </svg>
        </button>
        <p class="modal__text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="./handler.php" method="POST" class="modal__form">
            <div class="input__group-wrapper input__group-wrapper--vertical">
                <div class="input__group input__group--modal">
                    <input type="text" class="input__group-input input__group-input--modal" id="user-name-modal"
                        name="username" placeholder=" " required>
                    <label class="input__group-label input__group-label--modal" for="user-name-modal">Имя</label>
                </div>
                <div class="input__group input__group--modal">
                    <input id="user-phone-modal" type="tel"
                        class="input__group-input input__group-input--modal phone-mask" name="userphone" placeholder=" "
                        required>
                    <label class="input__group-label input__group-label--modal" for="user-phone-modal">Номер
                        телефона</label>
                </div>
            </div>
            <div class="cta__form-footer cta__form-footer--vertical">
                <button type="submit" class="button button--cta button-modal">Отправить заявку</button>
                <div class="notify">
                    <svg class="notify__icon" width="14" height="14">
                        <use href="./images/sprites.svg#notify-icon"></use>
                    </svg>
                    <p class="cta__form-notify">
                        Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                        конфиденциальность информации!
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal modal--success">
    <div class="modal__dialog ">
        <img src="./images/modal-image/thanks_illu.png" alt="">
        <h2 class="modal__title ">Спасибо за заявку!</h2>
        <button class="modal__close-button" type="button" data-js-header-close-modal-button>
            <svg width="18" height="18">
                <use href="./images/sprites.svg#closeButton"></use>
            </svg>
        </button>
        <p class="modal__text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
            поможем даже в самых сложных случаях!</p>
        <a href="./index.php" class="button button--cta button-modal">Вернуться на главную</a>
    </div>
</div>