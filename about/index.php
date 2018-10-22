<?global $CUSTOM_CLASS;
$CUSTOM_CLASS = 'custom_pages about_pages';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?>
    <!-- slider -->

    <div class="slider-wrapper">


        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider_frontpage",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
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
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "SORT",
                    2 => "DETAIL_PICTURE",
                    3 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => 7,
                "IBLOCK_TYPE" => "slider",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "slider_frontpage"
            ),
            false
        );

        ?>

        <i class="arrow-down"></i>

    </div>

    <!-- end slider -->


    <div class="about_developer">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about/h2.php"), false);?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-8">
                    <div class="about_developer_wrapper">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about/text.php"), false);?>

                    </div>
                </div>
                <div class="col-lg-4 about_developer_pdf">

                    <a href="#" >
                        <span>История компании Finex</span>
                    </a>

                    <a href="#" >
                        <span>Гарантии на продукцию</span>
                    </a>

                    <a href="#" >
                        <span>Транспортировка и хранение</span>
                    </a>

                    <a href="#" >
                        <span>Инструкция по уходу</span>
                    </a>


                </div>
            </div>


        </div>

    </div>

    <div class="single-section">

        <div class="row section-heading">

            <h2>ПРОИЗВОДСТВО</h2>

            <p>
                Продукция Finex производится в России в г. Клин Московской области с 2001 года. В 2012 году к российскому производственному комплексу добавились производственные площадки в Австрии и Бельгии.
            </p>
            <p>
                Все производственные площадки компании «Файнэкс» оснащены современным оборудованием от ведущих европейских производителей (сушильные камеры Secea, строгальное оборудование Weinig, шипорезные станки Friulmac, Ortza и т.д.). Покрытие доски осуществляется на базе автоматических линий оснащенных оборудованием Cefla, Viet, SCM, Superfici запущенных совместно со  стратегическим партнером компании «Файнэкс» международным концерном MAPO Group (Бельгия), который является одним из лидеров европейского рынка услуг по покрытию паркетной доски.
            </p>
        </div>

        <div class="slider-containers">
            <div class="slider-container">
                <div class="flexbox-slider flexbox-slider-1">
                    <div class="flexbox-slide active" style="background:url(/images/acc1.png) no-repeat center;">
                        <img src="/images/acc1.png">

                    </div>
                    <div class="flexbox-slide" style="background:url(/images/acc2.png) no-repeat center;">
                        <img src="/images/acc2.png">

                    </div>
                    <div class="flexbox-slide" style="background:url(/images/acc3.png) no-repeat center;">
                        <img src="/images/acc3.png">

                    </div>

                </div>
            </div>
<?/*
            <div class="button-bar">

                <div class="flexbox-nav-dots"></div>


            </div>
*/?>
        </div>



    </div>
    <div class="single-section">

        <div class="row section-heading">

            <h2>ТЕХНОЛОГИЯ FINEX</h2>

            <p>
                Для того чтобы обеспечить высочайшее качество продукции, наша компания осуществляет полный цикл производства, включающий производство паркетной доски из массива, обработку и декорирование поверхности, финишное покрытие маслом и монтаж пола по месту укладки.
            </p>
            <p>
                Весь процесс производства массивных полов Finex основан на использовании многовекового опыта европейских мастеров, достижений современной техники и собственных уникальных разработок компании:
            </p>
            <p>
                <b>Новая технология производства</b> доски обеспечивает отсутствие повторяемости рисунка на полу (настоящая «французская палуба») и возможность оригинальной (разноширинной) укладки. Доска Finex имеет показатели качества, значительно превышающие мировые стандарты (DIN), и обеспечивает безупречную эксплуатацию пола в течение многих десятилетий (структурная гарантия на доску Finex 25 лет).
                <br>
                <br>
                <b>Эксклюзивная технология обработки</b> массивной доски Finex позволяет создавать настоящие произведения искусства. Доска строгается, брашируется и шлифуется вручную. Морение, копчение и обработка доски натуральными пигментами осуществляются на основе собственных разработок компании. Весь процесс покрытия доски Finex включает от 15 до 23 технологических операций, из которых более половины – уникальные.
                <br>
                <br>
                <b>Применение уникальных систем</b> покрытия, позволяет производить деревянные напольные покрытия высшего качества с оригинальным декором и заводским покрытием по индивидуальному заказу. Системы отличаются между собой набором возможностей для создания дизайна и проектирования полов.
            </p>
        </div>

        <div class="slider-containers">
            <div class="slider-container">
                <div class="flexbox-slider flexbox-slider-2">
                    <div class="flexbox-slide active" style="background:url(/images/acc1.png) no-repeat center;">
                        <img src="/images/acc1.png">

                    </div>
                    <div class="flexbox-slide" style="background:url(/images/acc2.png) no-repeat center;">
                        <img src="/images/acc2.png">

                    </div>
                    <div class="flexbox-slide" style="background:url(/images/acc3.png) no-repeat center;">
                        <img src="/images/acc3.png">

                    </div>

                </div>
            </div>
            <?/*
            <div class="button-bar">

                <div class="flexbox-nav-dots"></div>


            </div>
*/?>

        </div>



    </div>

    <!-- three sections -->

    <div class="single-section three-sections">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_text.php"), false);?>

        </div>

        <div class="row threes-slider">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/inspi_items.php"), false);?>


        </div>

        <div class="threes-nav-dots"></div>

    </div>

    <!-- end three sections -->

    <!-- 360 section -->

    <div class="single-section s360">

        <div class="row section-heading">

            <h2><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h2.php"), false);?></h2>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_text.php"), false);?>

        </div>

        <div class="row cont">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
                array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_img.php"), false);?>


            <div class="col-md-4 align-middle">

                <div class="table">

      <span>

    <h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "",
            array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h3.php"), false);?></h3>
          <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
              array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/main/s360_h3_text.php"), false);?>


      </span>

                </div>

            </div>

        </div>

    </div>

    <!-- end 360 section -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>