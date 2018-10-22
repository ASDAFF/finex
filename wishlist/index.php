<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$wishlist = unserialize($_COOKIE['wishlist']);

if (!empty($_REQUEST['id'])) {
    if (!in_array((int)$_REQUEST['id'], $wishlist)) {
        $wishlist[] = (int)$_REQUEST['id'];
    }
}
setcookie("wishlist", serialize($wishlist), time() + 60*60*24*360);

?>
<script>
    function send_order(){
 var sel_color_c = $('.sel_color_c').val();
 var sel_size_c = $('.sel_size_c').val();
 console.log(sel_color_c);
 console.log(sel_size_c);
 $.ajax({
                            url:'/ajax/send_order.php',
                            data:({ // Что отсылаем
                                ID: "<?=$arResult["ID"]?>",
                                sel_color_c: sel_color_c,
                                sel_size_c: sel_size_c,
                            }),
                            type:'POST',
                            success: function(ResultAjax){
                                 $('.product__price').html(ResultAjax );
                            }
                        });
</script>
    <!-- main title -->

    <div class="single-section page-title">

        <div class="row section-heading">

            <h2 class="star"><i></i>понравилось</h2>

            <p>Отличный выбор! Вы отметили <?=count($wishlist);?> наименования, и теперь мы рады сообщить Вам,<br/>  что сейчас самое лучшее время, чтобы сделать заказ.</p>

        </div>

    </div>

    <!-- end main title -->


    <!-- form section -->

    <div class="single-section form-section">

        <div class="container">

            <h2>оформление заказа</h2>


            <form name="iblock_add" action="#form" method="post" enctype="multipart/form-data" onclick="send_order();return false;">
                <?=bitrix_sessid_post()?>
                <?if ($arParams["MAX_FILE_SIZE"] > 0):?><input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" /><?endif?>
                <div class="row">

                    <div class="col-md-4">

                        <label>Ваше имя и фамилия <span>*</span></label>

                        <input name="name" type="text" class="form_name" placeholder="Иван Иванов" required>

                    </div>

                    <div class="col-md-4">

                        <label>Телефон для связи <span>*</span></label>

                        <input type="tel" name="tel" class="form_tel" placeholder="+7 123 123-45-67" required>

                    </div>

                    <div class="col-md-4">

                        <label>Email</label>

                        <input type="email" name="email"  class="email"  placeholder="ivan@ivan.art">

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

        </div>



    </div>

    <!-- end form section -->



<?



                global $arFilterB, $intSectionID;
                $arFilterB["IBLOCK_ID"] = $arResult["IBLOCK_ID"];
                $arFilterB["ID"] = $wishlist;

                ?>
                <?
                $intSectionID = $APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"like",
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "2",
		"ELEMENT_SORT_FIELD" => "RAND",
		"ELEMENT_SORT_ORDER" => "ASC",
		"ELEMENT_SORT_FIELD2" => "ID",
		"ELEMENT_SORT_ORDER2" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "ARTNUMBER",
			1 => "COLOR",
			2 => "type_uf3",
			3 => "type_uf7",
			4 => "type_uf2",
			5 => "",
		),
		"META_KEYWORDS" => "",
		"SET_META_KEYWORDS" => "N",
		"META_DESCRIPTION" => "",
		"SET_META_DESCRIPTION" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"BROWSER_TITLE" => "",
		"SET_BROWSER_TITLE" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"BASKET_URL" => "",
		"ACTION_VARIABLE" => "",
		"PRODUCT_ID_VARIABLE" => "",
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
		"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
		"FILTER_NAME" => "arFilterB",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"DISPLAY_COMPARE" => "N",
		"PAGE_ELEMENT_COUNT" => "15",
		"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "",
		"PRICE_VAT_INCLUDE" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "N",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "",
		"PAGER_SHOW_ALL" => "N",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFERS_LIMIT" => "0",
		"SECTION_ID" => "0",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => $arParams["CURRENCY_ID"],
		"HIDE_NOT_AVAILABLE" => "Y",
		"LABEL_PROP" => array(
			0 => "SALELEADER",
			1 => "SPECIALOFFER",
		),
		"ADD_PICT_PROP" => "-",
		"PRODUCT_DISPLAY_MODE" => "N",
		"OFFER_ADD_PICT_PROP" => $arParams["OFFER_ADD_PICT_PROP"],
		"OFFER_TREE_PROPS" => $arParams["OFFER_TREE_PROPS"],
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"MESS_BTN_BUY" => "",
		"MESS_BTN_ADD_TO_BASKET" => "",
		"MESS_BTN_SUBSCRIBE" => "",
		"MESS_BTN_DETAIL" => "",
		"MESS_NOT_AVAILABLE" => "",
		"TEMPLATE_THEME" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"SHOW_CLOSE_POPUP" => "N",
		"COMPARE_PATH" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["compare"],
		"CITY_ID" => $arParams["CITY_ID"],
		"COMPONENT_TEMPLATE" => "main",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"CUSTOM_FILTER" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"PROPERTY_CODE_MOBILE" => array(
		),
		"BACKGROUND_IMAGE" => "-",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"ENLARGE_PRODUCT" => "STRICT",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"SHOW_SLIDER" => "N",
		"LABEL_PROP_MOBILE" => array(
		),
		"LABEL_PROP_POSITION" => "top-left",
		"SHOW_MAX_QUANTITY" => "N",
		"RCM_TYPE" => "personal",
		"RCM_PROD_ID" => "",
		"SHOW_FROM_SECTION" => "N",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "N",
		"LOAD_ON_SCROLL" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	$component->__parent
); ?>






    <!-- end list -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>