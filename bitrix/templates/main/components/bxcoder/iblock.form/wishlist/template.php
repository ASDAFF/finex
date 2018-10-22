<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!function_exists('printPropertyName'))
{
  function printPropertyName($propertyID, $arResult, $arParams)
  {
    if (intval($propertyID) > 0):?><?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"]?><?else:?><?=!empty($arParams["CUSTOM_TITLE_".$propertyID]) ? $arParams["CUSTOM_TITLE_".$propertyID] : GetMessage("IBLOCK_FIELD_".$propertyID)?><?endif?><?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?> <span class="starrequired">*</span><?endif;
  }
}

if(!function_exists('printProperty'))
{
  function printProperty($propertyID, $arResult, $arParams)
  {
		if (intval($propertyID) > 0)
		{
			if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T" && $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1")
				$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
			elseif (($arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"	|| $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N") && $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1")
				$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
		}
		elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
			$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";

		if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y")
		{
			$inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ? count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
			$inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
		}
		else
		{
			$inputNum = 1;
		}

		if($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
			$INPUT_TYPE = "USER_TYPE";
		else
			$INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];

		switch ($INPUT_TYPE):
			case "USER_TYPE":
				for ($i = 0; $i<$inputNum; $i++)
				{
					if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
					{
						$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["~VALUE"] : $arResult["ELEMENT"][$propertyID];
						$description = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["DESCRIPTION"] : "";
					}
					elseif ($i == 0)
					{
						$value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
						$description = "";
					}
					else
					{
						$value = "";
						$description = "";
					}
					echo call_user_func_array($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"],
						array(
							$arResult["PROPERTY_LIST_FULL"][$propertyID],
							array(
								"VALUE" => $value,
								"DESCRIPTION" => $description,
							),
							array(
								"VALUE" => "PROPERTY[".$propertyID."][".$i."][VALUE]",
								"DESCRIPTION" => "PROPERTY[".$propertyID."][".$i."][DESCRIPTION]",
								"FORM_NAME"=>"iblock_add",
							),
						));
				?><?
				}
				break;
			case "TAGS":
				$APPLICATION->IncludeComponent(
					"bitrix:search.tags.input",
					"",
					array(
						"VALUE" => $arResult["ELEMENT"][$propertyID],
						"NAME" => "PROPERTY[".$propertyID."][0]",
						"TEXT" => 'size="'.$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"].'"',
					), null, array("HIDE_ICONS"=>"Y")
				);
				break;
			case "HTML":
				$LHE = new CLightHTMLEditor;
				$LHE->Show(array(
					'id' => preg_replace("/[^a-z0-9]/i", '', "PROPERTY[".$propertyID."][0]"),
					'width' => '100%',
					'height' => '200px',
					'inputName' => "PROPERTY[".$propertyID."][0]",
					'content' => $arResult["ELEMENT"][$propertyID],
					'bUseFileDialogs' => false,
					'bFloatingToolbar' => false,
					'bArisingToolbar' => false,
					'toolbarConfig' => array(
						'Bold', 'Italic', 'Underline', 'RemoveFormat',
						'CreateLink', 'DeleteLink', 'Image', 'Video',
						'BackColor', 'ForeColor',
						'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyFull',
						'InsertOrderedList', 'InsertUnorderedList', 'Outdent', 'Indent',
						'StyleList', 'HeaderList',
						'FontList', 'FontSizeList',
					),
				));
				break;
			case "T":
				for ($i = 0; $i<$inputNum; $i++)
				{

					if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
					{
						$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
					}
					elseif ($i == 0)
					{
						$value = intval($propertyID) > 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
					}
					else
					{
						$value = "";
					}
				?>
		<textarea class="form-control" cols="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>" rows="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"]?>" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" placeholder="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"]?>"><?=$value?></textarea>
				<?
				}
			break;

			case "S":
			case "N":
				for ($i = 0; $i<$inputNum; $i++)
				{
					if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
					{
						$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
					}
					elseif ($i == 0)
					{
						$value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];

					}
					else
					{
						$value = "";
					}

					//

					switch ($arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"]) {
						case 'PHONE':
							$text_type = 'tel';
							break;
						case 'EMAIL':
							$text_type = 'email';
							break;
						default:
							$text_type = 'text';
							break;
					}
				?>
				<input class="form-control" type="<?=$text_type?>" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" value="<?=$value?>" placeholder="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"]?>"><?
				if($arResult["PROPERTY_LIST_FULL"][$propertyID]["USER_TYPE"] == "DateTime"):?><?
					$APPLICATION->IncludeComponent(
						'bitrix:main.calendar',
						'',
						array(
							'FORM_NAME' => 'iblock_add',
							'INPUT_NAME' => "PROPERTY[".$propertyID."][".$i."]",
							'INPUT_VALUE' => $value,
						),
						null,
						array('HIDE_ICONS' => 'Y')
					);
					?><br /><small><?=GetMessage("IBLOCK_FORM_DATE_FORMAT")?><?=FORMAT_DATETIME?></small><?
				endif
				?><?
				}
			break;

			case "F":
				for ($i = 0; $i<$inputNum; $i++)
				{
					$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
					?>
          <div class="file-inp">
		<input type="hidden" name="PROPERTY[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" value="<?=$value?>" />
		<input type="file" size="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>"  name="PROPERTY_FILE_<?=$propertyID?>_<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>" />
          </div>
					<?

					if (!empty($value) && is_array($arResult["ELEMENT_FILES"][$value]))
					{
						?>
	<input type="checkbox" name="DELETE_FILE[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" id="file_delete_<?=$propertyID?>_<?=$i?>" value="Y" /><label for="file_delete_<?=$propertyID?>_<?=$i?>"><?=GetMessage("IBLOCK_FORM_FILE_DELETE")?></label><br />
						<?

						if ($arResult["ELEMENT_FILES"][$value]["IS_IMAGE"])
						{
							?>
	<img src="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>" height="<?=$arResult["ELEMENT_FILES"][$value]["HEIGHT"]?>" width="<?=$arResult["ELEMENT_FILES"][$value]["WIDTH"]?>" border="0" /><br />
							<?
						}
						else
						{
							?>
	<?=GetMessage("IBLOCK_FORM_FILE_NAME")?>: <?=$arResult["ELEMENT_FILES"][$value]["ORIGINAL_NAME"]?><br />
	<?=GetMessage("IBLOCK_FORM_FILE_SIZE")?>: <?=$arResult["ELEMENT_FILES"][$value]["FILE_SIZE"]?> b<br />
	[<a href="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>"><?=GetMessage("IBLOCK_FORM_FILE_DOWNLOAD")?></a>]<br />
							<?
						}
					}
          if($inputNum>1)
          {
            ?>
            <script type="text/javascript">
              var files<?=$propertyID?> = 0;
              $("body").on("change",'.file-inp input[type="file"]', function(){
                var empty = false;
                $('.file-inp input[type="file"]').each(function(){
                  if(!$(this).val())
                    empty = true;
                });
                if(!empty) {
                  files<?=$propertyID?>++;
                  $(this).parent().after('<div class="file-inp"><input type="hidden" name="PROPERTY[<?=$propertyID?>]['+files<?=$propertyID?>+']" value="<?=$value?>" /><input type="file" size="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>"  name="PROPERTY_FILE_<?=$propertyID?>_' + files<?=$propertyID?> +'" /></div>');
                }
              });
            </script>
            <?
            break;
          }
				}

			break;
			case "L":

				if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["LIST_TYPE"] == "C")
					$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "checkbox" : "radio";
				else
					$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "multiselect" : "dropdown";

				switch ($type):
					case "checkbox":
					case "radio":
						foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
						{
							$checked = false;
							if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
							{
								if (is_array($arResult["ELEMENT_PROPERTIES"][$propertyID]))
								{
									foreach ($arResult["ELEMENT_PROPERTIES"][$propertyID] as $arElEnum)
									{
										if ($arElEnum["VALUE"] == $key)
										{
											$checked = true;
											break;
										}
									}
								}
							}
							else
							{
								if ($arEnum["DEF"] == "Y") $checked = true;
							}

							?>
			<input type="<?=$type?>" name="PROPERTY[<?=$propertyID?>]<?=$type == "checkbox" ? "[".$key."]" : ""?>" value="<?=$key?>" id="property_<?=$key?>"<?=$checked ? " checked=\"checked\"" : ""?> /><label for="property_<?=$key?>"><?=$arEnum["VALUE"]?></label><br />
							<?
						}
					break;

					case "dropdown":
					case "multiselect":
					?>
			<select name="PROPERTY[<?=$propertyID?>]<?=$type=="multiselect" ? "[]\" size=\"".$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"]."\" multiple=\"multiple" : ""?>">
				<option value=""><?echo GetMessage("CT_BIEAF_PROPERTY_VALUE_NA")?></option>
					<?
						if (intval($propertyID) > 0) $sKey = "ELEMENT_PROPERTIES";
						else $sKey = "ELEMENT";

						foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
						{
							$checked = false;
							if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
							{
								foreach ($arResult[$sKey][$propertyID] as $elKey => $arElEnum)
								{
									if ($key == $arElEnum["VALUE"])
									{
										$checked = true;
										break;
									}
								}
							}
							else
							{
								if ($arEnum["DEF"] == "Y") $checked = true;
							}
							?>
				<option value="<?=$key?>" <?=$checked ? " selected=\"selected\"" : ""?>><?=$arEnum["VALUE"]?></option>
							<?
						}
					?>
			</select>
					<?
					break;

				endswitch;
			break;
		endswitch;
  }
}

