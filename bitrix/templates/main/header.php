<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) die();
CJSCore::Init(array("fx"));
global $CUSTOM_CLASS;
$curPage = $APPLICATION->GetCurPage(true);
    $mainPage=false;
  if( $curPage=="/index.php")$mainPage=true;
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!--build:css css/styles.min.css-->
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/slick.css">
    <link rel="stylesheet" href="/src/css/styles.css">
    <link rel="stylesheet" href="/src/css/style.css">
    <!--endbuild--><style>body{
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <?

    $APPLICATION->SetAdditionalCSS("/bitrix/css/main/font-awesome.css");
    $APPLICATION->ShowHead();

    ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>

</head>
<body class="<?=$CUSTOM_CLASS?>">
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<!-- header -->

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <div class="brb">

            <a class="navbar-brand" <?if(!$mainPage){?>href="/"<?}else{?>name="mainTop"<?}?>><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"), false);?></a>
            <button class="navbar-toggler" type="button"></button>

        </div>

        <div class="collapser">

            <div class="row">

                <div class="col md-auto">
 <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/top_link.php"), false);?>

                    <div class="social">
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social.php"), false);?>
                    </div>


                </div>

                <div class="col md-auto">

                    <span class="mob-wrap"><a href="/wishlist/" ><i class="star"></i>Понравилось <?=count(unserialize($_COOKIE['wishlist']));?></a>
                        
                        <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "main", Array(
	"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
		"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
		"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
		"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
		"SHOW_PRODUCTS" => "N",	// Показывать список товаров
		"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
		"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
		"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
		"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
	),
	false
);?>
                        <a href="/search/"><i class="search"></i></a>
                    </span>

                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?>

                </div>

            </div>

            <div class="row">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"CACHE_SELECTED_ITEMS" => "N",
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>


            </div>

        </div>

    </div>

</nav>

<!-- end header -->


