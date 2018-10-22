<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>
<?$APPLICATION->IncludeComponent("bitrix:main.include", "",
    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/finex/showcase_banner.php"), false);?>

<div class="single-section showcase">


    <div class="container">

        <div class="row section-heading">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/finex/showcase_text.php"), false);?>


        </div>

<?
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
		"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
		"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
		"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
	),
	$component,
	array("HIDE_ICONS" => "Y")
);

?>

    </div>
</div>
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
