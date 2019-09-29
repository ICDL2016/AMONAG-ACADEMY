<?php $title = "Контакты" ?>
<?php require_once '_header.php'?>
<section class="form-section contacts-form">
    <form action="#" class="form">
        <div class="form-wrap">
            <div class="container">

                <div class="form-top">
                    <span class="form-bottom__top profession-form__title contacts-form__title">Контакты Бизнес Академии МБА СИТИ</span>
                    <span class="form-bottom__second contacts-form__bottom">Написать</span>
                </div>
                <div class="form-body">
                    <textarea class="contacts-textarea" rows="4" name="message" placeholder="Сообщение"></textarea>

                    <div class="form-checkbox__block">
                        <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                        <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-bottom">
            <span class="form-bottom__top profession-form__btn contacts-form__btn">Отправить</span>
        </div>
    </form>
    <div class="form-descr">
        <span class="contacts-call">Позвонить</span>
        <strong><a href="tel:88003509434"></a>8 800 350-94-34</strong>
        <span>Звонок бесплатный</span>
        <span class="contacts-consult">Вас проконсультируют с 10 до 19 по мск:</span>
    </div>
</section>

<section class="contacts-block">
    <div class="container">

        <div class="contacts-managers__title">Менеджеры учебного отдела:</div>
        <div class="contacts-managers">
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Анна</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Евгений</div>
            </div>
            <div class="contacts-manager">
                <div class="contacts-manager__img">
                    <img src="img/contacts/person.png" alt="photo">
                </div>
                <div class="contacts-manager__name">Татьяна</div>
            </div>
        </div>

        <div class="contacts-address__title">Адрес и схема проезда:</div>
        <div class="contacts-address">г. Москва, (ст. метро Белорусская),
            ул. Бутырский Вал, дом 10, <br>
            Бизнес-центр "Белая площадь"
        </div>
    </div>

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7230bd9a725108e3a079ce80c4f7407b4cfc38c1f44eee3397cf1b2b041ec70b&amp;width=100%25&amp;height=541&amp;lang=ru_RU&amp;scroll=false"></script>


</section>

<div class="contacts-gallery">
    <a href="img/contacts/1.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/1.jpg" alt="photo"></a>
    <a href="img/contacts/2.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/2.jpg" alt="photo"></a>
    <a href="img/contacts/3.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/3.jpg" alt="photo"></a>
    <a href="img/contacts/4.jpg" class="fancybox-buttons" data-fancybox-group="button"><img src="img/contacts/4.jpg" alt="photo"></a>
</div>

<div class="margin-help"></div>

<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_social.php'?>
<?php require_once '_footer.php'?>













