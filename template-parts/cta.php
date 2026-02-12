<section class="section cta">
    <div class="background-grey section__cta">
        <img class="cta__image" src="./images/cta-img.png" alt="" loading="lazy">
        <div class="cta__form-wrapper container">
            <form action="./src/handler.php" method="POST" class="cta__form">
                <h2 class="section__title cta__title">Хотите сотрудничать?</h2>
                <p class="cta__description">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
                    ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
                <div class="input__group-wrapper">
                    <div class="input__group">
                        <input type="text" class="input__group-input" id="user-name" name="username" placeholder=" " maxlength="100"
                            required>
                        <label class="input__group-label" for="user-name">Имя</label>
                    </div>
                    <div class="input__group">
                        <input id="user-phone" type="tel" class="input__group-input phone-mask" name="userphone" placeholder=" " maxlength="30"
                            required>
                        <label class="input__group-label" for="user-phone">Номер
                            телефона</label>
                    </div>
                </div>
                <div class="cta__form-footer">
                    <button type="submit" class="button button--cta">Отправить заявку</button>
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
</section>