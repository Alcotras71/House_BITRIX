<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

			</div>
			<!-- Footer -->
			<footer class="footer">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"menu_bottom",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(0=>"",),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "N",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N"
						)
					);?>


					<div class="footer__bottom">
						<div class="footer__tel">
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
						<div class="footer__copyright">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/copyright.php"
								)
							);?>
							<a target="_blank" href="https://uniofweb.ru/">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => "/include/logo_bottom.php"
								)
							);?>
							</a>
						</div>
					</div>
			</footer>		
		</div>
		<?php 
			use Bitrix\Main\Page\Asset;
			$APPLICATION->ShowHead();
		 ?>
		<?php 
			Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>');
			Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/slick/slick.js');
			Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
		 ?>

	</body>
</html>