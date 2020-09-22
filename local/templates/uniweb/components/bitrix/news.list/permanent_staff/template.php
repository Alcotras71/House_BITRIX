<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if (!empty($arResult["ITEMS"])): ?>
	<div class="main-middle__wrapper">
		<?php foreach ($arResult["ITEMS"] as $arItem =>$arCur): ?>
			<?
			$this->AddEditAction($arCur['ID'], $arCur['EDIT_LINK'], CIBlock::GetArrayByID($arCur["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arCur['ID'], $arCur['DELETE_LINK'], CIBlock::GetArrayByID($arCur["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div id="<?=$this->GetEditAreaId($arCur['ID']);?>" class="<?php if ($arItem!==1): ?>main-middle__left<?php else:?> main-middle__right<?php endif;?>">
				<div class="main-middle__image <?php if ($arItem!==1): ?>image-left<?php else:?>image-right<?php endif;?>">
					<?php if (!empty($arCur["PREVIEW_PICTURE"]["SRC"])): ?>
						<img src="<?=$arCur["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arCur["PREVIEW_PICTURE"]["ALT"];?>" />
					<?php endif ?>
				</div>
				<div>
					<h2 class="main-middle__title <?php if ($arItem==1): ?>title-right<?php endif;?>"><?= isset($arCur["NAME"]) ? $arCur["NAME"] : ''; ?></h2>
					<p class="main-middle__text"><?= isset($arCur["PREVIEW_TEXT"]) ? $arCur["PREVIEW_TEXT"] : ''; ?></p>
				</div>
				<div class="main-middle__button <?php if ($arItem!==1): ?>button-left<?php else:?>button-right<?php endif;?>">
				<?php if (!empty($arCur["DETAIL_TEXT"]) && !empty($arCur["PROPERTIES"]["LINK"]["VALUE"])): ?>
					<a href="<?=$arCur["PROPERTIES"]["LINK"]["VALUE"]; ?>">
						<?=$arCur["DETAIL_TEXT"]; ?>
					</a>
				<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif ?>

