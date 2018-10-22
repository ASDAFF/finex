<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var string $templateFolder
 * @var string $templateName
 * @var CMain $APPLICATION
 * @var CBitrixBasketComponent $component
 * @var CBitrixComponentTemplate $this
 * @var array $giftParameters
 */

$documentRoot = Main\Application::getDocumentRoot();


if (!isset($arParams['DISPLAY_MODE']) || !in_array($arParams['DISPLAY_MODE'], array('extended', 'compact'))) {
    $arParams['DISPLAY_MODE'] = 'extended';
}

$arParams['USE_DYNAMIC_SCROLL'] = isset($arParams['USE_DYNAMIC_SCROLL']) && $arParams['USE_DYNAMIC_SCROLL'] === 'N' ? 'N' : 'Y';
$arParams['SHOW_FILTER'] = isset($arParams['SHOW_FILTER']) && $arParams['SHOW_FILTER'] === 'N' ? 'N' : 'Y';

$arParams['PRICE_DISPLAY_MODE'] = isset($arParams['PRICE_DISPLAY_MODE']) && $arParams['PRICE_DISPLAY_MODE'] === 'N' ? 'N' : 'Y';

if (!isset($arParams['TOTAL_BLOCK_DISPLAY']) || !is_array($arParams['TOTAL_BLOCK_DISPLAY'])) {
    $arParams['TOTAL_BLOCK_DISPLAY'] = array('top');
}

if (empty($arParams['PRODUCT_BLOCKS_ORDER'])) {
    $arParams['PRODUCT_BLOCKS_ORDER'] = 'props,sku,columns';
}

if (is_string($arParams['PRODUCT_BLOCKS_ORDER'])) {
    $arParams['PRODUCT_BLOCKS_ORDER'] = explode(',', $arParams['PRODUCT_BLOCKS_ORDER']);
}

$arParams['USE_PRICE_ANIMATION'] = isset($arParams['USE_PRICE_ANIMATION']) && $arParams['USE_PRICE_ANIMATION'] === 'N' ? 'N' : 'Y';
$arParams['USE_ENHANCED_ECOMMERCE'] = isset($arParams['USE_ENHANCED_ECOMMERCE']) && $arParams['USE_ENHANCED_ECOMMERCE'] === 'Y' ? 'Y' : 'N';
$arParams['DATA_LAYER_NAME'] = isset($arParams['DATA_LAYER_NAME']) ? trim($arParams['DATA_LAYER_NAME']) : 'dataLayer';
$arParams['BRAND_PROPERTY'] = isset($arParams['BRAND_PROPERTY']) ? trim($arParams['BRAND_PROPERTY']) : '';


\CJSCore::Init(array('fx', 'popup', 'ajax'));


$mobileColumns = isset($arParams['COLUMNS_LIST_MOBILE'])
    ? $arParams['COLUMNS_LIST_MOBILE']
    : $arParams['COLUMNS_LIST'];
$mobileColumns = array_fill_keys($mobileColumns, true);

$jsTemplates = new Main\IO\Directory($documentRoot . $templateFolder . '/js-templates');

$displayModeClass = $arParams['DISPLAY_MODE'] === 'compact' ? ' basket-items-list-wrapper-compact' : '';

