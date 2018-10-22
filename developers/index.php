<?global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'custom_pages ';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?>

    <!-- top baner section -->

    <div class="banner_main">
        <img src="/images/top-banner-developers.jpg" alt="img-fluid" class="img-fluid">
    </div>

    <!-- end top baner section -->

    <!-- developer  section -->
    <div class="about_developer">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>девелоперам</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="about_developer_wrapper">
                        <p class="about_developer_text">
                            Мы приглашаем к сотрудничеству тех, кто заинтересован в отделке общественных помещений – владельцев,
                            инвесторов, девелоперов, строительные компании и дизайнеров, специализирующихся на оформлении
                            интерьеров в этом секторе. Наша компания предлагает полный комплекс услуг по оборудованию помещений
                            напольными покрытиями из дуба – от разработки дизайн-проекта до производства  и постгарантийного обслуживания.
                            <big>У нас большой опыт реализации проектов для объектов коммерческого назначения, и мы хорошо знаем специфику работы на таких объектах.
                            </big>
                            Располагая собственным производством и собственными источниками сырья, мы в отличие от компаний-посредников можем гарантировать надежность поставок и обеспечить поставки больших объемов продукции в сжатые сроки и по разумным ценам.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about_developer_pdf">
                        <a href="#" download>
                            <img src="/images/pdf.png" alt="pdf">
                            <span>Условия сотрудничества с девелоперами <span>.pdf</span></span>
                        </a>
                    </div>
                    <div class="about_developer_pdf">
                        <a href="#" download>
                            <img src="/images/pdf.png" alt="pdf">
                            <span>Каталог Finex для общественных  интерьеров  <span>.pdf</span></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="about_developer_wrapper">
                        <div class="form_registration_wrapper">
                            <div class="form_registration">
                                <div class="form_registration_inset">
                                    <form>
                                        <h3>отправьте проект на просчет</h3>

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
                                            <div class="upload-photos-wrapper">
                                                <label class="upload-photos">
                                                    <input type="file" placeholder="upload your new photo" class="about-input photos-file">
                                                    <span class="img-name">прикрепить файл</span>
                                                </label>

                                            </div>
                                        </div>

                                        <div class="form_registration_row">
                                            <label class="checkbox_label">
                                                <input type="checkbox">
                                                <span class="checkbox_box"></span>
                                                <span>Подтверждаю согласие на обработку персональных данных</span>
                                            </label>
                                        </div>
                                        <div class="form_registration_row">
                                            <button type="submit">отправить </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    <!-- end developer section -->
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