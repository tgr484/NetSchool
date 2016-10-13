<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    $to = ''; //e-mail here 
    $subject = 'Zayavka na kursy';

    $fam = htmlspecialchars($_POST['fam']);
    $nam = htmlspecialchars($_POST['name']);
    $ot = htmlspecialchars($_POST['ot']);
    $org = htmlspecialchars($_POST['org']);
    $dis = htmlspecialchars($_POST['dis']);
    $ikt = htmlspecialchars($_POST['ikt']);
    $tel = htmlspecialchars($_POST['tel']);
    $emai = htmlspecialchars($_POST['emai']);
    $dolz = htmlspecialchars($_POST['dol']);
    $potok = htmlspecialchars($_POST['potok']);
    $repub = htmlspecialchars($_POST['region']);
    $gorod = htmlspecialchars($_POST['gorod']);
    $fname = $fam . ' ' . $nam . ' ' . $ot;

    $rub = '1800';
    $kop = '00';
    $dbconnect = mysql_connect(localhost, c3admin, ZyZEzPSTENKqWqSB);
    //echo $dbconnect;
    $db_selected = mysql_select_db('c3storage', $dbconnect);
    mysql_query("SET NAMES utf8");
    $query = "insert into zayavki_bgpu (fam, nam, ot, org, dis, ikt, tel, emai, dol, potok, city, region, time) values ('" . $fam . "','" . $nam . "','" . $ot . "','" . $org . "','" . $dis . "','" . $ikt . "','" . $tel . "','" . $emai . "','" . $dolz . "'," . $potok . ",'" . $gorod . "','" . $repub . "','" . time() . "')";
//echo $query;
    $result = mysql_query($query);
//echo $result;
    switch ($potok) {
        case '1':
            $srok = 'c 14.03.16 по 10.05.16';

            break;
        case '2':
            $srok = 'с 04.04.16 по 20.06.16';

            break;
    }

    $message .= "
   ФИО:  " . $fam . "
   Организация:  " . $org . "
   Город: " . $gorod . "
   Должность:  " . $dolz . "
   Преподаваемая дисциплина:  " . $dis . "
   Владение ИКТ: " . $ikt . "
   Тел. " . $tel . "
   e-mail: " . $emai . "
   
   Сроки обучения " . $srok . "
";

    $kvitok = 'Уважаемый <b>' . $nam . ' ' . $ot . '</b>, направляем Вам квитанцию на оплату образовательных услуг по программе повышения квалификации Организация и поддержка образовательного процесса в школе на основе использования системы программ «1С:Образование 5. Школа». Курсы проводит Центр электронного образования ГАУ ДПО ИРО РБ.
<p>Срок проведения курсов <b>' . $srok . '</b>';
    $kvitok .= '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="http://school.bashkortostan.ru/teacher/z/toprint.php?fam=' . urlencode($fam) . '&name=' . urlencode($nam) . '&ot=' . urlencode($ot) . '" style="display:inline-block;white-space:nowrap;font-weight:normal;font-size:18px;line-height:40px;padding:0;min-height:30px;width:160px;text-align:center;color:#fff;border:3px solid;border-radius:10px;text-decoration:none;background-color:#98c593" target="_blank">Квитанция</a>
</body>
</html>

';
    $kvitok .= '<p><b>После оплаты на указанную вами электронную почту придут инструкции по дальнейшей работе, а также данные для авторизации в системе дистанционного обучения.'
            . '<p>Не отвечайте на это письмо!</b>'
            . '<p>Если у Вас остались вопросы, свяжитесь с нами по указанным ниже контактным данным.

