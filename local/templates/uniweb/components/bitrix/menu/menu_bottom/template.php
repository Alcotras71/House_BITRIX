<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="footer__top">
<ul class="footer__menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
		<li><a <?if(!empty($arItem["PARAMS"]["class"])):?> class="<?=$arItem["PARAMS"]["class"]?>" <?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

<?endforeach?>

</ul>
</div>
<?endif?>
