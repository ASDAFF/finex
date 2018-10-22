<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES'])) {
    $templateLibrary[] = 'currency';
    $currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
    'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    'TEMPLATE_LIBRARY' => $templateLibrary,
    'CURRENCIES' => $currencyList,
    'ITEM' => array(
        'ID' => $arResult['ID'],
        'IBLOCK_ID' => $arResult['IBLOCK_ID'],
        'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
        'JS_OFFERS' => $arResult['JS_OFFERS']
    )
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
    'ID' => $mainId,
    'DISCOUNT_PERCENT_ID' => $mainId . '_dsc_pict',
    'STICKER_ID' => $mainId . '_sticker',
    'BIG_SLIDER_ID' => $mainId . '_big_slider',
    'BIG_IMG_CONT_ID' => $mainId . '_bigimg_cont',
    'SLIDER_CONT_ID' => $mainId . '_slider_cont',
    'OLD_PRICE_ID' => $mainId . '_old_price',
    'PRICE_ID' => $mainId . '_price',
    'DISCOUNT_PRICE_ID' => $mainId . '_price_discount',
    'PRICE_TOTAL' => $mainId . '_price_total',
    'SLIDER_CONT_OF_ID' => $mainId . '_slider_cont_',
    'QUANTITY_ID' => $mainId . '_quantity',
    'QUANTITY_DOWN_ID' => $mainId . '_quant_down',
    'QUANTITY_UP_ID' => $mainId . '_quant_up',
    'QUANTITY_MEASURE' => $mainId . '_quant_measure',
    'QUANTITY_LIMIT' => $mainId . '_quant_limit',
    'BUY_LINK' => $mainId . '_buy_link',
    'ADD_BASKET_LINK' => $mainId . '_add_basket_link',
    'BASKET_ACTIONS_ID' => $mainId . '_basket_actions',
    'NOT_AVAILABLE_MESS' => $mainId . '_not_avail',
    'COMPARE_LINK' => $mainId . '_compare_link',
    'TREE_ID' => $mainId . '_skudiv',
    'DISPLAY_PROP_DIV' => $mainId . '_sku_prop',
    'DISPLAY_MAIN_PROP_DIV' => $mainId . '_main_sku_prop',
    'OFFER_GROUP' => $mainId . '_set_group_',
    'BASKET_PROP_DIV' => $mainId . '_basket_prop',
    'SUBSCRIBE_LINK' => $mainId . '_subscribe',
    'TABS_ID' => $mainId . '_tabs',
    'TAB_CONTAINERS_ID' => $mainId . '_tab_containers',
    'SMALL_CARD_PANEL_ID' => $mainId . '_small_card_panel',
    'TABS_PANEL_ID' => $mainId . '_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob' . preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
    : $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
    : $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers) {
    $actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
        ? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
        : reset($arResult['OFFERS']);
    $showSliderControls = false;

    foreach ($arResult['OFFERS'] as $offer) {
        if ($offer['MORE_PHOTO_COUNT'] > 1) {
            $showSliderControls = true;
            break;
        }
    }
} else {
    $actualItem = $arResult;
    $showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
    'left' => 'product-item-label-left',
    'center' => 'product-item-label-center',
    'right' => 'product-item-label-right',
    'bottom' => 'product-item-label-bottom',
    'middle' => 'product-item-label-middle',
    'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}
?>
    <div class="single-section item-main">

        <div class="container">

            <div class="bx-catalog-element row bx-<?= $arParams['TEMPLATE_THEME'] ?>" id="<?= $itemIds['ID'] ?>"
                 itemscope itemtype="http://schema.org/Product">


                <div class="col-md-5 image-slider" data-entity="/images-slider-block">
                    <div class="item-images" data-entity="/images-container">
                        <?
                        if (!empty($actualItem['MORE_PHOTO'])) {
                            foreach ($actualItem['MORE_PHOTO'] as $key => $photo) {
                                ?>
                                <a href="#!" data-toggle="modal" data-target="#galleryModal" data-entity="image"
                                   data-id="<?= $photo['ID'] ?>"
                                   style="background: url(<?= $photo['SRC'] ?>) no-repeat center;">

                                    <img src="<?= $photo['SRC'] ?>" alt="<?= $alt ?>"
                                         title="<?= $title ?>"<?= ($key == 0 ? ' itemprop="image"' : '') ?>>

                                </a>

                                <?
                            }
                        }
                        ?>
                    </div>
                    <div class="item-slick-nav"></div>
                </div>


                <div class="col-md-5 product-info">
                    <h2><?= $name ?>
                        <?php if ($arResult['LABEL'] && !empty($arResult['LABEL_ARRAY_VALUE'])) {
                            foreach ($arResult['LABEL_ARRAY_VALUE'] as $code => $value) {
                                ?>

                                <div class="badge"><?= $value ?></div>
                                <?
                            }
                        } ?></h2>
                    <?
                    //var_dump($arResult);
                    ?>

                    <? if (!empty($arResult['PROPERTIES']["tags"]["VALUE"])) { ?>
                        <div class="tags">
                            <span><?= implode('</span> <span>',$arResult['DISPLAY_PROPERTIES']["tags"]["VALUE"]) ?></span>
                        </div>

                    <? } ?>
                    <? if (!empty($arResult["PROPERTIES"]["ARTNUMBER"]["VALUE"])) { ?>
                        <div class="it-el">
                            <span>АРТИКУЛ</span>
                            <span><?= $arResult['PROPERTIES']["ARTNUMBER"]["VALUE"] ?></span>
                        </div>
                    <? } ?>
                    <? if (!empty($arResult['PROPERTIES']["collection"]["VALUE"])) { ?>
                        <div class="it-el">
                            <span>КОЛЛЕКЦИЯ</span>
                            <span><?=$arResult['PROPERTIES']["collection"]["VALUE"] ?></span>
                        </div>
                    <? } ?>

                    <? if (!empty($arResult['PROPERTIES']["MATERIAL"]["VALUE"])) { ?>
                        <div class="it-el">
                            <span>Древесина</span>
                            <span><?= implode(', ',$arResult['PROPERTIES']["MATERIAL"]["VALUE"]) ?></span>
                        </div>
                    <? } ?>
                    <?
                    foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName) {
                        switch ($blockName) {
                            case 'sku':
                                if ($haveOffers && !empty($arResult['OFFERS_PROP'])) {
                                    ?>
                                    <div id="<?= $itemIds['TREE_ID'] ?>">
                                        <?
                                        foreach ($arResult['SKU_PROPS'] as $skuProperty) {
                                            if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))
                                                continue;

                                            $propertyId = $skuProperty['ID'];
                                            $skuProps[] = array(
                                                'ID' => $propertyId,
                                                'SHOW_MODE' => $skuProperty['SHOW_MODE'],
                                                'VALUES' => $skuProperty['VALUES'],
                                                'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
                                            );
                                            ?>
                                            <div class="product-item-detail-info-container it-el"
                                                 data-entity="sku-line-block">
                                                <span><?= htmlspecialcharsEx($skuProperty['NAME']) ?></span>
                                                <span class="black">
                                        <div class="product-item-scu-container">
                                            <div class="product-item-scu-block">
                                                <div class=" select-box">
                                                    <?
                                                    foreach ($skuProperty['VALUES'] as &$value) {
                                                        $nam = htmlspecialcharsbx($value['NAME']);
                                                        break;

                                                    } ?>
                                                    <a class="btn dropdown-toggle btn-select" data-toggle="dropdown"
                                                       href="#" id="nam_<?= $propertyId ?>"><span><?= $nam ?></span></a>

                                                    <ul class="dropdown-menu">
                                                        <?
                                                        foreach ($skuProperty['VALUES'] as &$value) {
                                                            $value['NAME'] = htmlspecialcharsbx($value['NAME']);


                                                            ?>
                                                            <li class="" title="<?= $value['NAME'] ?>"
                                                                data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                                data-title="<?= $value['NAME'] ?>"
                                                                data-onevalue="<?= $value['ID'] ?>"
                                                                data-property="<?= $propertyId ?>">
                                                                        <a href="#!"><?= $value['NAME'] ?></a>

                                                                </li>
                                                            <?

                                                        }
                                                        ?>
                                                    </ul>
                                                    <div style="clear: both;"></div>
                                                </div>
                                            </div>
                                        </div>
                                         </span>
                                            </div>

                                            <?
                                        }
                                        ?>
                                    </div>
                                    <?
                                }

                                break;


                        }
                    }
                    ?>

                    <div class="divider"></div>

                    <div class="it-el">

                        <span>Метраж</span> <span class="black underline">

 <div class="product-item-detail-info-container"
      style="<?= (!$actualItem['CAN_BUY'] ? 'display: none;' : '') ?>  width: 105px;"
      data-entity="quantity-block">
                                                        <div class="product-item-detail-info-container-title"><?= Loc::getMessage('CATALOG_QUANTITY') ?></div>
                                                        <div class="product-item-amount">
                                                            <div class="product-item-amount-field-container">
                                                                <a class="product-item-amount-field-btn-minus"
                                                                   id="<?= $itemIds['QUANTITY_DOWN_ID'] ?>"
                                                                   href="javascript:void(0)" rel="nofollow">
                                                                </a>
                                                                <input class="product-item-amount-field"
                                                                       id="<?= $itemIds['QUANTITY_ID'] ?>" type="tel"
                                                                       value="<?= $price['MIN_QUANTITY'] ?>">
                                                                <a class="product-item-amount-field-btn-plus"
                                                                   id="<?= $itemIds['QUANTITY_UP_ID'] ?>"
                                                                   href="javascript:void(0)" rel="nofollow">
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>


                </span>
                    </div>

                    <!--div class="it-el">

                        <span>Персональная скидка</span> <span>0%</span>

                    </div-->
                    <div class="it-el small">

                        <span>Есть на складе</span> <span>Срок поставки: 3–5 дней</span>

                    </div>
                    <div class="price">

                        <p>

                            <span class="description">Цена за м<i>2</i></span>

                            <span class="amount"
                                  id="<?= $itemIds['PRICE_ID'] ?>">
                        <?= $price['PRINT_RATIO_PRICE'] ?>
                                </span><span class="amount" id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
                            <?
                            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                                ?><span class="old-price" id="<?= $itemIds['OLD_PRICE_ID'] ?>"
                                        style="display: <?= ($showDiscount ? '' : 'none') ?>;">
                                <?= ($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '') ?></span>
                                <?
                            }
                            ?>
                            <span id="<?= $itemIds['QUANTITY_MEASURE'] ?>" style="display: none">
																<?= $actualItem['ITEM_MEASURE']['TITLE'] ?>
															</span>
                        </p>
                        <p style="display: none"><span class="description">Всего</span>
                            <span class="amount" id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
                        </p>


                        <a href="#!" class="brown"><i><img src="/images/btn1.svg"></i>рассчитать</a>

                        <div data-entity="main-button-container">
                            <div id="<?= $itemIds['BASKET_ACTIONS_ID'] ?>"
                                 style="display: <?= ($actualItem['CAN_BUY'] ? '' : 'none') ?>;">
                                <?
                                if ($showAddBtn) {
                                    ?>
                                        <a class=" <?= $showButtonClassName ?> gray"
                                           id="<?= $itemIds['ADD_BASKET_LINK'] ?>"
                                           href="javascript:void(0);">
                                            <span><?= $arParams['MESS_BTN_ADD_TO_BASKET'] ?></span>
                                        </a>

                                    <?
                                }

                                if ($showBuyBtn) {
                                    ?>
                                        <a class=" <?= $buyButtonClassName ?> gray"
                                           id="<?= $itemIds['BUY_LINK'] ?>"
                                           href="javascript:void(0);">
                                            <i><img src="/images/btn2.svg"></i>заказать образец
                                        </a>

                                    <?
                                }
                                ?>
                            </div>

                            <div class="product-item-detail-info-container">
                                <a class="btn btn-link product-item-detail-buy-button"
                                   id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>"
                                   href="javascript:void(0)"
                                   rel="nofollow"
                                   style="display: <?= (!$actualItem['CAN_BUY'] ? '' : 'none') ?>;">
                                    <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                </a>
                            </div>
                        </div>


                    </div>

                </div>





                <div class="col-md-2">


                    <a href="/wishlist/?id=<?=$arResult['ID']?>"  class="gray"><i><img src="/images/star.svg"></i>понравилось?</a>
