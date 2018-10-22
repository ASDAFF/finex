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
<!-- top baner section -->
<div class="banner_main">
    <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/media/img.php"), false); ?>

</div>
<!-- end top baner section -->
<div class="media_section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">

                    <h2><? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/media/h2.php"), false); ?></h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h3 <? if ($IBLOCK_SECTION_ID == 18){ ?>class="active"<? } ?>><a
                            href="/media/news/"><? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/media/h3_1.php"), false); ?></a>
                </h3>
                <h3 <? if ($IBLOCK_SECTION_ID == 17){ ?>class="active"<? } ?>><a
                            href="/media/finex-na-tv/"><? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/media/h3_2.php"), false); ?></a>
                </h3>
                <h3 <? if ($IBLOCK_SECTION_ID == 19){ ?>class="active"<? } ?>><a
                            href="/media/sotsialnye-seti/"><? $APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/media/h3_3.php"), false); ?></a>
                </h3>
            </div>
        </div>
        <? if ($IBLOCK_SECTION_ID != 17) { ?>
            <?
            $ii = 0;
            foreach ($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $ii++;
                if ($ii % 2 == 1) echo '<div class="row">';

                ?>

                <div class="col-lg-6">
                    <div class="media_section_item_news clearfix" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="news">
                        <div class="media_section_item_news_text">
                            <h5><?
                                echo $arItem["NAME"]; ?></h5>
                            <p class="media_section_item_news_date text-uppercase"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
                            <?
                            echo $arItem["PREVIEW_TEXT"]; ?>
                            <a href="<?
                            echo $arItem["DETAIL_PAGE_URL"] ?>" class="media_section_item_news_link">Читать новость</a>
                        </div>
                    </div>
                </div>

                <?
                if ($ii % 2 == 0) echo '</div>';

            endforeach;
            if ($ii % 2 == 1) echo '</div>';
        } else {

            $ii = 0;
            foreach ($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


                if (!empty($arItem["PROPERTIES"]["video"]["VALUE"])) {
                    $ii++;

                    if ($ii % 2 == 1) echo '<div class="row">';
                    ?>


                    <div class="col-md-6">
                        <div class="media_section_item clearfix" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="media_section_video">

<?if(strpos($arItem["PROPERTIES"]["video"]["VALUE"],'iframe' )){?>
  <?= $arItem["PROPERTIES"]["video"]["~VALUE"] ?>


                        <?}else{?>
                                <video controls="">
                                    <source src="<?= $arItem["PROPERTIES"]["video"]["~VALUE"] ?>" type="video/mp4">
                                </video>
                        <?}?>
                            </div>

                            <div class="media_section_text">
                                <h5><?
                                    echo $arItem["NAME"]; ?></h5>
                                <?
                                echo $arItem["PREVIEW_TEXT"]; ?>
                            </div>
                        </div>

                    </div>

                <?
                    if ($ii % 2 == 0) echo '</div>';
                }


            endforeach;
            if ($ii % 2 == 1) echo '</div>';
        }
        ?>


            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <?= $arResult["NAV_STRING"] ?>
            <? endif; ?>

    </div>

</div>


