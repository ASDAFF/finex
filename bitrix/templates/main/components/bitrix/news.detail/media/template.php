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
<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
<!-- top baner section -->
<div class="banner_main">
    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img-fluid" class="img-fluid">
</div>
<!-- end top baner section -->
<?endif?>
<!-- three sections -->

<div class="single-section three-sections ">

    <div class="row section-heading" style=" margin-top: 30px; ">

        <h2 class="main_caption"><?=$arResult["NAME"]?></h2>
       <div class="inscont">
        <?
        if(strlen($arResult["DETAIL_TEXT"])>0):?>
        <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
            <p<?echo $arResult["PREVIEW_TEXT"];?></p>
        <?endif?>

    </div>
    </div>
</div>