<?if ($arParams['DISPLAY_COMPARE'])
							{
								?>
								<div class="product-item-detail-compare-container">
									<div class="product-item-detail-compare">
										<div class="checkbox">
											<label id="<?=$itemIds['COMPARE_LINK']?>">
												<input type="checkbox" data-entity="compare-checkbox">
												<span data-entity="compare-title"><?=$arParams['MESS_BTN_COMPARE']?></span>
											</label>
										</div>
									</div>
								</div>
								<?
							}?>
                    <p>Поделиться в социальной сети</p>

                    <ul>

                        <li><a href="#!"><img src="/images/fb-brown.svg"></a></li>

                        <li><a href="#!"><img src="/images/twitter-brown.svg"></a></li>

                        <li><a href="#!"><img src="/images/whatsapp-brown.svg"></a></li>

                        <li><a href="#!"><img src="/images/pinterest-brown.svg"></a></li>

                    </ul>

                </div>

                <meta itemprop="name" content="<?= $name ?>"/>
                <meta itemprop="category" content="<?= $arResult['CATEGORY_PATH'] ?>"/>
                <?
                if ($haveOffers) {
                    foreach ($arResult['JS_OFFERS'] as $offer) {
                        $currentOffersList = array();

                        if (!empty($offer['TREE']) && is_array($offer['TREE'])) {
                            foreach ($offer['TREE'] as $propName => $skuId) {
                                $propId = (int)substr($propName, 5);

                                foreach ($skuProps as $prop) {
                                    if ($prop['ID'] == $propId) {
                                        foreach ($prop['VALUES'] as $propId => $propValue) {
                                            if ($propId == $skuId) {
                                                $currentOffersList[] = $propValue['NAME'];
                                                break;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        $offerPrice = $offer['ITEM_PRICES'][$offer['ITEM_PRICE_SELECTED']];
                        ?>
                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<meta itemprop="sku" content="<?= htmlspecialcharsbx(implode('/', $currentOffersList)) ?>"/>
				<meta itemprop="price" content="<?= $offerPrice['RATIO_PRICE'] ?>"/>
				<meta itemprop="priceCurrency" content="<?= $offerPrice['CURRENCY'] ?>"/>
				<link itemprop="availability"
                      href="http://schema.org/<?= ($offer['CAN_BUY'] ? 'InStock' : 'OutOfStock') ?>"/>
			</span>
                        <?
                    }

                    unset($offerPrice, $currentOffersList);
                }
                ?>
            </div>
        </div>
    </div>


    <br>
    <br>

    <div class="single-section tabs">

        <div class="container">

            <div class="row">

                <div class="outter-tabs-wrapper">

                    <div class="tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#first" role="tab" aria-selected="true">Описание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#second" role="tab" aria-selected="false">плинтус</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#third" role="tab" aria-selected="false">материал для укладки</a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="tab-content">
                    <div class="tab-pane fade active show" id="first" role="tabpanel">
                        <?if (
                        $arResult['PREVIEW_TEXT'] != ''
                        && (
                        $arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'S'
                        || ($arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'E' && $arResult['DETAIL_TEXT'] == '')
                        )
                        ) {
                        echo $arResult['PREVIEW_TEXT_TYPE'] === 'html' ? $arResult['PREVIEW_TEXT'] : '<p>' . $arResult['PREVIEW_TEXT'] . '</p>';
                        }?>
                    </div>
                    <div class="tab-pane fade" id="second" role="tabpanel">
                        <?
                            echo $arResult['PROPERTIES']["plintus"]["VALUE"]["TYPE"] === 'html' ? $arResult['PROPERTIES']["plintus"]["VALUE"]["TEXT"] : '<p>' .  $arResult['PROPERTIES']["plintus"]["VALUE"]["TEXT"] . '</p>';
                        ?>
                    </div>
                    <div class="tab-pane fade" id="third" role="tabpanel">
                        <?
                        echo $arResult['PROPERTIES']["mat_ykladki"]["VALUE"]["TYPE"] === 'html' ? $arResult['PROPERTIES']["mat_ykladki"]["VALUE"]["TEXT"] : '<p>' .  $arResult['PROPERTIES']["mat_ykladki"]["VALUE"]["TEXT"] . '</p>';
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?
if ($haveOffers) {
    $offerIds = array();
    $offerCodes = array();

    $useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

    foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer) {
        $offerIds[] = (int)$jsOffer['ID'];
        $offerCodes[] = $jsOffer['CODE'];

        $fullOffer = $arResult['OFFERS'][$ind];
        $measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

        $strAllProps = '';
        $strMainProps = '';
        $strPriceRangesRatio = '';
        $strPriceRanges = '';

        if ($arResult['SHOW_OFFERS_PROPS']) {
            if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {
                foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property) {
                    $current = '<dt>' . $property['NAME'] . '</dt><dd>' . (
                        is_array($property['VALUE'])
                            ? implode(' / ', $property['VALUE'])
                            : $property['VALUE']
                        ) . '</dd>';
                    $strAllProps .= $current;

                    if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']])) {
                        $strMainProps .= $current;
                    }
                }

                unset($current);
            }
        }

        if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1) {
            $strPriceRangesRatio = '(' . Loc::getMessage(
                    'CT_BCE_CATALOG_RATIO_PRICE',
                    array('#RATIO#' => ($useRatio
                            ? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
                            : '1'
                        ) . ' ' . $measureName)
                ) . ')';

            foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range) {
                if ($range['HASH'] !== 'ZERO-INF') {
                    $itemPrice = false;

                    foreach ($jsOffer['ITEM_PRICES'] as $itemPrice) {
                        if ($itemPrice['QUANTITY_HASH'] === $range['HASH']) {
                            break;
                        }
                    }

                    if ($itemPrice) {
                        $strPriceRanges .= '<dt>' . Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_FROM',
                                array('#FROM#' => $range['SORT_FROM'] . ' ' . $measureName)
                            ) . ' ';

                        if (is_infinite($range['SORT_TO'])) {
                            $strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
                        } else {
                            $strPriceRanges .= Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_TO',
                                array('#TO#' => $range['SORT_TO'] . ' ' . $measureName)
                            );
                        }

                        $strPriceRanges .= '</dt><dd>' . ($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']) . '</dd>';
                    }
                }
            }

            unset($range, $itemPrice);
        }

        $jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
        $jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
        $jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
        $jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;
    }

    $templateData['OFFER_IDS'] = $offerIds;
    $templateData['OFFER_CODES'] = $offerCodes;
    unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

    $jsParams = array(
        'CONFIG' => array(
            'USE_CATALOG' => $arResult['CATALOG'],
            'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
            'SHOW_PRICE' => true,
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
            'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
            'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
            'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
            'OFFER_GROUP' => $arResult['OFFER_GROUP'],
            'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
            'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
            'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
            'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
            'USE_STICKERS' => true,
            'USE_SUBSCRIBE' => $showSubscribe,
            'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
            'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
            'ALT' => $alt,
            'TITLE' => $title,
            'MAGNIFIER_ZOOM_PERCENT' => 200,
            'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
            'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
            'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
                ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
                : null
        ),
        'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
        'VISUAL' => $itemIds,
        'DEFAULT_PICTURE' => array(
            'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
            'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
        ),
        'PRODUCT' => array(
            'ID' => $arResult['ID'],
            'ACTIVE' => $arResult['ACTIVE'],
            'NAME' => $arResult['~NAME'],
            'CATEGORY' => $arResult['CATEGORY_PATH']
        ),
        'BASKET' => array(
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'BASKET_URL' => $arParams['BASKET_URL'],
            'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
        ),
        'OFFERS' => $arResult['JS_OFFERS'],
        'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
        'TREE_PROPS' => $skuProps
    );
}

