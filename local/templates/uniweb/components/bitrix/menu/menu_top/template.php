<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?if (!empty($arResult)):?>
<nav class="header__bottom">
<ul class="menu-top">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li<?if($arItem["PARAMS"]["class"]):?> class="<?=$arItem["PARAMS"]["class"]?>"<?endif?>><a href="<?=$arItem["LINK"]?>" class="menu-top__link <?=$arItem["PARAMS"]["class"]?>"><?=$arItem["TEXT"]?></a>
				<ul class="submenu">
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>" class="submenu__link"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li<?if($arItem["PARAMS"]["class"]):?> class="<?=$arItem["PARAMS"]["class"]?>"<?endif?>><a href="<?=$arItem["LINK"]?>" class="menu-top__link <?=$arItem["PARAMS"]["class"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>" class="submenu__link"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
	<div class="menu-top__logo"><a href="/">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/logo_top.php"
			)
		);?>
	</a></div>
</ul>
</nav>
<?endif?>