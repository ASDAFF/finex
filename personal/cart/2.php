<?global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'custom_pages ';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>
    <!-- main title -->

    <div class="single-section page-title">

        <div class="row section-heading">
            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cart/h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cart/text.php"), false);?>
        </div>

    </div>

    <!-- end main title -->

<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "", Array(
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "DISCOUNT",
			2 => "PRICE",
			3 => "QUANTITY",
			4 => "SUM",
			5 => "PROPS",
			6 => "DELETE",
			7 => "DELAY",
		),
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"PATH_TO_ORDER" => "/personal/order/make/",	// Страница оформления заказа
		"HIDE_COUPON" => "N",	// Спрятать поле ввода купона
		"QUANTITY_FLOAT" => "N",	// Использовать дробное значение количества
		"PRICE_VAT_SHOW_VALUE" => "Y",	// Отображать значение НДС
		"TEMPLATE_THEME" => "site",	// Цветовая тема
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"AJAX_OPTION_ADDITIONAL" => "",
		"OFFERS_PROPS" => array(	// Свойства, влияющие на пересчет корзины
            /*
            0 => "type_uf1",
            1 => "type_uf2",
            2 => "type_uf3",
            3 => "type_uf4",
            4 => "type_uf5",
            5 => "type_uf6",
            6 => "type_uf7",*/
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>