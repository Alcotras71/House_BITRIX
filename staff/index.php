<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); $APPLICATION->SetTitle("Подобрать персонал");?>

<!-- PickUpStaff -->
				<div class="PickUpStaff">
					<div class="container">
						<h1 class="PickUpStaff__title">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "title"
								)
							);?>
						</h1>
						<div class="PickUpStaff__checklist">
							<form class="PickUpStaff__form" action="#" method="POST">
								<div class="PickUpStaff__showselect">
									<div class="PickUpStaff__selecttext">
										Показать только
									</div>
									<div class="staffsel">
										<div class="staffsel__header">
											<span class="staffsel__current">Няня</span>
											<input id="current_worker" value="" type="hidden" name="current">
											<div class="staffsel__icon"></div>
										</div>
										<div class="staffsel__body">
											<div class="staffsel__item hidden">Няня</div>
											<div class="staffsel__item">Гувернантка</div>
											<div class="staffsel__item">Дворник</div>
											<div class="staffsel__item">Водитель</div>
											<div class="staffsel__item">Садовник</div>
										</div>
									</div>
								</div>
								<div class="PickUpStaff__range">
									<div class="PickUpStaff__experience">
										<span>Стаж от </span>
										<input type="number" name="experience" value="1">
										<span> до </span>
										<input type="number" name="experience" value="30">
										<span> лет </span>
									</div>
									<div class="PickUpStaff__age">
										<span>Возраст от </span>
										<input type="number" name="age" value="25">
										<span> до </span>
										<input type="number" name="age" value="65">
										<span> лет </span>
									</div>
								</div>
								<div class="PickUpStaff__btn">
									<input class="btn__pickup" type="submit" value="Подобрать">
								</div>
							</form>
						</div>

						<table class="PickUpStaff__table">
							<tr class="PickUpStaff__table_top">
								<th>ФИО</th>
								<th>должность</th>
								<th>возраст</th>
								<th>стаж работы</th>
							</tr>
							<tr class="PickUpStaff__table_white">
								<td>Лопухова Надежда Александровна</td>
								<td>Гувернантка</td>
								<td>45</td>
								<td>15 лет</td>
							</tr>
							<tr class="PickUpStaff__table_whithoutborder">
								<td>Ермакова Надежда Ивановна</td>
								<td>Няня</td>
								<td>30</td>
								<td>5 лет</td>
							</tr>
							<tr class="PickUpStaff__table_white">
								<td>Филимонов Евгений Семенович</td>
								<td>Садовник</td>
								<td>50</td>
								<td>20 лет</td>
							</tr>
							<tr class="PickUpStaff__table_whithoutborder">
								<td>Лопухова Надежда Александровна</td>
								<td>Уборщица</td>
								<td>35</td>
								<td>7 лет</td>
							</tr>
							<tr class="PickUpStaff__table_white">
								<td>Миронов Юрий Герасимович</td>
								<td>Конюх</td>
								<td>60</td>
								<td>15 лет</td>
							</tr>
							<tr class="PickUpStaff__table_whithoutborder">
								<td>Новикова Нина Алексеевна</td>
								<td>Повар</td>
								<td>55</td>
								<td>30 лет</td>
							</tr>
							<tr class="PickUpStaff__table_white">
								<td>Лопухова Надежда Александровна</td>
								<td>Гувернантка</td>
								<td>45</td>
								<td>15 лет</td>
							</tr>
							<tr class="PickUpStaff__table_whithoutborder">
								<td>Лопухова Надежда Александровна</td>
								<td>Гувернантка</td>
								<td>45</td>
								<td>15 лет</td>
							</tr>
							<tr class="PickUpStaff__table_white">
								<td>Лопухова Надежда Александровна</td>
								<td>Гувернантка</td>
								<td>45</td>
								<td>15 лет</td>
							</tr>
						</table>

						<div class="PickUpStaff__text">
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>