<?
ini_set("max_execution_time", "900");
set_time_limit(900);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");
global $DB;
$filename = $_SERVER["DOCUMENT_ROOT"] . '/upload/1.csv';

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
            1
        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_1s[$row["ID"]]=$row["UF_NAME"];
    $uf_s1[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM construction2 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_2s[$row["ID"]]=$row["UF_NAME"];$uf_s2[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM design3 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_3s[$row["ID"]]=$row["UF_NAME"];$uf_s3[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM risunok4 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_4s[$row["ID"]]=$row["UF_NAME"];$uf_s4[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM selection5 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_5s[$row["ID"]]=$row["UF_NAME"];$uf_s5[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM shirina6 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_6s[$row["ID"]]=$row["UF_NAME"];$uf_s6[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM tolshina7 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_7s[$row["ID"]]=$row["UF_NAME"];$uf_s7[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM type8 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_8s[$row["ID"]]=$row["UF_NAME"];$uf_s8[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM edinic9 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_9s[$row["ID"]]=$row["UF_NAME"];$uf_s9[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        SELECT *   FROM koef10 WHERE  1        ";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

while ($row = $res->Fetch())
{
    $uf_10s[$row["ID"]]=$row["UF_NAME"];$uf_s10[$row["UF_NAME"]]=$row["ID"];
}

$strSql = "        truncate price";
$res = $DB->Query($strSql, false, $err_mess.__LINE__);

$row = 1;
if (($handle = fopen($filename, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 4000, ";")) !== FALSE) {
        $row++;
        if($row==2)continue;
        $data1=trim($data[0]);
        if(in_array($data1,$uf_1s)){
            $uf_1=$uf_s1[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_1 = $DB->Insert("type1", $arFields, $err_mess.__LINE__);
            $uf_1s[$uf_1]=$data1;
        }

        $data1=trim($data[1]);
        if(in_array($data1,$uf_2s)){
            $uf_2=$uf_s2[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_2 = $DB->Insert("construction2", $arFields, $err_mess.__LINE__);
            $uf_2s[$uf_2]=$data1;
        }

        $data1=trim($data[3]);
        if(in_array($data1,$uf_3s)){
            $uf_3=$uf_s3[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_3 = $DB->Insert("design3", $arFields, $err_mess.__LINE__);
            $uf_3s[$uf_3]=$data1;
        }

        $data1=trim($data[4]);
        if(in_array($data1,$uf_4s)){
            $uf_4=$uf_s4[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_4 = $DB->Insert("risunok4", $arFields, $err_mess.__LINE__);
            $uf_4s[$uf_4]=$data1;
        }

        $data1=trim($data[5]);
        if(in_array($data1,$uf_5s)){
            $uf_5=$uf_s5[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_5 = $DB->Insert("selection5", $arFields, $err_mess.__LINE__);
            $uf_5s[$uf_5]=$data1;
        }

        $data1=trim($data[6]);
        if(in_array($data1,$uf_6s)){
            $uf_6=$uf_s6[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_6 = $DB->Insert("shirina6", $arFields, $err_mess.__LINE__);
            $uf_6s[$uf_6]=$data1;
        }


        $data1=trim($data[2]);
        if(in_array($data1,$uf_7s)){
            $uf_7=$uf_s7[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_7 = $DB->Insert("tolshina7", $arFields, $err_mess.__LINE__);
            $uf_7s[$uf_7]=$data1;
        }
        $data1=trim($data[10]);
        if(in_array($data1,$uf_8s)){
            $uf_8=$uf_s8[$data1];  
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_8 = $DB->Insert("type8", $arFields, $err_mess.__LINE__);
            $uf_8s[$uf_8]=$data1;
        }
        $data1=trim($data[11]);
        if(in_array($data1,$uf_9s)){
            $uf_9=$uf_s9[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_9 = $DB->Insert("edinic9", $arFields, $err_mess.__LINE__);
            $uf_9s[$uf_9]=$data1;
        }
        $data1=trim($data[12]);
        if(in_array($data1,$uf_10s)){
            $uf_10=$uf_s10[$data1];
        }else{
            $arFields =['UF_XML_ID'=> "'".$data1. "'",'UF_NAME'=> "'".$data1. "'",];
            $uf_10 = $DB->Insert("koef10", $arFields, $err_mess.__LINE__);
            $uf_10s[$uf_10]=$data1;
        }

            $arFields =['UF_1'=> $uf_1,'UF_2'=> $uf_2,'UF_3'=> $uf_3,'UF_4'=> $uf_4,'UF_5'=> $uf_5,'UF_6'=> $uf_6,'UF_7'=> $uf_7,'UF_8'=> $uf_8,'UF_9'=> $uf_9,'UF_10'=> $uf_10,'UF_PRICE'=> ceil(str_replace( " ",'',$data[13])),];



         $uf_7 = $DB->Insert("price", $arFields, $err_mess.__LINE__);



    }
    fclose($handle);
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>