if (empty($arResult['ERROR_MESSAGE'])) {

//var_dump($arResult["BASKET_ITEM_RENDER_DATA"]);
    ?>

    <div class="single-section prod-checkout">

        <div class="container">
            <?
            unset($_SESSION['CART']);
            foreach ($arResult["BASKET_ITEM_RENDER_DATA"] as $data) {
                $_SESSION['CART'][$data["PRODUCT_ID"]]=$data["PRODUCT_ID"];
                 ?>

                <div class="item" id="basket-item-<?= $data["ID"] ?>" data-entity="basket-item" data-id="<?= $data["ID"] ?>">

                    <div class="row">

                        <div class="col-md-4">

                            <a href="<?= $data["DETAIL_PAGE_URL"] ?>"><img src="<?= $data["IMAGE_URL"] ?>"></a>

                        </div>

                        <div class="col-md-8">

                            <div class="row">

                                <div class="col-md-8">

                                    <h3><?= $data["PROPS"][2]["VALUE"] ?></h3>
                                    <? foreach ($data["PROPS"] as $value) { ?>
                                        <p><span><?= $value["NAME"] ?></span><span><?= $value["VALUE"] ?></span></p>
                                    <? } ?>
                                </div>

                                <div class="col-md-2">

                                    <div class="select-box">

                                        <label>Цена&nbsp;1&nbsp;образца:</label>

                                       <span><?=OBRAZEC_PRICE?>&nbsp;руб.</span>
                                       <span><?=$data["FULL_PRICE"]?>&nbsp;за&nbsp;м2</span>


                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <a href="?basket-del=<?= $data['ID'] ?>"">
                                    <button data-entity="basket-item-delete">+</button>
                                    </a>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            <? } ?>

        </div>

    </div>

    <?
    if (!empty($arResult['CURRENCIES']) && Main\Loader::includeModule('currency')) {
        CJSCore::Init('currency');

        ?>
        <script>
			BX.Currency.setCurrencies(<?= CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true) ?>);



        </script>
        <?
    }

    $signer = new \Bitrix\Main\Security\Sign\Signer;
    $signedTemplate = $signer->sign($templateName, 'sale.basket.basket');
    $signedParams = $signer->sign(base64_encode(serialize($arParams)), 'sale.basket.basket');
    $messages = Loc::loadLanguageFile(__FILE__);
    ?>
    <script>
		BX.message(<?= CUtil::PhpToJSObject($messages) ?>);




    </script>


    <script>
    function send_order(){
 var name = $('.form_name').val();
 var tel = $('.form_tel').val();
 var email = $('.form_email').val();
 $.ajax({
                            url:'/ajax/send_order.php',
                            data:({ // Что отсылаем
                                action: 'send_order2',
                                name: name,
                                tel: tel,
                                email: email
                            }),
                            type:'POST',
                            success: function(ResultAjax){
                                 $('.form_mess').html(ResultAjax );
                            }
                        });
                        }
</script>

    <!-- form section -->

    <div class="single-section checkout form-section">

        <div class="container">

            <h2>оформление заказа</h2>
            <p  class="form_mess"></p>
            <form name="iblock_add" action="#form" method="post" enctype="multipart/form-data" onsubmit="send_order();return false;">
                <?=bitrix_sessid_post()?>

                <div class="row">

                    <div class="col-md-4">

                        <label>Ваше имя и фамилия <span>*</span></label>

                        <input type="text" name="name" class="form_name"  placeholder="Иван Иванов" required>

                    </div>

                    <div class="col-md-4">

                        <label>Телефон для связи <span>*</span></label>

                        <input type="tel"  name="tel" class="form_tel"  placeholder="+7 123 123-45-67" required>

                    </div>

                    <div class="col-md-4">

                        <label>Email</label>

                        <input type="email" name="email"  class="form_email"  placeholder="ivan@ivan.art">

                    </div>

                </div>

                <div class="row second">

                    <div class="col-md-8">

                        <div class="form-check">
                            <!--input type="checkbox" class="form-check-input" id="check1" style="    width: 25px;margin-right: 10px;"-->
                            <label class="form-check-label" for="check1">Нажимая кнопку "Оформить заказ" подтверждаю согласие на обработку персональных данных</label>
                        </div>

                    </div>

                </div>




                <div class="row addit button">


                    <div class="col-md-4">

                        <button type="submit">оформить заказ</button>


                    </div>



                </div>

            </form>

        </div>



    </div>



    <!-- end form section -->
    <?

} else { ?>
    <div class="single-section page-title">

        <div class="row section-heading">

            <? ShowError($arResult['ERROR_MESSAGE']); ?>
        </div>

    </div>
<? }