<p>С уважением, Центр электронного образования ГАУ ДПО ИРО РБ
<p>cdo.irorb@yandex.ru
<p>г. Уфа, ул. Мингажева, 120, каб.223
<p>тел. 
<p>
<p>
<p>Это письмо направлено Вам, так как вы заполнили форму регистрации на сайте school.bashkortostan.ru';

    if ($repub == 'Башкирия' or $repub == 'Башкортостан' or $repub == 'Республика Башкортостан' or $repub == 'РБ' or $repub == 'башкирия' or $repub == 'башкортостан' or $repub == 'республика Башкортостан' or $repub == 'Рб' or $repub == 'республика башкортостан' or $repub == 'рб' or $repub == 'Республика башкортостан') {
        mail($to, $subject, $message);
        $headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $tema = "Квитанция";
        mail($emai, $tema, $kvitok, $headers);
        ?>
        <head>
            <meta http-equiv=Content-Type content="text/html; charset=windows-1251">
                <meta name=Generator content="Microsoft Word 15 (filtered)">
                    <style type="text/css">

                        @media print {
                            input {display: none; }
                            .noprint {display: none; }
                        }
                    </style>
                    <style>

                        <!--
                        /* Font Definitions */
                        @font-face
                        {font-family:Wingdings;
                         panose-1:5 0 0 0 0 0 0 0 0 0;}
                        @font-face
                        {font-family:"Cambria Math";
                         panose-1:2 4 5 3 5 4 6 3 2 4;}
                        @font-face
                        {font-family:Calibri;
                         panose-1:2 15 5 2 2 2 4 3 2 4;}
                        @font-face
                        {font-family:Tahoma;
                         panose-1:2 11 6 4 3 5 4 4 2 4;}
                        /* Style Definitions */
                        p.MsoNormal, li.MsoNormal, div.MsoNormal
                        {margin:0cm;
                         margin-bottom:.0001pt;
                         text-autospace:none;
                         font-size:12.0pt;
                         font-family:"Times New Roman",serif;}
                        p.MsoHeader, li.MsoHeader, div.MsoHeader
                        {mso-style-link:"Верхний колонтитул Знак";
                         margin:0cm;
                         margin-bottom:.0001pt;
                         text-autospace:none;
                         font-size:12.0pt;
                         font-family:"Times New Roman",serif;}
                        p.MsoFooter, li.MsoFooter, div.MsoFooter
                        {mso-style-link:"Нижний колонтитул Знак";
                         margin:0cm;
                         margin-bottom:.0001pt;
                         text-autospace:none;
                         font-size:12.0pt;
                         font-family:"Times New Roman",serif;}
                        a:link, span.MsoHyperlink
                        {color:blue;
                         text-decoration:underline;}
                        a:visited, span.MsoHyperlinkFollowed
                        {color:#954F72;
                         text-decoration:underline;}
                        p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
                        {mso-style-link:"Текст выноски Знак";
                         margin:0cm;
                         margin-bottom:.0001pt;
                         text-autospace:none;
                         font-size:8.0pt;
                         font-family:"Tahoma",sans-serif;}
                        p.1, li.1, div.1
                        {mso-style-name:"заголовок 1";
                         margin-top:12.0pt;
                         margin-right:0cm;
                         margin-bottom:3.0pt;
                         margin-left:0cm;
                         text-autospace:none;
                         font-size:16.0pt;
                         font-family:"Arial",sans-serif;
                         font-weight:bold;}
                        span.a
                        {mso-style-name:"Основной шрифт";}
                        span.a0
                        {mso-style-name:"Верхний колонтитул Знак";
                         mso-style-link:"Верхний колонтитул";
                         font-family:"Times New Roman",serif;}
                        span.a1
                        {mso-style-name:"Нижний колонтитул Знак";
                         mso-style-link:"Нижний колонтитул";
                         font-family:"Times New Roman",serif;}
                        span.a2
                        {mso-style-name:"Текст выноски Знак";
                         mso-style-link:"Текст выноски";
                         font-family:"Tahoma",sans-serif;}
                        /* Page Definitions */
                        @page WordSection1
                        {size:595.3pt 841.9pt;
                         margin:2.0cm 1.0cm 2.0cm 1.0cm;}
                        div.WordSection1
                        {page:WordSection1;}
                        -->
                    </style>


                    <title>Квитанция</title>
                    </head>

                    <body>
                        <body lang=RU link=blue vlink="#954F72" style='text-justify-trim:punctuation'>

                            <div class=WordSection1>

                                <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
                                       style='margin-left:4.65pt;border-collapse:collapse;border:none'>
                                    <tr style='page-break-inside:avoid;height:21.75pt'>
                                        <td width=195 rowspan=14 valign=top style='width:146.25pt;border:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt'>
                                            <p class=1 align=center style='text-align:center'><span style='font-size:
                                                                                                    8.0pt'><b>Извещение</b></span></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>Кассир</span></b></p>
                                        </td>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:solid windowtext 2.25pt;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:21.75pt'>
                                            <p class=MsoNormal align=right style='text-align:right'><b><i><span
                                                            style='font-size:8.0pt'>Форма № ПД-4</span></i></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>Минфин РБ (ГАУ ДПО ИРО РБ л/с 30113070380)</span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.75pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><span
                                                    style='font-size:7.0pt'>(наименование получателя платежа)</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:5.25pt'>
                                        <td width=181 colspan=2 valign=top style='width:135.7pt;border:none;
                                            border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><span
                                                    style='font-size:8.0pt'>0274057665</span></p>
                                        </td>
                                        <td width=17 valign=top style='width:12.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=16 valign=top style='width:11.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=277 colspan=5 valign=top style='width:207.6pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>         40601810400003000001</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>            (<b>ИНН</b>
                                                    получателя платежа)                                      (<b>номер счета
                                                        получателя платежа</b>)</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=278 colspan=6 valign=top style='width:208.3pt;border:none;
                                            border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>Отделение – НБ Республика
                                                    Башкортостан г. Уфа</span></p>
                                        </td>
                                        <td width=22 valign=top style='width:16.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=39 valign=top style='width:29.6pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:4.5pt'>
                                            <p class=MsoNormal><b><span style='font-size:8.0pt'>БИК</span></b></p>
                                        </td>
                                        <td width=152 valign=top style='width:113.7pt;border-top:none;border-left:
                                            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>048073001</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:8.25pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>               (<b>наименование
                                                        банка получателя платежа</b>)</span><span style='font-size:8.0pt'>                        
                                                          <b>КПП</b>     027401001 <b>ОКТМО</b> 80701000</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=222 colspan=5 valign=top style='width:166.3pt;border:none;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=269 colspan=4 valign=top style='width:201.75pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><b><span style='font-size:10.0pt'>КПК ЦЭО</span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>                       (<b>наименование
                                                        платежа</b>)                                                               </span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:3.75pt'>
                                        <td width=133 valign=top style='width:99.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:3.75pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>Ф.И.О. плательщика:</span></p>
                                        </td>
                                        <td width=358 colspan=8 valign=top style='width:268.25pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'><?php echo $fam . " " . $nam . " " . $ot ?></span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:9.0pt'>
                                        <td width=133 valign=top style='width:99.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:9.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>Адрес плательщика:</span></p>
                                        </td>
                                        <td width=358 colspan=8 valign=top style='width:268.25pt;border-top:solid windowtext 1.0pt;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.75pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
                                            <p class=MsoNormal><span lang=EN-US style='font-size:9.0pt'>   </span><span
                                                    style='font-size:9.0pt'>Сумма платежа: <ins><?php echo $rub; ?></ins>  руб.  <ins><?php echo $kop; ?></ins> коп. Сумма платы за услуги:
                                                    <ins><?php echo $rub; ?></ins> руб. <ins><?php echo $kop; ?></ins> коп.</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'> Итого </span><span
                                                    lang=EN-US style='font-size:9.0pt'></span><span style='font-size:9.0pt'>         
                                                </span><span lang=EN-US style='font-size:9.0pt'></span><span
                                                    style='font-size:9.0pt'><ins><?php echo $rub; ?></ins>  руб</span><span style='font-size:8.0pt'>.</span><span
                                                    lang=EN-US style='font-size:8.0pt'></span><span style='font-size:9.0pt'><ins><?php echo $kop; ?></ins>  коп</span><span
                                                    style='font-size:8.0pt'>.                 “________”________________________
    <?php echo date('o'); ?> г.</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:21.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>С условиями приема указанной
                                                    в платежном документе суммы, в т.ч. с суммой взимаемой платы за услуги банка </span></p>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>ознакомлен и
                                                    согласен.                                        <b>Подпись плательщика</b></span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:8.25pt'>
                                        <td width=195 rowspan=15 valign=top style='width:146.25pt;border:solid windowtext 2.25pt;
                                            border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>Квитанция</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp; </span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>&nbsp;</span></b></p>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>Кассир</span></b></p>
                                            <p class=MsoNormal><b><span style='font-size:6.0pt'>&nbsp;</span></b></p>
                                        </td>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>  </span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:7.5pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:7.5pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><b><span
                                                        style='font-size:8.0pt'>Минфин РБ (ГАУ ДПО ИРО РБ л/с 30113070380)</span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.75pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><span
                                                    style='font-size:8.0pt'>(наименование получателя платежа)</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:5.25pt'>
                                        <td width=181 colspan=2 valign=top style='width:135.7pt;border:none;
                                            border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
                                            <p class=MsoNormal align=center style='text-align:center'><span
                                                    style='font-size:8.0pt'>0274057665</span></p>
                                        </td>
                                        <td width=17 valign=top style='width:12.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=16 valign=top style='width:11.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=277 colspan=5 valign=top style='width:207.6pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:5.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>         40601810400003000001</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>            (<b>ИНН</b>
                                                    получателя платежа)                        (<b>номер счета получателя платежа</b>)</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=278 colspan=6 valign=top style='width:208.3pt;border:none;
                                            border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>Отделение – НБ Республика
                                                    Башкортостан г. Уфа</span></p>
                                        </td>
                                        <td width=22 valign=top style='width:16.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=39 valign=top style='width:29.6pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:4.5pt'>
                                            <p class=MsoNormal><b><span style='font-size:8.0pt'>БИК</span></b></p>
                                        </td>
                                        <td width=152 valign=top style='width:113.7pt;border-top:none;border-left:
                                            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>048073001</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:8.25pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:8.25pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>         (<b>наименование
                                                        банка получателя платежа</b>)                         <b>КПП</b>    027401001<b>
                                                        ОКТМО</b> 80701000 </span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=222 colspan=5 valign=top style='width:166.3pt;border:none;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:8.0pt'>&nbsp;</span></p>
                                        </td>
                                        <td width=269 colspan=4 valign=top style='width:201.75pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:4.5pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:4.5pt'>
                                            <p class=MsoNormal><b><span style='font-size:10.0pt'></span></b><span
                                                    style='font-size:8.0pt'> </span><b><span style='font-size:10.0pt'>КПК ЦЭО</span></b></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>                       (<b>наименование
                                                        платежа</b>)                                                               </span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:3.75pt'>
                                        <td width=133 valign=top style='width:99.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:3.75pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>Ф.И.О. плательщика:</span></p>
                                        </td>
                                        <td width=358 colspan=8 valign=top style='width:268.25pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:3.75pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'> <?php echo $fam . " " . $nam . " " . $ot ?></span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:9.0pt'>
                                        <td width=133 valign=top style='width:99.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
                                            height:9.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>Адрес плательщика:</span></p>
                                        </td>
                                        <td width=358 colspan=8 valign=top style='width:268.25pt;border-top:solid windowtext 1.0pt;
                                            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:9.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.75pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.75pt'>
                                            <p class=MsoNormal><span lang=EN-US style='font-size:9.0pt'>   </span><span
                                                    style='font-size:9.0pt'>Сумма платежа: <ins><?php echo $rub; ?></ins>  руб.  <ins><?php echo $kop; ?></ins> коп. Сумма платы за услуги:
                                                    <ins><?php echo $rub; ?></ins> руб. <ins><?php echo $kop; ?></ins> коп.</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:6.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border:none;
                                            border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:6.0pt'>
                                            <p class=MsoNormal><span style='font-size:9.0pt'> Итого </span><span
                                                    lang=EN-US style='font-size:9.0pt'></span><span style='font-size:9.0pt'>         
                                                </span><span lang=EN-US style='font-size:9.0pt'></span><span
                                                    style='font-size:9.0pt'><ins><?php echo $rub; ?></ins>  руб</span><span style='font-size:8.0pt'>.</span><span
                                                    lang=EN-US style='font-size:8.0pt'></span><span style='font-size:9.0pt'><ins><?php echo $kop; ?></ins>  коп</span><span
                                                    style='font-size:8.0pt'>.                 “________”________________________
    <?php echo date('o'); ?> г.</span></p>
                                        </td>
                                    </tr>
                                    <tr style='page-break-inside:avoid;height:21.0pt'>
                                        <td width=491 colspan=9 valign=top style='width:368.05pt;border-top:none;
                                            border-left:none;border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
                                            padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt'>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>&nbsp;</span></p>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>С условиями приема указанной
                                                    в платежном документе суммы, в т.ч. с суммой взимаемой платы за услуги банка </span></p>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>ознакомлен и
                                                    согласен.              </span></p>
                                            <p class=MsoNormal><span style='font-size:7.0pt'>                                                                               
                                                    <b>Подпись плательщика</b></span></p>
                                            <p class=MsoNormal><span lang=EN-US style='font-size:7.0pt'>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr height=0>
                                        <td width=195 style='border:none'></td>
                                        <td width=133 style='border:none'></td>
                                        <td width=48 style='border:none'></td>
                                        <td width=17 style='border:none'></td>
                                        <td width=16 style='border:none'></td>
                                        <td width=8 style='border:none'></td>
                                        <td width=56 style='border:none'></td>
                                        <td width=22 style='border:none'></td>
                                        <td width=39 style='border:none'></td>
                                        <td width=152 style='border:none'></td>
                                    </tr>
                                </table>



                            </div>
                            <br>
                                <p class="noprint"><i>Пример заполнения адреса: 450001 г. Уфа ул. Пушкина д. 1, корп. 1, кв. 1</i></p>
                                <br><input value="   Печать   " onClick="print(document);" type="button"><br>
                                            </body>
                                            </html>
    <?php
} else {
    echo "Регион указан не верно!";
};
?>