<?
$arFilter = Array(
    "IBLOCK_ID"=>1,"ACTIVE"=>"Y",">PREVIEW_PICTURE"=>0,
);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC", ), $arFilter,false,['nTopCount'=>3], Array(
    "ID","NAME","CODE","PREVIEW_TEXT","PREVIEW_PICTURE"));

$ii=0;
while($ar_fields = $res->GetNext())
{
    $ii++;
    if($ii==1)$class='first';
    if($ii==2)$class='second';
    if($ii==2)$class='third';
    $ar_fields['PREVIEW_PICTURE'] = CFile::GetFileArray($ar_fields['PREVIEW_PICTURE']);
    $SRC=$ar_fields['PREVIEW_PICTURE']["SRC"];
    ?>
     <div class="col-md-4 <?=$class?>"  style="background:url(<?=$SRC?>) no-repeat center;">

                <div class="table">

                    <h3><?=$ar_fields['NAME']?></h3>

                    <p><?=$ar_fields['PREVIEW_TEXT']?></p>

                    <a href="/inspiration/<?=$ar_fields['CODE']?>/" class="brown">подробнее</a>

                </div>

            </div>

    <?
}?>