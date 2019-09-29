<?php $title = "Вход в личный кабинет" ?>
<?php require_once '_header.php'?>

<div class="about-line"></div>

<section class="form-section contacts-form">
    <form action="#" class="form">
        <div class="form-wrap">
            <div class="container">

                <div class="form-top">
                    <span class="form-bottom__top profession-form__title contacts-form__title">Войти в учебный кабинет</span>
                    <span class="form-bottom__second contacts-form__bottom">Авторизация</span>
                </div>
                <div class="form-body">
                    <input class="form-input form-input__email" type="text" placeholder="Email*" name="email">
                    <span class="form-input__span form-input__span-email">Поле "Email" обязательно к заполнению и должно содержать существующий электронный адрес</span>
                    <input class="form-input form-input__password" type="password" placeholder="Пароль*" name="password">
                    <span class="form-input__span form-input__span-password">Поле "Пароль" обязательно к заполнению</span>
                </div>
            </div>

        </div>

        <div class="login-submit">
            <span class="form-bottom__top profession-form__btn contacts-form__btn">Вход</span>
        </div>
    </form>
    <div class="form-descr">
        <span class="contacts-call login-forgot"><a href="remind-password.php">Забыли пароль?</a></span>
    </div>
</section>

<?php require_once '_menu.php'?>
<?php require_once '_icons.php'?>
<?php require_once '_footer.php'?>