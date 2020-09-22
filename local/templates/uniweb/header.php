<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<?php $APPLICATION->ShowHead(); ?>
		<!-- Заголовок страницы в браузере -->
		<title><?php $APPLICATION->ShowTitle(); ?></title>
		<!-- Подключаем CSS -->
		<?php 
			use Bitrix\Main\Page\Asset;
		 ?>
		<?php 
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/slick/slick.css');
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/slick/slick-theme.css');
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
			Asset::getInstance()->addString('<meta charset="UTF-8" />');
		 ?>
		 <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	</head>
	<!-- Отображаемое тело страницы -->
	<body>

		<div id="panel"><?$APPLICATION->ShowPanel();?></div>

		<div class="wrapper">
			<!-- Header -->
			<header class="header">
				<div class="container">
					<div class="header__top">
						<div class="header__tel">
							<a href="tel:+74872311345">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/number.php"
								)
							);?>
							</a>
						</div>
						<div class="header__buttons">
							<!-- Application -->
								<div class="header__topbutton application">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/include/send_application.php"
									)
								);?>
								</div>
								<?$APPLICATION->IncludeComponent(
									"feedbackapp:main.feedback",
									"feedback_app",
									Array(
										"AJAX_MODE" => "Y",
										"EMAIL_TO" => "AimDragMan2@yandex.ru",
										"EVENT_MESSAGE_ID" => "",
										"OK_TEXT" => "Спасибо, ваше сообщение принято.",
										"REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",),
										"USE_CAPTCHA" => "N"
									)
								);?>
								<!-- Resume -->
								<div class="header__topbutton resume">
									<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => "/include/send_resume.php"
									)
								);?>
								</div>
								<?$APPLICATION->IncludeComponent(
									"feedbackres:main.feedback",
									"feedback_res",
									Array(
										"AJAX_MODE" => "Y",
										"EMAIL_TO" => "AimDragMan2@yandex.ru",
										"EVENT_MESSAGE_ID" => "",
										"OK_TEXT" => "Спасибо, ваше сообщение принято.",
										"REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",),
										"USE_CAPTCHA" => "N"
									)
								);?>
						</div>
					</div>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"menu_top",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "submenu",
						"COMPONENT_TEMPLATE" => "horizontal_multilevel",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => "",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				);?>
			</header>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"slider",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"COMPONENT_TEMPLATE" => ".default",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "header",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "TIMESTAMP_X",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "DESC",
					"STRICT_SECTION_CHECK" => "N"
				)
			);?>
				<!-- Main-top -->
			<div class="content">