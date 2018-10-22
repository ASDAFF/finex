<?
$arFilter = Array(
    "IBLOCK_ID"=>4,"ACTIVE"=>"Y",">DETAIL_PICTURE"=>0,
);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC", ), $arFilter,false,['nTopCount'=>3], Array(
        "ID","NAME","DETAIL_PICTURE"));

$first=true;
while($ar_fields = $res->GetNext())
{
    $ar_fields['DETAIL_PICTURE'] = CFile::GetFileArray($ar_fields['DETAIL_PICTURE']);
    $SRC=$ar_fields['DETAIL_PICTURE']["SRC"];
   ?>
    <div class="flexbox-slide <?=($first?'active':'')?>" style="background:url(<?=$SRC?>) no-repeat center;">
        <img src="<?=$SRC?>">
    </div>

    <?$first=false;
}
