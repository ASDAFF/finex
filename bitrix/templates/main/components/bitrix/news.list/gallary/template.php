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



    <div class="row ">

<?
$ii=0;
$count=count($arResult["ITEMS"]);
foreach($arResult["ITEMS"] as $key=>$arItem):?>
	<?$ii++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	?>
    <div class="col-lg-3 col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a href="#gal_modal<?=$arItem["ID"]?>" class="gal_project" data-toggle="modal">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
        </a>
    </div>
    <div class="modal fade bd-example-modal-lg modal_project" id="gal_modal<?=$arItem["ID"]?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="modal_project_img">
                        <a href="#gal_modal<?=$arResult["ITEMS"][$key+1]["ID"]?>" data-dismiss="modal" data-toggle="modal"><img src="/src/images/arrow-right-disabled.svg" alt="right" class="arrows arrows_right"></a>
                        <a href="#gal_modal<?=$arResult["ITEMS"][$key-1]["ID"]?>" data-dismiss="modal"  data-toggle="modal"><img src="/src/images/arrow-left-disabled.svg" alt="left" class="arrows arrows_left"></a>
                        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="img-fluid">
                    </div>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                    <div class="modal_project_description">
                        <span><?=$ii?> <sup>/<?=$count?></sup></span>
                        <span><?=$arItem["NAME"]?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>

</div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
       <?=$arResult["NAV_STRING"]?>
    <?endif;?>
