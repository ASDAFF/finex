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
<div class=" col-md-3 flt">
    <div class="show-filter">
        <a href="#!">фильтры</a>
    </div>
	<div class=" bx-filter filter closed">
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;?>

				<?
				//not prices
				foreach($arResult["ITEMS"] as $key=>$arItem)
				{
					if(
						empty($arItem["VALUES"])
						|| isset($arItem["PRICE"])
					)
						continue;

					if (
						$arItem["DISPLAY_TYPE"] == "A"
						&& (
							$arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
						)
					)
						continue;
					?>
                    <div class="select-box bx-filter-block bx-filter-select-container" data-role="bx_filter_block">

                        <label><?=$arItem["NAME"]?></label>

<?
							$arCur = current($arItem["VALUES"]);
							switch ($arItem["DISPLAY_TYPE"])
							{
                                default://DROPDOWN
									$checkedItemExist = false;
									?>
                                    <div class="col-xs-12">
                                        <div class="bx-filter-select-container">
                                            <div class="bx-filter-select-block select-box" >
                                                <div class="bx-filter-select-text btn dropdown-toggle btn-select"  data-toggle="dropdown"  data-role="currentOption">
                                                    <?
                                                    foreach ($arItem["VALUES"] as $val => $ar)
                                                    {
                                                        if ($ar["CHECKED"])
                                                        {
                                                            echo $ar["VALUE"];
                                                            $checkedItemExist = true;
                                                        }
                                                    }
                                                    if (!$checkedItemExist)
                                                    {
                                                        echo GetMessage("CT_BCSF_FILTER_ALL");
                                                    }
                                                    ?>
                                                </div>
                                                <div class="bx-filter-select-arrow"></div>
                                                <input
                                                        style="display: none"
                                                        type="radio"
                                                        name="<?=$arCur["CONTROL_NAME_ALT"]?>"
                                                        id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
                                                        value=""
                                                />
                                                <?foreach ($arItem["VALUES"] as $val => $ar):?>
                                                    <input
                                                            style="display: none"
                                                            type="radio"
                                                            name="<?=$ar["CONTROL_NAME_ALT"]?>"
                                                            id="<?=$ar["CONTROL_ID"]?>"
                                                            value="<? echo $ar["HTML_VALUE_ALT"] ?>"
                                                        <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                    />
                                                <?endforeach?>
                                                <div class="bx-filter-select-popup" data-role="dropdownContent" >
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx-filter-param-label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
                                                                <a href="#!"><? echo GetMessage("CT_BCSF_FILTER_ALL"); ?></a>
                                                            </label>
                                                        </li>
                                                        <?
                                                        foreach ($arItem["VALUES"] as $val => $ar):
                                                            $class = "";
                                                            if ($ar["CHECKED"])
                                                                $class.= " selected";
                                                            if ($ar["DISABLED"])
                                                                $class.= " disabled";
                                                            ?>
                                                            <li>
                                                                <a href="#!"><label for="<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label<?=$class?>" data-role="label_<?=$ar["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')"><?=$ar["VALUE"]?></label></a>
                                                            </li>
                                                        <?endforeach?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

									<?
									break;
							}
							?>
                    </div>


				<?
				}
				?>
			<div class="row">
				<div class="col-xs-12 bx-filter-button-box">
					<div class="bx-filter-block">
						<div class="bx-filter-parameters-box-container" style="padding-left: 30px;">
							<input style="background: #8D7045;;color:#fff"
								class="btn btn-themes"
								type="submit"
								id="set_filter"
								name="set_filter"
								value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"
							/>

							<input style="color:#8D7045"
								class="btn btn-link"
								type="submit"
								id="del_filter"
								name="del_filter"
								value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
							/>
							<div   class="bx-filter-popup-result right" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
								<?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
								<span class="arrow"></span>
								<br/>
								<a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clb"></div>
		</form>
	</div>
</div>
<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>