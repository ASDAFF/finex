<?
global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'custom_pages ';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("gallary");
?>

    <!-- top baner section -->

    <div class="banner_main">
        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/gallary/img.php"), false);?>
    </div>

    <!-- end top baner section -->


    <!-- gallery section -->
    <div class="gallery_section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/gallary/h2.php"), false);?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <p class="gallery_text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/gallary/text.php"), false);?>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="about_developer_pdf">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/gallary/file.php"), false);?>

                    </div>
                </div>
            </div>


            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "gallary",
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
                    "IBLOCK_ID" => 4,
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
                    "SORT_BY2" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "gallary"
                ),
                false
            );

            ?>


        </div>

    </div>
    <!-- end gallery section -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>