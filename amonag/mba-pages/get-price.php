<?php $title = "Профессия" ?>
<?php require_once '_header.php'?>
<?php require_once '_video.php'?>
<section class="form-section price-form__section">
    <form action="#" class="form">
        <div class="form-wrap">
            <div class="container">

                <div class="form-top">
                    <span class="form-bottom__top">УЗНАЙТЕ СТОИМОСТЬ ОБУЧЕНИЯ В МБА СИТИ</span>
                    <span class="profession-form__top price-form__bottom">Зарегистрируйтесь чтобы начать обучение бесплатно и узнать стоимость со скидкой</span>
                </div>
                <div class="form-body">
                    <input class="form-input form-input__name" type="text" placeholder="Имя*" name="name">
                    <span class="form-input__span form-input__span-name">Поле "Имя" обязательно к заполнению</span>
                    <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                    <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
                    <input class="form-input form-input__email" type="text" placeholder="Телефон" name="phone">

                    <div class="form-checkbox__block">
                        <input class="form-checkbox" type="checkbox" name="checkbox" id="checkbox" checked>
                        <label class="form-label" for="checkbox">Согласие на обработку персональных данных</label>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-bottom">
            <span class="form-bottom__top profession-form__btn">Начать обучение бесплатно</span>
            <span class="form-bottom__second">Узнать стоимость, посмотреть демонстрационный курс и мой образец документа об обучении</span>
            <span class="form-bottom__date">сегодня 25.04.2019</span>
        </div>
    </form>
    <div class="form-descr">
        <strong><a href="tel:88003509434"></a>8 800 350-94-34</strong>
        <span>Звонок бесплатный</span>
    </div>
</section>

<img src="img/advantage4.png" alt="discount" class="price-discount">

<?php require_once '_about.php'?>
<?php require_once '_advantages.php'?>
<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_social.php'?>
<?php require_once '_footer.php'?>
