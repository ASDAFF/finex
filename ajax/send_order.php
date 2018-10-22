<?php
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_REQUEST['action']=='send_order1' ){
    $goods = 'Понравившиется товары:'."\n";

    $wishlist = $_SESSION['wishlist'];
if(count($wishlist)){

    CModule::IncludeModule("iblock");
    $rs_good = CIBlockElement::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 2,'ID'=>$wishlist, "ACTIVE" => 'Y',), false, false,
        array("ID", "IBLOCK_ID","CODE", "NAME","DETAIL_PAGE_URL",));
    while ($arRes =$rs_good->GetNextElement())
    {
        $arFields = $arRes->GetFields();
        $goods.='<a href="'.$_SERVER['HTTP_HOST']. $arFields['DETAIL_PAGE_URL'].'">'.$arFields['NAME']."</a><br>\n";

    }
}
    $message='Заказ с формы wishlist'."<br>\n".'
Имя:'.$_REQUEST['name']."<br>\n".'
Телефон:'.$_REQUEST['tel']."<br>\n".'
email:'.$_REQUEST['email']."<br>\n".$goods;
    $el = new CIBlockElement;
    $PROP = array(
        'name'=>$_REQUEST['name'],
        'tel'=>$_REQUEST['tel'],
        'email'=>$_REQUEST['email'],
        'wishlist'=>$wishlist,
    );

    $arLoadArray = Array(
        "IBLOCK_ID" => 8,
        "PROPERTY_VALUES" => $PROP,
        "NAME" => trim('Заказ с формы wishlist от '.$_REQUEST['name'].' '.$_REQUEST['tel'].' '.$_REQUEST['email']),
        "ACTIVE" => 'Y',
        "DETAIL_TEXT" => $message,
    );
    if ($ID = $el->Add($arLoadArray)) {
        echo'Спасибо! Письмо отправлено.';
    }
    mail('stas@lum.ru', 'Заказ с формы wishlist',$message);
}elseif($_REQUEST['action']=='send_order2' ){
    $goods = 'Понравившиется товары:'."\n";
    $wishlist = $_SESSION['CART'];
   // var_dump($wishlist);
    if(count($wishlist)){

        CModule::IncludeModule("iblock");
        $rs_good = CIBlockElement::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 3,'ID'=>$wishlist, "ACTIVE" => 'Y',), false, false,
            array("ID", "IBLOCK_ID","CODE", "NAME","DETAIL_PAGE_URL",));
        while ($arRes =$rs_good->GetNextElement())
        {
            $arFields = $arRes->GetFields();
            $goods.='<a href="'.$_SERVER['HTTP_HOST']. $arFields['DETAIL_PAGE_URL'].'">'.$arFields['NAME']."</a><br>\n";

        }
    }
    $message='Заказ из корзины'."<br>\n".'
Имя:'.$_REQUEST['name']."<br>\n".'
Телефон:'.$_REQUEST['tel']."<br>\n".'
email:'.$_REQUEST['email']."<br>\n".$goods;
    $el = new CIBlockElement;
    $PROP = array(
        'name'=>$_REQUEST['name'],
        'tel'=>$_REQUEST['tel'],
        'email'=>$_REQUEST['email'],
        'wishlist'=>$wishlist,
    );

    $arLoadArray = Array(
        "IBLOCK_ID" => 8,
        "PROPERTY_VALUES" => $PROP,
        "NAME" => trim('Заказ из корзины от '.$_REQUEST['name'].' '.$_REQUEST['tel'].' '.$_REQUEST['email']),
        "ACTIVE" => 'Y',
        "DETAIL_TEXT" => $message,
    );
    if ($ID = $el->Add($arLoadArray)) {
        echo'Спасибо! Письмо отправлено.';
    }
    mail('stas@lum.ru', 'Заказ с формы wishlist',$message);
}