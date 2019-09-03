<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title>Новый ЛК</title>
    <meta name="description" content="">


    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/f5757.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/f6060.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/f7272.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/f7676.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/f114114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/f120120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/f144144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/f152152.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/f3232.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/f9696.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/f1616.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#215fc6">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">


    <link rel="stylesheet" href="libs/animate/animate.css">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/cssnbusu.css">
    <link rel="stylesheet" href="css/main.css?v=2">
    <link rel="stylesheet" href="css/media.css">

    <script src="libs/modernizr/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

</head>

<body <?= strpos($_SERVER['REQUEST_URI'], 'user') != -1 ? '' : 'class="bg__white"'?>>
<header class="header">
    <div class="inner__content">
        <div class="logo__block jQtooltip" title="Главная страница">
            <a href="index.html"><img src="img/logo.png" alt=""></a>
        </div>


        <ul class="nav__btn">
            <!--<li>-->
            <!--<span class="language jQtooltip" title="Сменить язык сайта">Ru</span>-->
            <!--<ul class="lang__list">-->
            <!--<li><a href="#">EN</a></li>-->
            <!--<li><a href="#">ES</a></li>-->
            <!--<li><a href="#">DE</a></li>-->
            <!--<li><a href="#">FR</a></li>-->
            <!--<li><a href="#">IT</a></li>-->
            <!--<li><a href="#">PT</a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <li class="jQtooltip" title="Личный кабинет">
                <a class="icon__enter" href="#"><i class="fa fa-graduation-cap"></i></a>
            </li>
            <li>
					<span class="burger jQtooltip" title="Меню">
						<span></span>
						<span></span>
						<span></span>
					</span>
            </li>
        </ul>
        <div class="search__block">
            <div class="site__title">
                <a href="#">UB1</a>
            </div>
            <!--<div class="input__pole">-->
            <!--<input type="text" placeholder="Найти курс обучения в мультиязычном формате"/>-->
            <!--</div>-->
            <!--<div class="search__btn_block">-->
            <!--<a class="search__btn desktop__search_btn jQtooltip" title="Искать" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>-->
            <!--<a class="search__btn mobile__search_btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>-->
            <!--</div>-->
        </div>
        <div class="clear"></div>
    </div>
</header>
<div class="sidebar__nav">
    <ul>
        <li><a href="#">Все курсы</a></li>
        <li><a href="#">Языковые курсы</a></li>
        <li><a href="#">Маркетинг и реклама</a></li>
        <li><a href="#">Экономика</a></li>
        <li><a href="#">Дизайн</a></li>
        <li><a href="#">Мода</a></li>
        <li><a href="#">Психология</a></li>
        <li><a href="#">Ресторанный бизнес</a></li>
        <li><a href="#">Гостиничный бизнес</a></li>
        <li><a href="#">Журналистика и массовые коммуникации</a></li>
        <li><a href="#">AMONAG ACADEMY</a></li>
        <li><a href="#">Блог</a></li>
        <li><a href="#">Вопросы и ответы</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
</div>