if($arParams["SCROLL_TO_FORM"]):?>
<a name="form<?=$arParams["IBLOCK_ID"]?>"></a>
<?endif;

if (!empty($arResult["ERRORS"])):?>
	<?=ShowError(implode("<br />", $arResult["ERRORS"]))?>
<?endif;
if (strlen($arResult["MESSAGE"]) > 0):?>
	<?=ShowNote($arResult["MESSAGE"])?>
<?else:?>

<form name="iblock_add" action="<?=POST_FORM_ACTION_URI?><?if($arParams["SCROLL_TO_FORM"]):?>#form<?=$arParams["IBLOCK_ID"]?><?endif?>" method="post" enctype="multipart/form-data">
	<?=bitrix_sessid_post()?>
	<?if ($arParams["MAX_FILE_SIZE"] > 0):?><input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" /><?endif?>
    <div class="row">

        <div class="col-md-4">

            <label>Ваше имя и фамилия <span>*</span></label>

            <input name="name" type="text" placeholder="Иван Иванов" required>

        </div>

        <div class="col-md-4">

            <label>Телефон для связи <span>*</span></label>

            <input type="tel" name="tel"  placeholder="+7 123 123-45-67" required>

        </div>

        <div class="col-md-4">

            <label>Email</label>

            <input type="email" name="email"   placeholder="ivan@ivan.art">

        </div>

    </div>

    <div class="row second">

        <div class="col-md-4">

            <button type="submit" class="btn">отправить</button>

        </div>

        <div class="col-md-8">

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check1">
                <label class="form-check-label" for="check1">Подтверждаю согласие на обработку персональных данных</label>
            </div>

        </div>

    </div>
</form>
<?endif?>