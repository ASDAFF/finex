<?global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'contact custom_pages custom_pages_ins ';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Где купить");
?>

    <!-- top baner section -->
    <div class="banner_main">
        <img src="/images/top-banner-contacts.jpg" alt="img-fluid" class="img-fluid">
    </div>
    <!-- end top baner section -->


    <!-- three sections -->

    <div class="single-section newSection">

        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2 class="main_caption">где купить</h2>
                </div>
                <p class="about_desinger_text">
                    Для вашего удобства мы расположили наши представительства <br>по всей России и в странах СНГ.
                </p>
            </div>

        </div>

        <?$APPLICATION->IncludeComponent("bitrix:news", "contacts", array(
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "6",
            "TEMPLATE_THEME" => "site",
            "NEWS_COUNT" => "100",
            "USE_SEARCH" => "N",
            "USE_RSS" => "Y",
            "NUM_NEWS" => "20",
            "NUM_DAYS" => "180",
            "YANDEX" => "N",
            "USE_RATING" => "N",
            "USE_CATEGORIES" => "N",
            "USE_REVIEW" => "N",
            "USE_FILTER" => "N",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "ASC",
            "CHECK_DATES" => "Y",
            "SEF_MODE" => "Y",
            "SEF_FOLDER" => "/contacts/",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_SHADOW" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_PANEL" => "Y",
            "SET_TITLE" => "Y",
            "SET_STATUS_404" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_ELEMENT_CHAIN" => "Y",
            "USE_PERMISSIONS" => "N",
            "PREVIEW_TRUNCATE_LEN" => "",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "PROPERTY_MAP",
                1 => "PROPERTY_FILES",
            ),
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "DISPLAY_NAME" => "Y",
            "META_KEYWORDS" => "-",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PAGER_TEMPLATE" => "arrows",
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "arrows",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SLIDER_PROPERTY" => "PICS_NEWS",
            "SEF_URL_TEMPLATES" => array(
                "news" => "",
                "section" => "",
                "detail" => "",
                "search" => "search/",
                "rss" => "rss/",
                "rss_section" => "",
            )
        ),
            false
        );?>



    </div>

    <!-- end three sections -->

    <div class="single-section newSection2">

        <div class="row section-heading">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/contacts/text3.php"), false); ?>



        </div>
        <div class="row persons">
            <div class="col-md-4">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/contacts/text4.php"), false); ?>


            </div>
            <div class="col-md-4">
                <? $APPLICATION->IncludeComponent("bitrix:main.include",
                    "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/contacts/text5.php"), false); ?>


            </div>
            <div class="col-md-4">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/contacts/text6.php"), false); ?>


            </div>
        </div>
    </div>

    <div class="single-section consult">
        <div class="row section-heading">
            <div class="col-md-8 form1">
                <h3>Получить консультацию</h3>
                <form class="row" method="post">
                    <div class="col-md-4">
                        <label for="name">Ваше имя и фамилия*</label><br />
                        <input type="text" name="name" value=""  id="name" />
                    </div>
                    <div class="col-md-4">
                        <label for="name">Телефон для связи*</label><br />
                        <input type="tel" name="phone" value=""  id="phone" />
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email*</label><br />
                        <input type="text" name="email" value=""  id="email" />
                    </div>
                    <div class="col-md-12">
                        <label for="message">Сообщение</label><br />
                        <textarea id="message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button>Получить консультацию</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>