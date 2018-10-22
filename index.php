<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");
?>



    <!-- slider -->

    <div class="slider-wrapper">


            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "slider_frontpage",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "SORT",
                        2 => "DETAIL_PICTURE",
                        3 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => 7,
                    "IBLOCK_TYPE" => "slider",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "slider_frontpage"
                ),
                false
            );

?>

        <i class="arrow-down"></i>

    </div>

    <!-- end slider -->


    <!-- presentation section-->

    <div class="present">


        <div class="container">

            <div class="row mobile-only">

                <div class="col col-md-4">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img1.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text1.php"), false);?>

                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img2.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text2.php"), false);?>
                        </div>
                </div>

                <div class="col col-md-4">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img3.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text3.php"), false);?>
                    </div>
                </div>


                <div class="col col-md-3">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img4.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text4.php"), false);?>
                    </div>
                </div>

                <div class="col col-md-3">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img5.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text5.php"), false);?>
                    </div>
                </div>

                <div class="col col-md-3">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img6.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text6.php"), false);?>
                    </div>
                </div>

                <div class="col col-md-3">
                    <div class="inner">
                        <div class="thumb-wrapper"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_img7.php"), false);?></div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/present_text7.php"), false);?>
                    </div>
                </div>

            </div>

            <div class="item-slick-nav"></div>

        </div>

    </div>

    <!-- end presentation section-->


    <!-- showcase section-->

    <div class="single-section showcase">


    <div class="container">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/showcase_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/showcase_text.php"), false);?>


        </div>

        <div class="row items showcase-items">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/showcase_items.php"), false);?>


        </div>

        <div class="showcase-nav-dots"></div>

    </div>
    </div>


    <!-- end showcase section-->

    <!-- banner section -->

    <div class="single-section banner">

        <div class="row" style="background:url(images/banner1.png) no-repeat center;">

            <div class="table">

                <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/banner_h2.php"), false);?>
                </h2>

                <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/banner_text.php"), false);?>


                <a href="/about/" class="brown">подробнее</a>

            </div>

        </div>

    </div>

    <!-- end banner section -->

    <!-- accordion section -->

    <div class="single-section">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/project_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/project_text.php"), false);?>

        </div>

        <div class="slider-containers">
            <div class="slider-container">
                <div class="flexbox-slider flexbox-slider-1">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/gallary_items.php"), false);?>


                </div>
            </div>



        </div>

        <div class="button-bar">

            <div class="flexbox-nav-dots"></div>

            <a href="/gallary/" class="brown">подробнее</a>

        </div>

    </div>

    <!-- end accordion section -->

    <!-- three sections -->

    <div class="single-section three-sections">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_text.php"), false);?>

        </div>

        <div class="row threes-slider">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_items.php"), false);?>


        </div>

        <div class="threes-nav-dots"></div>

    </div>

    <!-- end three sections -->

    <!-- 360 section -->

    <div class="single-section s360">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_text.php"), false);?>

        </div>

        <div class="row cont">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_img.php"), false);?>


            <div class="col-md-4 align-middle">

                <div class="table">

      <span>

    <h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h3.php"), false);?></h3>
          <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
              array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h3_text.php"), false);?>


      </span>

                </div>

            </div>

        </div>

    </div>

    <!-- end 360 section -->

<?
/*
?>

<h2>Тренды сезона</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	".default",
	array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => "2",
		"BASKET_URL" => "/personal/cart/",
		"COMPONENT_TEMPLATE" => "",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "12",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "desc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "5",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"ADD_TO_BASKET_ACTION" => "ADD",
		"PAGER_TEMPLATE" => "round",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>