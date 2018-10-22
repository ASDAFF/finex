<?php
$arFilter = array('IBLOCK_ID' => 2, 'ACTIVE' => 'Y');
$sel=[
        'ID',
        'CODE',
        'NAME',
        'DETAIL_PICTURE',
        'DESCRIPTION',
        'UF_SDESC',
];
$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), $arFilter, false, $sel);
?>

	<div class="single-section nav-filter">

	<div class="container">

	<div class="row">

		<ul class="desktop-filter">
<?
$sections=[];
global $arSectionActive;
$arSectionActive=false;
while ($arSection = $rsSections->Fetch())
{
if(strpos($_SERVER['REQUEST_URI'],$arSection['CODE'])){
    $arSection['class']='class="active"';
    $arSectionActive=$arSection;
}else{
	$arSection['class']='';
    $sections[]=$arSection;
}
    ?>
		<li><a <?=$arSection['class']?> href="/catalog/<?=$arSection['CODE']?>/"><?=$arSection['NAME']?></a></li>

<?}
if(empty($arSectionActive))$arSectionActive=$sections[0];
?>

		</ul>

		<div class="select-box">
			<a class="btn dropdown-toggle btn-select" data-toggle="dropdown" href="/catalog/<?=$arSectionActive['CODE']?>/"><span><?=$arSectionActive['NAME']?></span></a>
			<ul class="dropdown-menu">
				<?
				foreach($sections as $arSection){?>
					<li><a <?=$arSection['class']?> href="/catalog/<?=$arSection['CODE']?>/"><?=$arSection['NAME']?></a></li>
                <?}
				?>
			</ul>

		</div>

	</div>

	</div>

	</div>
