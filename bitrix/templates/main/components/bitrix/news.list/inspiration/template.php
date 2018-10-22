<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<!-- top baner section -->
<div class="banner_main">
   <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/inspiration/img.php"), false);?>

</div>
<!-- end top baner section -->

<!-- three sections -->

<div class="single-section three-sections ">

    <div class="row section-heading" style=" margin-top: 30px; ">

        <h2 class="main_caption"><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/inspiration/h2.php"), false);?>
        </h2>
        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/inspiration/text.php"), false);?>


    </div>

    <div class="row ">

<?
$ii=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $ii++;
	if($ii%3==1)$class='first';
	if($ii%3==2)$class='second';
	if($ii%3==0)$class='third';
	?>

    <div class="col-md-4">
        <div class="<?=$class?> oneItem" style="background:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat ;"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <div class="table">

                <h3><?echo $arItem["NAME"];?></h3>

                <p><?echo $arItem["PREVIEW_TEXT"];?></p>

                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="brown">подробнее</a>

            </div>

        </div>

    </div>
<?endforeach;?>

</div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
       <?=$arResult["NAV_STRING"]?>
    <?endif;?>

</div>
