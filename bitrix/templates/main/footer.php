<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!-- bottom section -->

<div class="single-section bottom">

    <div class="container">

        <div class="row">

            <div class="col-md-6" style="    margin-bottom: -1px;">
                <a href="/about/mobilnyy-shou-rum/">
                <div class="inner">
                    <p class="ts">вызвать
                        мобильный шоу-рум finex</p>

                    <img src="/src/images/van.png">

                </div>
                </a>
            </div>

            <div class="col-md-6">

                <div class="inner">

                    <p>рассчитать
                        стоимость
                        вашего пола

                        <span><input type="tel" placeholder="введите ваш номер телефона и мы свяжемся с вами"></span>

                    </p>


                    <img src="/src/images/boards.png">

                </div>

            </div>

        </div>

        <div class="row form">

            <div class="col-md-6">

                <p>подпишитесь на рассылку</p>
                <p class="smaller">Получайте новости и обновления от компании FINEX</p>

            </div>

            <div class="col-md-6">

                <span>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/sender.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
);?>


                </span>

            </div>

        </div>

    </div>

</div>

<!-- end bottom section -->
<!-- footer -->

<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-10">

                <div class="row">

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/about.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>


                    </div>

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/catalog.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom2",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>

                    </div>

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/ykladka.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom3",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>

                    </div>

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/polezno.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom4",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>

                    </div>

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/spec.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom5",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>

                    </div>

                    <div class="col">

                        <h4><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer/contacts.php"), false);?></h4>
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                            "ROOT_MENU_TYPE" => "bottom6",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>

                    </div>

                </div>

            </div>

            <div class="col-md-2">

                <div class="col">

                    <h4>FOLLOW US</h4>

                    <ul class="social">

                        <li><a href="#!"><img src="/src/images/facebook.svg"></a></li>

                        <li><a href="#!"><img src="/src/images/pinterest.svg"></a></li>

                        <li><a href="#!"><img src="/src/images/instagram.svg"></a></li>

                        <li><a href="#!"><img src="/src/images/youtube.svg"></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</footer>

<!-- end footer -->

<!--build:js js/main.min.js -->
<script src="/src/js/lib/jquery-3.3.1.min.js"></script>
<script src="/src/js/lib/bootstrap.bundle.min.js"></script>
<script src="/src/js/lib/slick.min.js"></script>
<script src="/src/js/main.js"></script>
<!-- endbuild -->
</body>

</html>