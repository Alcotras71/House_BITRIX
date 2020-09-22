<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="form__resume">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div style="color:green;" class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?>">
		<input type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="<?=GetMessage("MFT_PHONE")?>">

		<div class="resumesel">
			<div class="resumesel__header">
				<span class="resumesel__current res_sel">Должность</span>
				<input id="current_resworker" type="hidden" name="user_positionsel" >
				<div class="resumesel__icon"></div>
			</div>
			<div class="resumesel__body">
					<div class="resumesel__item">Репетитор</div>
					<div class="resumesel__item">Гувернантка</div>
					<div class="resumesel__item">Няня</div>
					<div class="resumesel__item">Водитель</div>
					<div class="resumesel__item">Садовник</div>
			</div>
		</div>
		<input type="text" name="user_education" value="<?=$arResult["AUTHOR_EDUCATION"]?>" placeholder="<?=GetMessage("MFT_EDUCATION")?>">
		
		<input type="text" class="form__resume_sendresume" name="user_resume" value="<?=$arResult["AUTHOR_RESUME"]?>" placeholder="<?=GetMessage("MFT_RESUME")?>">
		
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

	<div class="form__resume_btn">
		<input class="btn__resume" type="submit" name="submitres" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>

</form>
</div>
