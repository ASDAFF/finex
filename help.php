<? global $CUSTOM_CLASS;
    $CUSTOM_CLASS = ' helpers ';
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle("Интернет-магазин");
    global $USER;
    if (!$USER->IsAdmin()) die( "Вы не администратор!");
    global $DB;
    $filename = $_SERVER["DOCUMENT_ROOT"] . '/1.csv';

$uf_1s = [];//Тип изделия
$uf_2s = [];//Конструкция
$uf_3s = [];//Дизайн
$uf_4s = [];//Рисунок
$uf_5s = [];//Селекция
$uf_6s = [];//Ширина
$uf_7s = [];//Толщина
$uf_8s = [];//Тип поверхности
$uf_9s = [];//Ед.изм (м2/упак)
$uf_10s = [];//Коэффициент

    $strSql = "
            SELECT
                *            
            FROM type1
            WHERE 
                1 order by UF_NAME
            ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_1s[$row["ID"]] = $row["UF_NAME"];
        $uf_s1[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM construction2 WHERE  1  order by UF_NAME      ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_2s[$row["ID"]] = $row["UF_NAME"];
        $uf_s2[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM design3 WHERE  1   order by UF_NAME     ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_3s[$row["ID"]] = $row["UF_NAME"];
        $uf_s3[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM risunok4 WHERE  1   order by UF_NAME     ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_4s[$row["ID"]] = $row["UF_NAME"];
        $uf_s4[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM selection5 WHERE  1   order by UF_NAME     ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_5s[$row["ID"]] = $row["UF_NAME"];
        $uf_s5[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM shirina6 WHERE  1   order by UF_NAME     ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_6s[$row["ID"]] = $row["UF_NAME"];
        $uf_s6[$row["UF_NAME"]] = $row["ID"];
    }

    $strSql = "        SELECT *   FROM tolshina7 WHERE  1    order by UF_NAME    ";
    $res = $DB->Query($strSql, false, $err_mess . __LINE__);

    while ($row = $res->Fetch()) {
        $uf_7s[$row["ID"]] = $row["UF_NAME"];
        $uf_s7[$row["UF_NAME"]] = $row["ID"];
    }
$strSql = "        SELECT *   FROM type8 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_8s[$row["ID"]] = $row["UF_NAME"];
    $uf_s8[$row["UF_NAME"]] = $row["ID"];
}
$strSql = "        SELECT *   FROM edinic9 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_9s[$row["ID"]] = $row["UF_NAME"];
    $uf_s9[$row["UF_NAME"]] = $row["ID"];
}
$strSql = "        SELECT *   FROM koef10 WHERE  1    order by UF_NAME    ";
$res = $DB->Query($strSql, false, $err_mess . __LINE__);

while ($row = $res->Fetch()) {
    $uf_10s[$row["ID"]] = $row["UF_NAME"];
    $uf_s10[$row["UF_NAME"]] = $row["ID"];
}

    ?>
        <form action="/help.php" method="get">
            <input type="hidden" name="action" value="select">

            <h1>Для создания товара выберите Тип изделия, Дизайн и Конструкцию
                <br>Затем кнопку отправить
                <br>
                Затем кнопку создать товар с предложениями в самом низу</h1>
            <h1>Тип изделия</h1>
            <select name='uf1'>
                <option value="0">Любой</option>
                <? foreach ($uf_1s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf1'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Дизайн</h1>
            <select name='uf3'>
                <option value="0">Любой</option>
                <? foreach ($uf_3s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf3'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Конструкция</h1>
            <select name='uf2'>
                <option value="0">Любой</option>
                <? foreach ($uf_2s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf2'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1><input type="submit" value="отправить"></h1>
            <br>
            <br>
            <h1>Рисунок</h1>
            <select name='uf4'>
                <option value="0">Любой</option>
                <? foreach ($uf_4s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf4'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Селекция</h1>
            <select name='uf5'>
                <option value="0">Любой</option>
                <? foreach ($uf_5s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf5'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Ширина</h1>
            <select name='uf6'>

                <option value="0">Любой</option>
                <? foreach ($uf_6s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf6'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Толщина</h1>
            <select name='uf7'>
                <option value="0">Любой</option>
                <? foreach ($uf_7s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf7'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Тип поверхности</h1>
            <select name='uf8'>
                <option value="0">Любой</option>
                <? foreach ($uf_8s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf8'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Ед.изм (м2/упак)</h1>
            <select name='uf9'>
                <option value="0">Любой</option>
                <? foreach ($uf_9s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf9'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1>Коэффициент</h1>
            <select name='uf10'>
                <option value="0">Любой</option>
                <? foreach ($uf_10s as $id => $name) { ?>
                    <option <? if ($_REQUEST['uf10'] == $id) echo 'selected'; ?> value="<?= $id ?>"><?= $name ?></option>
                <? } ?>
            </select>
            <br>
            <br>
            <h1><input type="submit" value="отправить"></h1>
        </form>

    <? if (!empty($_REQUEST)) {
        $strSql = "        SELECT *   FROM price WHERE  1 ";
        $where = '';
        if (!empty($_REQUEST['uf1'])) $where .= ' and UF_1=' . (int)$_REQUEST['uf1'];
        if (!empty($_REQUEST['uf2'])) $where .= ' and UF_2=' . (int)$_REQUEST['uf2'];
        if (!empty($_REQUEST['uf3'])) $where .= ' and UF_3=' . (int)$_REQUEST['uf3'];
        if (!empty($_REQUEST['uf4'])) $where .= ' and UF_4=' . (int)$_REQUEST['uf4'];
        if (!empty($_REQUEST['uf5'])) $where .= ' and UF_5=' . (int)$_REQUEST['uf5'];
        if (!empty($_REQUEST['uf6'])) $where .= ' and UF_6=' . (int)$_REQUEST['uf6'];
        if (!empty($_REQUEST['uf7'])) $where .= ' and UF_7=' . (int)$_REQUEST['uf7'];
        if (!empty($_REQUEST['uf8'])) $where .= ' and UF_8=' . (int)$_REQUEST['uf8'];
        if (!empty($_REQUEST['uf9'])) $where .= ' and UF_9=' . (int)$_REQUEST['uf9'];
        if (!empty($_REQUEST['uf10'])) $where .= ' and UF_10=' . (int)$_REQUEST['uf10'];
        if (!empty($where)) {
            $res = $DB->Query($strSql . $where, false, $err_mess . __LINE__);
            // var_dump($strSql.$where);
            $uf1 = [];
            $uf2 = [];
            $uf3 = [];
            $uf4 = [];
            $uf5 = [];
            $uf6 = [];
            $uf7 = [];
            $uf8 = [];
            $uf9 = [];
            $uf10 = [];
            ?><h1>Варианты цен</h1>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Тип изделия</td>
                    <td>Конструкция</td>
                    <td>Дизайн</td>
                    <td>Рисунок</td>
                    <td>Селекция</td>
                    <td>Ширина</td>
                    <td>Толщина</td>
                    <td>Тип поверхности</td>
                    <td>Ед.изм (м2/упак)</td>
                    <td>Коэффициент</td>
                    <td>Цена</td>
                </tr>
                <?
                $items = [];
                while ($row = $res->Fetch()) {
                    $items[] = $row;
                    $uf1[$row['UF_1']] = $uf_1s[$row['UF_1']];
                    $uf2[$row['UF_2']] = $uf_2s[$row['UF_2']];
                    $uf3[$row['UF_3']] = $uf_3s[$row['UF_3']];
                    $uf4[$row['UF_4']] = $uf_4s[$row['UF_4']];
                    $uf5[$row['UF_5']] = $uf_5s[$row['UF_5']];
                    $uf6[$row['UF_6']] = $uf_6s[$row['UF_6']];
                    $uf7[$row['UF_7']] = $uf_7s[$row['UF_7']];
                    $uf8[$row['UF_8']] = $uf_8s[$row['UF_8']];
                    $uf9[$row['UF_9']] = $uf_9s[$row['UF_9']];
                    $uf10[$row['UF_10']] = $uf_10s[$row['UF_10']];
                    ?>
                    <tr>
                        <td><?= $row['ID'] ?></td>
                        <td><?= $uf_1s[$row['UF_1']] ?></td>
                        <td><?= $uf_2s[$row['UF_2']] ?></td>
                        <td><?= $uf_3s[$row['UF_3']] ?></td>
                        <td><?= $uf_4s[$row['UF_4']] ?></td>
                        <td><?= $uf_5s[$row['UF_5']] ?></td>
                        <td><?= $uf_6s[$row['UF_6']] ?></td>
                        <td><?= $uf_7s[$row['UF_7']] ?></td>
                        <td><?= $uf_8s[$row['UF_8']] ?></td>
                        <td><?= $uf_9s[$row['UF_9']] ?></td>
                        <td><?= $uf_10s[$row['UF_10']] ?></td>
                        <td><?= $row['UF_PRICE'] ?></td>
                    </tr>
                    <?
                }
                ?>
            </table>
            <?

        }
        ?>
        <h1>Тип изделия</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Тип изделия</td>
            </tr>
            <?
            foreach ($uf1 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Дизайн</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Дизайн</td>
            </tr>
            <?
            foreach ($uf3 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Конструкция</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Конструкция</td>
            </tr>
            <?
            foreach ($uf2 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>

        <h1>Рисунок</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Рисунок</td>
            </tr>
            <?
            foreach ($uf4 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Селекция</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Селекция</td>
            </tr>
            <?
            foreach ($uf5 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Ширина</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Ширина</td>
            </tr>
            <?
            foreach ($uf6 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>


        <h1>Толщина</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Толщина</td>
            </tr>
            <?
            foreach ($uf7 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Тип поверхности</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Тип поверхности</td>
            </tr>
            <?
            foreach ($uf8 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Ед.изм (м2/упак)</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Ед.изм (м2/упак)</td>
            </tr>
            <?
            foreach ($uf9 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <h1>Коэффициент</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Коэффициент</td>
            </tr>
            <?
            foreach ($uf10 as $id => $name) {

                ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                </tr>
                <?
            }
            ?>
        </table>
        <?
        if ($_REQUEST['doaction'] == 'create') {

            if (empty($_REQUEST['uf1'])) die('Не выбран тип изделия');
            if (empty($_REQUEST['uf2'])) die('Не выбрана конструкция');
            if (empty($_REQUEST['uf3'])) die('Не выбран дизайн');

            $el = new CIBlockElement;
            $NAME = $uf_1s[(int)$_REQUEST['uf1']] . ' ' . $uf_2s[(int)$_REQUEST['uf2']] . ' ' . $uf_3s[(int)$_REQUEST['uf3']];
            $PROP = array(
                "type_uf1" => array_flip($uf1),
                "type_uf2" => array_flip($uf2),
                "type_uf3" => array_flip($uf3),
                "type_uf4" => array_flip($uf4),
                "type_uf5" => array_flip($uf5),
                "type_uf6" => array_flip($uf6),
                "type_uf7" => array_flip($uf7),
                "type_uf8" => array_flip($uf8),
                "type_uf9" => array_flip($uf9),
                "type_uf10" => array_flip($uf10),
            );
            $params = Array(
                "max_len" => "100", // обрезает символьный код до 100 символов
                "change_case" => "L", // буквы преобразуются к нижнему регистру
                "replace_space" => "-", // меняем пробелы на нижнее подчеркивание
                "replace_other" => "-", // меняем левые символы на нижнее подчеркивание
                "delete_repeat_replace" => "true", // удаляем повторяющиеся нижние подчеркивания
                "use_google" => "false", // отключаем использование google
            );
            $CODE = CUtil::translit(strtolower($NAME), "ru", $params);
            $arLoadProductArray = Array(
                "IBLOCK_ID" => 2,
                "IBLOCK_SECTION_ID" => 20,
                "PROPERTY_VALUES" => $PROP,
                "NAME" => $NAME,
                "ACTIVE" => "N",
                "CODE" => $CODE
            );
            if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {

                foreach ($uf1 as $id => $val) {
                    $type_uf = $val;
                }
                CIBlockElement::SetPropertyValuesEx($PRODUCT_ID, 2, array(
                    'type_uf1' => $type_uf,
                    'type_uf2' => $uf2,
                    'type_uf3' => $uf3,
                    'type_uf4' => $uf4,
                    'type_uf5' => $uf5,
                    'type_uf6' => $uf6,
                    'type_uf7' => $uf7,
                    'type_uf8' => $uf8,
                    'type_uf9' => $uf9,
                    'type_uf10' => $uf10,
                ));
                foreach ($items as $id => $row) {
                    $el = new CIBlockElement;
                    $PROP = array(
                        "CML2_LINK" => intval($PRODUCT_ID),
                        'type_uf1' => $uf1[$row['UF_1']],
                        'type_uf2' => $uf2[$row['UF_2']],
                        'type_uf3' => $uf3[$row['UF_3']],
                        'type_uf4' => $uf4[$row['UF_4']],
                        'type_uf5' => $uf5[$row['UF_5']],
                        'type_uf6' => $uf6[$row['UF_6']],
                        'type_uf7' => $uf7[$row['UF_7']],
                        'type_uf8' => $uf8[$row['UF_8']],
                        'type_uf9' => $uf9[$row['UF_9']],
                        'type_uf10' => $uf10[$row['UF_10']],
                    );
                    $arLoadProductArray = Array(
                        "IBLOCK_ID" => 3,
                        "PROPERTY_VALUES" => $PROP,
                        "NAME" => $NAME . ' ' . $row['ID'],
                        "ACTIVE" => "Y",
                    );
                    if ($OFFER_ID = $el->Add($arLoadProductArray)) {
                        CCatalogProduct::Add(array("ID" => $OFFER_ID));
                        CPrice::SetBasePrice($OFFER_ID, $row['UF_PRICE'], "RUB");
                        CCatalogProduct::Update($OFFER_ID, array("QUANTITY" => 1000));
                    }
                }

                ?>
                <script type="text/javascript">

    window.location.href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=2&type=catalog&ID=<?= $PRODUCT_ID ?>&lang=ru&find_section_section=20&WF=Y';


                </script>

                <?

            }
            echo '<pre>';
            echo "<h1 style='color:red;'>
    товар " . $NAME . "<br>
    Error: 
    " . $el->LAST_ERROR . "</h1>";
            /*
                if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
                    $el = new CIBlockElement;
                    $PROP = array(
                        "CML2_LINK" => intval($PRODUCT_ID),
                        "SIZE" => trim($arData[2]),
                        "COLOR" => trim($arData[3]),
                        "BARCODE" => trim($arData[9])
                    );
                    $arLoadProductArray = Array(
                        "IBLOCK_ID" => 3,
                        "PROPERTY_VALUES" => $PROP,
                        "NAME" => trim($arData[0]),
                        "ACTIVE" => "Y",
                    );
                    if ($OFFER_ID = $el->Add($arLoadProductArray)) {
                        CCatalogProduct::Add(array("ID" => $OFFER_ID));
                        CPrice::SetBasePrice($OFFER_ID, $ITEM_PRICE, "RUB");
                        CCatalogProduct::Update($OFFER_ID, array("QUANTITY" => 1));
                    }
                }
            */


        }
        ?>

        <form action="/help.php" method="get">
            <input type="hidden" name="doaction" value="create">
            <input type="hidden" name="uf1" value="<?= (int)$_REQUEST['uf1'] ?>">
            <input type="hidden" name="uf2" value="<?= (int)$_REQUEST['uf2'] ?>">
            <input type="hidden" name="uf3" value="<?= (int)$_REQUEST['uf3'] ?>">
            <input type="hidden" name="uf4" value="<?= (int)$_REQUEST['uf4'] ?>">
            <input type="hidden" name="uf5" value="<?= (int)$_REQUEST['uf5'] ?>">
            <input type="hidden" name="uf6" value="<?= (int)$_REQUEST['uf6'] ?>">
            <input type="hidden" name="uf7" value="<?= (int)$_REQUEST['uf7'] ?>">
            <input type="hidden" name="uf8" value="<?= (int)$_REQUEST['uf8'] ?>">
            <input type="hidden" name="uf9" value="<?= (int)$_REQUEST['uf9'] ?>">
            <input type="hidden" name="uf10" value="<?= (int)$_REQUEST['uf10'] ?>">

            <br>
            <input type="submit" value="Создать товар с предложениями">
        </form>

        <?

    }
    ?>

    <?
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>