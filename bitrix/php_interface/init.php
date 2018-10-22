<?php

define("OBRAZEC_PRICE", 1000);


CModule::IncludeModule("catalog");

class CCatalogProductProviderCustom extends CCatalogProductProvider
{
    public static function GetProductData($arParams)
    {
        $arResult = CCatalogProductProvider::GetProductData($arParams);

        $arResult['PRICE'] = OBRAZEC_PRICE; // Здесь присваиваем новую цену без учёта скидки, общая цена будет равна $arResult['PRICE'] + $arResult['DISCOUNT_PRICE']
        $arResult['DISCOUNT_PRICE'] = 0; // Здесь определяем размер скидки

        return $arResult;
    }

    public static function OrderProduct($arParams)
    {
        $arResult = CCatalogProductProvider::OrderProduct($arParams);

        $arResult['PRICE'] = OBRAZEC_PRICE; // Здесь присваиваем новую цену без учёта скидки, общая цена будет равна $arResult['PRICE'] + $arResult['DISCOUNT_PRICE']
        $arResult['DISCOUNT_PRICE'] = 0; // Здесь определяем размер скидки

        return $arResult;
    }
}

AddEventHandler("sale", "OnBeforeBasketAdd", "BeforeBasketAddHandler"  )  ;
function BeforeBasketAddHandler(&$arFields)
{
    $arFields['PRODUCT_PROVIDER_CLASS'] = 'CCatalogProductProviderCustom';
    $arFields['QUANTITY'] = 1;
    $arFields['CUSTOM_PRICE'] = 'Y';
}