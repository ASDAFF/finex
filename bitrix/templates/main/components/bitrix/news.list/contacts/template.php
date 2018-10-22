<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$IBLOCK_SECTION_ID = $arResult["ITEMS"][0]["IBLOCK_SECTION_ID"];

?>

<?


    foreach ($arResult["ITEMS"] as $key=>$arItem){?>
        <?

     if($arItem["PROPERTIES"]["files"]["~VALUE"]){
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        ?>

<div class="row">

    <div class="col-lg-8 contact2">
        <!-- slider -->

        <div class="slider-wrapper">

            <div class="slider">
<?
foreach($arItem["PROPERTIES"]["files"]["~VALUE"] as $key2=>$id){
    $image= CFile::GetFileArray($id);
    ?>
    <div class="item item1" style="background:url(<?=$image['SRC']?>) no-repeat center;">
        <div>
           <?=$arItem["PROPERTIES"]["files"]["~DESCRIPTION"][$key2]?>
        </div>
    </div>
<?}?>
            </div>

        </div>

        <!-- end slider -->
    </div>
    <div class="col-lg-4 contact1">
        <div class="contacts5" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <h3><?
                echo $arItem["NAME"]; ?></h3>
            <div class="contact6_wrapper">
                <?
                echo $arItem["PREVIEW_TEXT"]; ?>
            </div>
            <a href="#contact_modal_<?
            echo $arItem["ID"]; ?>" class="map_modal" data-toggle="modal">
                Показать на карте
            </a>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade  modal_project" id="contact_modal_<?
    echo $arItem["ID"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body modal_body_contact">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="map_wr">
                                <?
                                echo $arItem["PROPERTIES"]["map"]["~VALUE"]; ?>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <div class="map_text">
                                <h2><?
                                    echo $arItem["NAME"]; ?></h2>
                                <?
                                echo $arItem["PREVIEW_TEXT"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?



         unset($arResult["ITEMS"][$key]);
         break;
     }

}
        ?>


</div>

<div class="row section-heading region">
    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/contacts/text2.php"), false); ?>



</div>

<div class="row contact5">
    <?
    $ii = 0;
    foreach ($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $ii++;

        ?>

        <div class="col-lg-6 contactItem" >
            <div class="row" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                    <div class="col-md-6 contactItem1">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?
                        echo $arItem["NAME"]; ?>">
                    </div>
                    <div class="col-md-6 contactItem2">
                        <div class="contacts5">
                            <h3><?
                                echo $arItem["NAME"]; ?></h3>
                            <div class="contact6_wrapper">
                                <?
                                echo $arItem["PREVIEW_TEXT"]; ?>

                            </div>
                            <a href="#contact_modal_<?
                            echo $arItem["ID"]; ?>" class="map_modal" data-toggle="modal">Показать на карте</a>
                        </div>
                    </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade  modal_project" id="contact_modal_<?
        echo $arItem["ID"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body modal_body_contact">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="map_wr">
                                    <?
                                    echo $arItem["PROPERTIES"]["map"]["~VALUE"]; ?>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-center">
                                <div class="map_text">
                                    <h2><?
                                        echo $arItem["NAME"]; ?></h2>
                                    <?
                                    echo $arItem["PREVIEW_TEXT"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?

    endforeach;
    ?>


</div>



