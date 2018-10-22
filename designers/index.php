<?global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'custom_pages ';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?>

	<!-- top baner section -->
	<div class="banner_main">
		<img src="/images/top-banner-designers.jpg" alt="img-fluid" class="img-fluid">
	</div>
	<!-- end top baner section -->

	<!-- desinger about section -->
	<div class="about_desinger present">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>дизайнерам</h2>
					</div>
					<p class="about_desinger_text">
						Компания «Файнэкс» активно поддерживает развитие дизайнерского дела в России.
						С этой целью разрабатываются специальные программы сотрудничества, проводятся
						конкурсы дизайн-проектов, организуются мастер-классы и другие мероприятия.
						Для проектирования индивидуаль-ного дизайна пола на основе массивной доски компания
						Finex специально разработала три уникальные системы дизайна.
						Компания приветствует любые формы взаимодействия с архитекторами, дизайнерами и строителями.
						<big>Для повышения эффективности сотрудничества мы предлагаем Вам <a href="#reg">зарегистрироваться</a> на нашем сайте. <br>В этом случае:</big>
					</p>

					<div class="row mobile-only">
						<div class="col-md-4 col">
							<div class="about_desinger_item text-center">
								<div class="img_box"><img src="/images/ic-1.png" alt="icon"></div>
								<p>Вам будут доступны<br> специальные материалы on-line</p>
							</div>
						</div>
						<div class="col-md-4 col">
							<div class="about_desinger_item text-center">
								<div class="img_box"><img src="/images/ic-2.png" alt="icon"></div>
								<p>Вы сможете заказать <br>образцы продукции,<br> бумажный каталог,<br>  диск с альбомом <br>изображений<br> и материалами сайта</p>
							</div>
						</div>
						<div class="col-md-4 col">
							<div class="about_desinger_item text-center">
								<div class="img_box"><img src="/images/ic-3.png" alt="icon"></div>
								<p>Для Вас будет подготовлено<br> специальное предложение<br>  в соответствии с Вашими<br> интересами</p>
							</div>
						</div>

						<div class="col-md-6 col">
							<div class="about_desinger_item_left about_desinger_item text-center row_down">
								<div class="img_box"><img src="/images/ic-4.png" alt="icon"></div>
								<p>Вы получите возможность<br> приобретать продукцию<br> Finex<br>  на особых условиях</p>
							</div>
						</div>
						<div class="col-md-6 col">
							<div class="about_desinger_item_right about_desinger_item text-center row_down">
								<div class="img_box"><img src="/images/ic-5.png" alt="icon"></div>
								<p>Вы всегда будете<br> осведомлены<br>  о новинках продукции,<br> специальных предложениях<br>  и мероприятиях компании</p>
							</div>
						</div>
					</div>
					<div class="item-slick-nav"></div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12 form_registration_wrapper">
					<div class="form_registration">
                        <a name="reg"></a>
						<div class="form_registration_inset">
							<form>
								<h3>регистрация</h3>
								<div class="form_registration_row">
									<label>Ваше имя и фамилия <span>*</span></label>
									<input type="text" placeholder="Иван Иванов">
								</div>

								<div class="form_registration_row">
									<label>Название организации (если есть)</label>
									<input type="text" placeholder="Архитектурное бюро">
								</div>

								<div class="form_registration_row">
									<label>Email <span>*</span></label>
									<input type="email" placeholder="ivan@ivan.art">
								</div>
								<div class="form_registration_row">
									<label>Телефон для связи <span>*</span></label>
									<input type="email" placeholder="+7 123 123-45-67">
								</div>
								<div class="form_registration_row">
									<label class="checkbox_label">
										<input type="checkbox">
										<span class="checkbox_box"></span>
										<span>Уведомляйте меня о мероприятиях с бесплатным баром</span>
									</label>
								</div>
								<div class="form_registration_row">
									<label class="checkbox_label">
										<input type="checkbox">
										<span class="checkbox_box"></span>
										<span>Подтверждаю согласие на обработку персональных данных</span>
									</label>
								</div>
								<div class="form_registration_row">
									<button type="submit">зарегистрироваться</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end desinger about section -->
	<!-- accordion section -->

	<div class="single-section">

		<div class="row section-heading">

			<h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/project_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/project_text.php"), false);?>

		</div>

		<div class="slider-containers">
			<div class="slider-container">
				<div class="flexbox-slider flexbox-slider-1">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                        array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/gallary_items.php"), false);?>


				</div>
			</div>



		</div>

		<div class="button-bar">

			<div class="flexbox-nav-dots"></div>

			<a href="/gallary/" class="brown">подробнее</a>

		</div>

	</div>

	<!-- end accordion section -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>