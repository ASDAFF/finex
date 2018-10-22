<?
$arFilter = array('IBLOCK_ID' => 2, 'ACTIVE' => 'Y');
$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter);
while ($arSection = $rsSections->Fetch())
{
    $arSection['PICTURE'] = CFile::GetFileArray($arSection['PICTURE']);
    $SRC=$arSection['PICTURE']["SRC"];

    ?>
    <div class="col-md-3">

        <div class="thumb-wrapper"><a href="/catalog/<?=$arSection['CODE']?>/"><img src="<?=$SRC?>"></a></div>

    <p><?=$arSection['NAME']?></p>

</div>

<?}?>