if ($arParams['DISPLAY_COMPARE'])
{
    $jsParams['COMPARE'] = array(
        'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
        'COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
        'COMPARE_PATH' => $arParams['COMPARE_PATH']
    );
}
?>
    <script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?= GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2') ?>',
		TITLE_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR') ?>',
		TITLE_BASKET_PROPS: '<?= GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS') ?>',
		BASKET_UNKNOWN_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR') ?>',
		BTN_SEND_PROPS: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS') ?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT') ?>',
		BTN_MESSAGE_CLOSE: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE') ?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP') ?>',
		TITLE_SUCCESSFUL: '<?= GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK') ?>',
		COMPARE_MESSAGE_OK: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK') ?>',
		COMPARE_UNKNOWN_ERROR: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR') ?>',
		COMPARE_TITLE: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE') ?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?= GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT') ?>',
		PRODUCT_GIFT_LABEL: '<?= GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL') ?>',
		PRICE_TOTAL_PREFIX: '<?= GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX') ?>',
		RELATIVE_QUANTITY_MANY: '<?= CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY']) ?>',
		RELATIVE_QUANTITY_FEW: '<?= CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW']) ?>',
		SITE_ID: '<?= SITE_ID ?>'
	});

	var <?= $obName ?> = new JCCatalogElement(<?= CUtil::PhpToJSObject($jsParams, false, true) ?>);

    </script>

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="modal-images">
                        <?
                        if (!empty($actualItem['MORE_PHOTO'])) {
                            foreach ($actualItem['MORE_PHOTO'] as $key => $photo) {
                                ?>
                                <a href="#!" data-toggle="modal" data-target="#galleryModal"
                                   style="background: url(<?= $photo['SRC'] ?>) no-repeat center;">


                                </a>

                                <?
                            }
                        }
                        ?>

                    </div>

                    <div class="modal-slick-nav"></div>

                </div>
            </div>
        </div>
    </div>
<?
unset($actualItem, $itemIds, $jsParams);