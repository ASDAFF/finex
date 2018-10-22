<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Паркетные полы Finex");
$APPLICATION->SetPageProperty("keywords", "массивная доска, паркет, элитный паркет, художественный паркет, мозаичный паркет, паркет из дуба, массивная доска пола, продажа паркета");
$APPLICATION->SetPageProperty("description", "Компания Finexfloors.ru осуществляющая продажу и укладку паркета и массивной доски. Дизайн, производство и продажа массивной доски пола, элитного паркета, художественного и мозаичного паркета");

?>  <?$APPLICATION->IncludeComponent("bitrix:main.include", "",
    array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/finex/menu.php"), false);?>

<?$APPLICATION->IncludeComponent("bitrix:catalog", "main", Array(
    "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
    "IBLOCK_ID" => "2",	// Инфоблок
    "TEMPLATE_THEME" => "site",	// Цветовая тема
    "HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
    "BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
    "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
    "SEF_MODE" => "Y",	// Включить поддержку ЧПУ
    "SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "CACHE_TYPE" => "N",	// Тип кеширования
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "ADD_SECTION_CHAIN" => "Y",
    "ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
    "SET_STATUS_404" => "Y",	// Устанавливать статус 404
    "DETAIL_DISPLAY_NAME" => "N",	// Выводить название элемента
    "USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
    "USE_FILTER" => "Y",	// Показывать фильтр
    "FILTER_NAME" => "",	// Фильтр
    "FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
    "FILTER_FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "FILTER_PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "",
    ),
    "FILTER_PRICE_CODE" => array(	// Тип цены
        0 => "BASE",
    ),
    "FILTER_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "PREVIEW_PICTURE",
        1 => "DETAIL_PICTURE",
        2 => "",
    ),
    "FILTER_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
        0 => "",
        1 => "",
    ),
    "USE_REVIEW" => "Y",	// Разрешить отзывы
    "MESSAGES_PER_PAGE" => "10",	// Количество сообщений на одной странице
    "USE_CAPTCHA" => "Y",	// Использовать CAPTCHA
    "REVIEW_AJAX_POST" => "Y",	// Использовать AJAX в диалогах
    "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",	// Путь относительно корня сайта к папке со смайлами
    "FORUM_ID" => "1",	// ID форума для отзывов
    "URL_TEMPLATES_READ" => "",	// Страница чтения темы (пусто - получить из настроек форума)
    "SHOW_LINK_TO_FORUM" => "Y",	// Показать ссылку на форум
    "USE_COMPARE" => "N",	// Разрешить сравнение товаров
    "PRICE_CODE" => array(	// Тип цены
        0 => "BASE",
    ),
    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
    "PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
    "PRODUCT_PROPERTIES" => "",	// Характеристики товара, добавляемые в корзину
    "USE_PRODUCT_QUANTITY" => "Y",	// Разрешить указание количества товара
    "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
    "QUANTITY_FLOAT" => "N",
    "OFFERS_CART_PROPERTIES" => array(	// Свойства предложений, добавляемые в корзину
        0 => "type_uf1",
        1 => "type_uf2",
        2 => "type_uf3",
        3 => "type_uf4",
        4 => "type_uf5",
        5 => "type_uf6",
        6 => "type_uf7",
        7 => "type_uf8",
        8 => "type_uf9",
        9 => "type_uf10",
    ),
    "SHOW_TOP_ELEMENTS" => "N",	// Выводить топ элементов
    "SECTION_COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
    "SECTION_TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
    "SECTIONS_VIEW_MODE" => "TILE",	// Вид списка подразделов
    "SECTIONS_SHOW_PARENT_NAME" => "N",	// Показывать название раздела
    "PAGE_ELEMENT_COUNT" => "15",	// Количество элементов на странице
    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
    "ELEMENT_SORT_FIELD" => "desc",	// По какому полю сортируем товары в разделе
    "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
    "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
    "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
    "LIST_PROPERTY_CODE" => array(	// Свойства
        0 => "NEWPRODUCT",
        1 => "SALELEADER",
        2 => "SPECIALOFFER",
        3 => "",
    ),
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "LIST_META_KEYWORDS" => "UF_KEYWORDS",	// Установить ключевые слова страницы из свойства раздела
    "LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",	// Установить описание страницы из свойства раздела
    "LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",	// Установить заголовок окна браузера из свойства раздела
    "LIST_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "NAME",
        1 => "PREVIEW_PICTURE",
        2 => "DETAIL_PICTURE",
        3 => "",
    ),
    "LIST_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
        0 => "type_uf1",
        1 => "type_uf2",
        2 => "type_uf3",
        3 => "type_uf4",
        4 => "type_uf5",
        5 => "type_uf6",
        6 => "type_uf7",
        7 => "type_uf8",
        8 => "type_uf9",
        9 => "type_uf10",
    ),
    "LIST_OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
    "SECTION_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
    "DETAIL_PROPERTY_CODE" => array(	// Свойства
        0 => "NEWPRODUCT",
        1 => "ARTNUMBER",
        2 => "SPECIALOFFER",
        3 => "tags",
        4 => "collection",
        5 => "MATERIAL",

    ),
    "DETAIL_META_KEYWORDS" => "KEYWORDS",	// Установить ключевые слова страницы из свойства
    "DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",	// Установить описание страницы из свойства
    "DETAIL_BROWSER_TITLE" => "TITLE",	// Установить заголовок окна браузера из свойства
    "DETAIL_OFFERS_FIELD_CODE" => array(	// Поля предложений
        0 => "NAME",
        1 => "",
    ),
    "DETAIL_OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
        0 => "type_uf1",
        1 => "type_uf2",
        2 => "type_uf3",
        3 => "type_uf4",
        4 => "type_uf5",
        5 => "type_uf6",
        6 => "type_uf7",
        7 => "type_uf8",
        8 => "type_uf9",
        9 => "type_uf10",
    ),
    "DETAIL_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
    "LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
    "LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
    "LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
    "USE_ALSO_BUY" => "Y",	// Показывать блок "С этим товаром покупают"
    "ALSO_BUY_ELEMENT_COUNT" => "4",	// Количество элементов для отображения
    "ALSO_BUY_MIN_BUYES" => "1",	// Минимальное количество покупок товара
    "OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
    "OFFERS_SORT_ORDER" => "desc",	// Порядок сортировки предложений товара
    "OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
    "OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
    "PAGER_TEMPLATE" => "round",	// Шаблон постраничной навигации
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "PAGER_TITLE" => "Товары",	// Название категорий
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительная картинка основного товара
    "LABEL_PROP" => array(	// Свойство меток товара
        0 => "NEWPRODUCT",
    ),
    "PRODUCT_DISPLAY_MODE" => "Y",	// Схема отображения
    "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительные картинки предложения
    "OFFER_TREE_PROPS" => array(	// Свойства для отбора предложений
        0 => "type_uf1",
        1 => "type_uf2",
        2 => "type_uf3",
        3 => "type_uf4",
        4 => "type_uf5",
        5 => "type_uf6",
        6 => "type_uf7",
        7 => "type_uf8",
        8 => "type_uf9",
        9 => "type_uf10",
    ),
    "SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
    "SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
    "MESS_BTN_COMPARE" => "понравилось?",	// Текст кнопки "Сравнение"
    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
    "DETAIL_USE_VOTE_RATING" => "Y",	// Включить рейтинг товара
    "DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",	// В качестве рейтинга показывать
    "DETAIL_USE_COMMENTS" => "Y",	// Включить отзывы о товаре
    "DETAIL_BLOG_USE" => "Y",	// Использовать комментарии
    "DETAIL_VK_USE" => "N",	// Использовать Вконтакте
    "DETAIL_FB_USE" => "Y",	// Использовать Facebook
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "USE_STORE" => "Y",	// Показывать блок "Количество товара на складе"
    "BIG_DATA_RCM_TYPE" => "personal",	// Тип рекомендации
    "FIELDS" => array(	// Поля
        0 => "SCHEDULE",
        1 => "STORE",
        2 => "",
    ),
    "USE_MIN_AMOUNT" => "N",	// Показывать вместо точного количества информацию о достаточности
    "STORE_PATH" => "/store/#store_id#",	// Шаблон пути к каталогу STORE (относительно корня)
    "MAIN_TITLE" => "Наличие на складах",	// Заголовок блока
    "MIN_AMOUNT" => "10",
    "DETAIL_BRAND_USE" => "Y",	// Использовать компонент "Бренды"
    "DETAIL_BRAND_PROP_CODE" => array(	// Таблица с брендами
        0 => "BRAND_REF",
        1 => "",
    ),
    "SIDEBAR_SECTION_SHOW" => "N",	// Показывать правый блок в списке товаров
    "COMPONENT_TEMPLATE" => ".default",
    "HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
    "LABEL_PROP_MOBILE" => "",	// Свойства меток товара, отображаемые на мобильных устройствах
    "LABEL_PROP_POSITION" => "top-left",	// Расположение меток товара
    "COMMON_SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
    "PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
    "DISCOUNT_PERCENT_POSITION" => "bottom-right",	// Расположение процента скидки
    "SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
    "SIDEBAR_DETAIL_SHOW" => "N",	// Показывать правый блок на детальной странице
    "SIDEBAR_PATH" => "",	// Путь к включаемой области для вывода информации в правом блоке
    "USER_CONSENT" => "N",	// Запрашивать согласие
    "USER_CONSENT_ID" => "0",	// Соглашение
    "USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
    "USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
    "USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
    "DETAIL_STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для детального показа элемента
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "USE_SALE_BESTSELLERS" => "Y",	// Показывать список лидеров продаж
    "FILTER_HIDE_ON_MOBILE" => "N",	// Скрывать умный фильтр на мобильных устройствах
    "INSTANT_RELOAD" => "N",	// Мгновенная фильтрация при включенном AJAX
    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
    "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",	// Одинаковые настройки показа кнопок добавления в корзину или покупки на всех страницах
    "COMMON_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
    "TOP_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице с top'ом товаров
    "SECTION_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице списка товаров
    "DETAIL_ADD_TO_BASKET_ACTION" => array(	// Показывать кнопки добавления в корзину и покупки на детальной странице товара
        0 => "BUY",
    ),
    "SEARCH_PAGE_RESULT_COUNT" => "50",	// Количество результатов на странице
    "SEARCH_RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
    "SEARCH_NO_WORD_LOGIC" => "Y",	// Отключить обработку слов как логических операторов
    "SEARCH_USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
    "SEARCH_CHECK_DATES" => "Y",	// Искать только в активных по дате документах
    "SECTIONS_HIDE_SECTION_NAME" => "N",	// Не показывать названия подразделов
    "LIST_PROPERTY_CODE_MOBILE" => "",	// Свойства товаров, отображаемые на мобильных устройствах
    "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",	// Порядок отображения блоков товара
    "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
    "LIST_ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
    "LIST_SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
    "LIST_SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
    "LIST_SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
    "DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
    "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
    "SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
    "DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",	// Свойства, отображаемые в блоке справа от картинки
    "DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",	// Свойства предложений, отображаемые в блоке справа от картинки
    "DETAIL_BLOG_URL" => "catalog_comments",	// Название блога латинскими буквами
    "DETAIL_BLOG_EMAIL_NOTIFY" => "N",	// Уведомление по электронной почте
    "DETAIL_FB_APP_ID" => "",	// Идентификатор приложения (APP_ID)
    "DETAIL_IMAGE_RESOLUTION" => "16by9",	// Соотношение сторон изображения товара
    "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",	// Порядок отображения блоков информации о товаре
    "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",	// Порядок отображения блоков покупки товара
    "DETAIL_SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
    "DETAIL_DETAIL_PICTURE_MODE" => array(	// Режим показа детальной картинки
        0 => "POPUP",
        1 => "MAGNIFIER",
    ),
    "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
    "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
    "MESS_PRICE_RANGES_TITLE" => "Цены",	// Название блока c расширенными ценами
    "MESS_DESCRIPTION_TAB" => "Описание",	// Текст вкладки "Описание"
    "MESS_PROPERTIES_TAB" => "Характеристики",	// Текст вкладки "Характеристики"
    "MESS_COMMENTS_TAB" => "Комментарии",	// Текст вкладки "Комментарии"
    "DETAIL_SHOW_POPULAR" => "Y",	// Показывать блок "Популярное в разделе"
    "DETAIL_SHOW_VIEWED" => "Y",	// Показывать блок "Просматривали"
    "USE_GIFTS_DETAIL" => "Y",	// Показывать блок "Подарки" в детальном просмотре
    "USE_GIFTS_SECTION" => "Y",	// Показывать блок "Подарки" в списке
    "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",	// Показывать блок "Товары к подарку" в детальном просмотре
    "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Подарки" в строке в детальном просмотре
    "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в детальном просмотре
    "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",	// Текст заголовка "Подарки" в детальном просмотре
    "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в детальном просмотре
    "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Подарки" строке в списке
    "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Подарки" в списке
    "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",	// Текст заголовка "Подарки" в списке
    "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",	// Текст метки "Подарка" в списке
    "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",	// Показывать процент скидки
    "GIFTS_SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
    "GIFTS_SHOW_NAME" => "Y",	// Показывать название
    "GIFTS_SHOW_IMAGE" => "Y",	// Показывать изображение
    "GIFTS_MESS_BTN_BUY" => "Выбрать",	// Текст кнопки "Выбрать"
    "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",	// Количество элементов в блоке "Товары к подарку" в строке в детальном просмотре
    "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",	// Скрыть заголовок "Товары к подарку" в детальном просмотре
    "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",	// Текст заголовка "Товары к подарку"
    "STORES" => array(	// Склады
        0 => "",
        1 => "",
    ),
    "USER_FIELDS" => array(	// Пользовательские поля
        0 => "",
        1 => "",
    ),
    "SHOW_EMPTY_STORE" => "Y",	// Отображать склад при отсутствии на нем товара
    "SHOW_GENERAL_STORE_INFORMATION" => "N",	// Показывать общую информацию по складам
    "USE_BIG_DATA" => "Y",	// Показывать персональные рекомендации
    "USE_ENHANCED_ECOMMERCE" => "N",	// Включить отправку данных в электронную торговлю
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "LAZY_LOAD" => "N",	// Показать кнопку ленивой загрузки Lazy Load
    "LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
    "SHOW_404" => "N",	// Показ специальной страницы
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
    "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",	// Включить сохранение информации о просмотре товара на детальной странице для старых шаблонов
    "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
    "COMPARE_FIELD_CODE" => array(
        0 => "",
        1 => "",
    ),
    "COMPARE_PROPERTY_CODE" => array(
        0 => "",
        1 => "MATERIAL",
        2 => "COLOR",
        3 => "tags",
        4 => "",
    ),
    "COMPARE_OFFERS_FIELD_CODE" => array(
        0 => "",
        1 => "",
    ),
    "COMPARE_OFFERS_PROPERTY_CODE" => array(
        0 => "type_uf1",
        1 => "type_uf2",
        2 => "type_uf3",
        3 => "type_uf4",
        4 => "type_uf5",
        5 => "type_uf6",
        6 => "type_uf7",
        7 => "type_uf8",
        8 => "type_uf9",
        9 => "type_uf10",
    ),
    "COMPARE_ELEMENT_SORT_FIELD" => "sort",
    "COMPARE_ELEMENT_SORT_ORDER" => "asc",
    "DISPLAY_ELEMENT_SELECT_BOX" => "N",
    "COMPARE_POSITION_FIXED" => "Y",
    "COMPARE_POSITION" => "top left",
    "SEF_URL_TEMPLATES" => array(
        "sections" => "",
        "section" => "#SECTION_CODE#/",
        "element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
        "compare" => "compare/",
        "smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
    )
),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>