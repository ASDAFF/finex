<?

error_reporting(E_ERROR);

define("COUNTLINE", 3000);
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
ini_set("max_execution_time", "900");
set_time_limit(900);
//exit;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
global $DB;
$uf_1s = [];//Тип изделия
$uf_2s = [];//Конструкция
$uf_3s = [];//Дизайн
$uf_4s = [];//Рисунок
$uf_5s = [];//Селекция
$uf_6s = [];//Ширина
$uf_7s = [];//Толщина
$uf_8s = [];//Тип поверхности
$uf_9s = [];//Ед.изм (м2/упак)
$uf_10s = [];//Коэффициент

$strSql = "
            SELECT
                *            
            FROM type1
            WHERE 
                1 order by UF_NAME
            ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_1s[$row["ID"]] = $row["UF_NAME"];
    $uf_s1[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM construction2 WHERE  1  order by UF_NAME      ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_2s[$row["ID"]] = $row["UF_NAME"];
    $uf_s2[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM design3 WHERE  1   order by UF_NAME     ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_3s[$row["ID"]] = $row["UF_NAME"];
    $uf_s3[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM risunok4 WHERE  1   order by UF_NAME     ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_4s[$row["ID"]] = $row["UF_NAME"];
    $uf_s4[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM selection5 WHERE  1   order by UF_NAME     ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_5s[$row["ID"]] = $row["UF_NAME"];
    $uf_s5[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM shirina6 WHERE  1   order by UF_NAME     ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_6s[$row["ID"]] = $row["UF_NAME"];
    $uf_s6[$row["UF_NAME"]] = $row["ID"];
}

$strSql = "        SELECT *   FROM tolshina7 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_7s[$row["ID"]] = $row["UF_NAME"];
    $uf_s7[$row["UF_NAME"]] = $row["ID"];
}
$strSql = "        SELECT *   FROM type8 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_8s[$row["ID"]] = $row["UF_NAME"];
    $uf_s8[$row["UF_NAME"]] = $row["ID"];
}
$strSql = "        SELECT *   FROM edinic9 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_9s[$row["ID"]] = $row["UF_NAME"];
    $uf_s9[$row["UF_NAME"]] = $row["ID"];
}
$strSql = "        SELECT *   FROM koef10 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_10s[$row["ID"]] = $row["UF_NAME"];
    $uf_s10[$row["UF_NAME"]] = $row["ID"];
}

$rs_good = CIBlockElement::GetList(array("SORT" => "ASC"), array("IBLOCK_ID" => 3,  "ACTIVE" => 'Y',), false, false, array("ID", "IBLOCK_ID", "PROPERTY_type_uf1",
    "PROPERTY_type_uf2","PROPERTY_type_uf3","PROPERTY_type_uf4","PROPERTY_type_uf5","PROPERTY_type_uf6","PROPERTY_type_uf7","PROPERTY_type_uf8","PROPERTY_type_uf9","PROPERTY_type_uf10", "CATALOG_GROUP_1"));
while ($arRes = $rs_good->Fetch()) {
    // 'UF_1'=> $uf_1,'UF_2'=> $uf_2,'UF_3'=> $uf_3,'UF_4'=> $uf_4,'UF_5'=> $uf_5,'UF_6'=> $uf_6,'UF_7'=> $uf_7,'UF_PRICE'
    $strSql = "        SELECT UF_1,UF_2,UF_3,UF_4,UF_5,UF_6,UF_7,UF_8,UF_9,UF_10,UF_PRICE   FROM price WHERE  
        UF_1=".(int)$uf_s1[$arRes["PROPERTY_TYPE_UF1_VALUE"]]." and 
        UF_2=".(int)$uf_s2[$arRes["PROPERTY_TYPE_UF2_VALUE"]]." and 
        UF_3=".(int)$uf_s3[$arRes["PROPERTY_TYPE_UF3_VALUE"]]." and 
        UF_4=".(int)$uf_s4[$arRes["PROPERTY_TYPE_UF4_VALUE"]]." and 
        UF_5=".(int)$uf_s5[$arRes["PROPERTY_TYPE_UF5_VALUE"]]." and 
        UF_6=".(int)$uf_s6[$arRes["PROPERTY_TYPE_UF6_VALUE"]]." and 
        UF_6=".(int)$uf_s6[$arRes["PROPERTY_TYPE_UF7_VALUE"]]." and 
        UF_6=".(int)$uf_s6[$arRes["PROPERTY_TYPE_UF8_VALUE"]]." and 
        UF_6=".(int)$uf_s6[$arRes["PROPERTY_TYPE_UF9_VALUE"]]." and 
        UF_7=".(int)$uf_s7[$arRes["PROPERTY_TYPE_UF10_VALUE"]]."  ";
    $res = $DB->Query($strSql, false, $err_mess.__LINE__);

    if ($row = $res->Fetch())
    {
        var_dump($row["UF_PRICE"].'!='.$arRes["CATALOG_PRICE_1"]);
        if ($row["UF_PRICE"]!=$arRes["CATALOG_PRICE_1"]) {
            var_dump($row["UF_PRICE"].'!='.$arRes["CATALOG_PRICE_1"]);
        $arFields = Array(
            "PRODUCT_ID" => $arRes['ID'],
            "CATALOG_GROUP_ID" => 1,
            "PRICE" => $row["UF_PRICE"],
            "CURRENCY" => 'RUB'
        );

        $res_p = CPrice::GetList(array(), array("PRODUCT_ID" => $arRes['ID'], "CATALOG_GROUP_ID" => 1));
        if ($arr = $res_p->Fetch()) {
            CPrice::Update($arr["ID"], $arFields);
        }
    }
    }


}



