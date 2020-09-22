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
<div class="form__application">
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

		<div class="positionsel">
			<div class="positionsel__header">
				<span class="positionsel__current cur_pos">Няня</span>
				<input id="current_posworker" type="hidden" name="user_position">
				<div class="positionsel__icon"></div>
			</div>
			<div class="positionsel__body">
					<div class="positionsel__item hidden">Няня</div>
					<div class="positionsel__item">Репетитор</div>
					<div class="positionsel__item">Гувернантка</div>
					<div class="positionsel__item">Водитель</div>
					<div class="positionsel__item">Садовник</div>
			</div>
		</div>

		<div class="schedulesel">
			<div class="schedulesel__header">
				<span class="schedulesel__current cur_sched">График работы</span>
				<input id="current_schedworker" type="hidden" name="user_schedule" >
				<div class="schedulesel__icon"></div>
			</div>
			<div class="schedulesel__body">
					<div class="schedulesel__item">Полный день</div>
					<div class="schedulesel__item">Пол дня</div>
					<div class="schedulesel__item">несколько часов</div>
					<div class="schedulesel__item">Круглосуточно</div>
			</div>
		</div>
		<textarea name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
		
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

	<div class="form__application_btn">
		<input class="btn__application" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>

</form>
</div>
