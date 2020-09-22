<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ваш дом");?>


				<!-- Main-top -->
				
				<!-- Main-middle -->
				<div class="main-middle">
					<div class="container container-middle">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"permanent_staff",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "N",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT",""),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "6",
								"IBLOCK_TYPE" => "Content",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "N",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "10",
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
								"PROPERTY_CODE" => array("LINK",""),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "SORT",
								"SORT_BY2" => "ACTIVE_FROM",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "DESC",
								"STRICT_SECTION_CHECK" => "N"
							)
						);?>
					</div>
				</div>
				<!-- Main-bottom -->
				<div class="main-bottom">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "index_pictures", Array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
							"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"CACHE_GROUPS" => "Y",	// Учитывать права доступа
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
							"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
							"DISPLAY_DATE" => "N",	// Выводить дату элемента
							"DISPLAY_NAME" => "N",	// Выводить название элемента
							"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
							"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"FIELD_CODE" => array(	// Поля
								0 => "NAME",
								1 => "PREVIEW_PICTURE",
							),
							"FILTER_NAME" => "",	// Фильтр
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
							"IBLOCK_ID" => "7",	// Код информационного блока
							"IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
							"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
							"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							"NEWS_COUNT" => "4",	// Количество новостей на странице
							"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
							"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
							"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
							"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
							"PAGER_TITLE" => "Новости",	// Название категорий
							"PARENT_SECTION" => "",	// ID раздела
							"PARENT_SECTION_CODE" => "",	// Код раздела
							"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
							"PROPERTY_CODE" => array(	// Свойства
							),
							"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
							"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
							"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
							"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
							"SET_STATUS_404" => "N",	// Устанавливать статус 404
							"SET_TITLE" => "N",	// Устанавливать заголовок страницы
							"SHOW_404" => "N",	// Показ специальной страницы
							"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
							"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
							"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
							"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
							"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
						),
						false
					);?>

					<div class="main-bottom__bottom">
						<div class="container">
							<h3 class="main-bottom__title">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "page",
										"AREA_FILE_SUFFIX" => "title"
									)
								);?>
							</h3>
							<div class="main-bottom__text">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "page",
										"AREA_FILE_SUFFIX" => "text"
									)
								);?>
							</div>
						</div>
					</div>
				</div>




<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>