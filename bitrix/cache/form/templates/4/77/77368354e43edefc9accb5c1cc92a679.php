<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001625718794';
$dateexpire = '001628310794';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:1:{s:13:"FORM_TEMPLATE";s:13787:"<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?=$FORM->ShowFormHeader();?> 
<p><?=$FORM->ShowFormErrors()?><?=$FORM->ShowFormNote()?></p>
 
<p><strong>Реквизиты покупателя для выставления счета на оплату</strong></p>
 
<table style="border-collapse: collapse;"> 
  <tbody> 
    <tr><td width="160" style="border-image: initial;">Полное наименование <?=$FORM->ShowRequired()?>&nbsp;</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'company\')?></td></tr>
   
    <tr><td style="border-image: initial;">ИНН / КПП <?=$FORM->ShowRequired()?>&nbsp;</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'INN\')?></td></tr>
   
    <tr><td style="border-image: initial;">Юридический адрес&nbsp;</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'address01\')?></td></tr>
   
    <tr><td style="border-image: initial;">Фактический адрес</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'address02\')?></td></tr>
   
    <tr><td style="border-image: initial;">Банковские реквизиты <?=$FORM->ShowRequired()?></td><td style="border-image: initial;"><?=$FORM->ShowInput(\'req\')?></td></tr>
   
    <tr><td style="border-image: initial;">Контактное лицо</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'person\')?></td></tr>
   
    <tr><td style="border-image: initial;">Тел. / Факс</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'phone\')?></td></tr>
   
    <tr><td style="border-image: initial;">E-mail <?=$FORM->ShowRequired()?></td><td style="border-image: initial;"><?=$FORM->ShowInput(\'email\')?></td></tr>
   
    <tr><td style="border-image: initial;">Выставить счет? <?=$FORM->ShowRequired()?></td><td style="border-image: initial;"><?=$FORM->ShowInput(\'schet\')?></td></tr>
   </tbody>
 </table>
 
<p><strong>Организация-конечный пользователь системы безопасности</strong></p>
 
<table style="border-collapse: collapse;"> 
  <tbody> 
    <tr><td width="160" style="border-image: initial;">Полное наименование</td><td style="border-image: initial;"> <?=$FORM->ShowInput(\'company_enduser\')?></td></tr>
   
    <tr><td style="border-image: initial;">ИНН / КПП</td><td style="border-image: initial;"> <?=$FORM->ShowInput(\'INN_enduser\')?></td></tr>
   
    <tr><td style="border-image: initial;">Почтовый адрес</td><td style="border-image: initial;"> <?=$FORM->ShowInput(\'address01_enduser\')?></td></tr>
   
    <tr><td style="border-image: initial;">Контактное лицо</td><td style="border-image: initial;"> <?=$FORM->ShowInput(\'person_enduser\')?></td></tr>
   
    <tr><td style="border-image: initial;">Тел. / Факс</td><td style="border-image: initial;"> <?=$FORM->ShowInput(\'phone_enduser\')?></td></tr>
   
    <tr><td style="border-image: initial;">E-mail</td><td style="border-image: initial;"><?=$FORM->ShowInput(\'email_enduser\')?></td></tr>
   
    <tr><td colspan="2" style="border-image: initial;">Адрес объекта, оборудованного комплексной системой безопасности PERCo-S-20 
        <br />
       (в случае отличия от адреса организации-конечного пользователя)</td></tr>
   
    <tr><td colspan="2" style="border-image: initial;"> <?=$FORM->ShowInput(\'address02_enduser\')?></td></tr>
   </tbody>
 </table>
 
<p><strong>MAC-адрес контроллера СКУД, используемого в качестве электронного ключа защиты</strong></p>
 
<p><?=$FORM->ShowInput(\'MAC\')?></p>
 
<p>(В качестве электронного ключа защиты может выступать любой контроллер системы безопасности. Выполнение функции аппаратного контроля лицензий на программное обеспечение не влияет на остальные функциональные возможности контроллера СКУД).</p>
 
<p><strong>Перечень программного обеспечения системы безопасности PERCo-S-20</strong></p>
 
<table style="border-collapse: collapse;"> 
  <tbody> 
    <tr><td style="vertical-align: top; width: 50%; border-image: initial;"> 
        <table class="data-table" style="border-collapse: collapse;"> 
          <tbody> 
            <tr><td style="border-image: initial;"><strong>Комплекты программного обеспечения</strong></td><td align="center" style="border-image: initial;"><strong>Количество 
                  <br />
                 комплектов</strong></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP9: Дисциплина + Учет рабочего времени</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp9\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP10: Контроль доступа + ОПС</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp10\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP11: Контроль доступа + ОПС + Верификация 
                <br />
               </td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp11\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP12: Контроль доступа + ОПС + Дисциплина</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp12\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP13: Контроль доступа + ОПС + Дисциплина + Учет рабочего времени</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp13\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP14: Усиленный контроль доступа с Верификацией + ОПС + Дисциплина</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp14\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP15: Усиленный контроль доступа с Верификацией + ОПС + Дисциплина + Учет рабочего времени</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp15\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP16: Усиленный контроль доступа с Верификацией + ОПС + Видео + Дисциплина + Учет рабочего времени</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp16\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SP17: Усиленный контроль доступа с Верификацией + ОПС + Видео + Дисциплина + Центральный пост охраны</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'sp17\')?></td></tr>
           </tbody>
         </table>
       </td> <td style="vertical-align: top; width: 50%; border-image: initial;"> 
        <table class="data-table" style="border-collapse: collapse;"> 
          <tbody> 
            <tr><td style="border-image: initial;"><strong>Модули программного обеспечения</strong></td><td align="center" style="border-image: initial;"><strong>Количество 
                  <br />
                 рабочих мест</strong></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SN01 «Базовое ПО»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft01\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM01 «Администратор»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft02\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM02 «Персонал»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft03\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM03 «Бюро пропусков»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft04\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM04 «Управление доступом»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft05\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM05 «Дисциплинарные отчеты»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft06\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM07 «Учет рабочего времени»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft07\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM08 «Мониторинг»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft08\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM09 «Верификация»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft09\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM10 «Прием посетителей»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft10\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM12 «Видеонаблюдение»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft12\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM13 «Центральный пост»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft13\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM14 «Дизайнер пропусков»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft14\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM15 «Прозрачное здание»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft15\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM16 «Кафе»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft16\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM17 «АТП»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft17\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM18 Интеграция с ИСО «Орион»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft18\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SM19 Интеграция с 1С:Предприятие</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft19\')?></td></tr>

            <tr><td style="border-image: initial;">PERCo-SM20 "Интеграция с видеоподсистемой Trassir"</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft21\')?></td></tr>
           
            <tr><td style="border-image: initial;">PERCo-SL02 «Локальное ПО с верификацией»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'soft20\')?></td></tr>
           </tbody>
         </table>
       </td></tr>
   </tbody>
 </table>
 
<p><strong>Перечень программного обеспечения cистемы безопасности для школ PERCo-S-20 «Школа»</strong></p>
 
<table class="data-table" style="border-collapse: collapse;"> 
  <tbody> 
    <tr><td style="border-image: initial;"><strong>Модули программного обеспечения</strong></td><td align="center" style="border-image: initial;"><strong>Количество</strong></td></tr>
   
    <tr> <td style="border-image: initial;">PERCo-SS01 «Базовое ПО «Школа»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'SS01\')?></td></tr>
   
    <tr><td style="border-image: initial;">PERCo-SS02 «Расширенное ПО «Школа»</td><td align="center" style="border-image: initial;"><?=$FORM->ShowInput(\'SS02\')?></td></tr>
   </tbody>
 </table>
 
<br />
 
<br />
 
<table style="border-collapse: collapse;"> 
  <tbody> 
    <tr><td style="border-image: initial;">введите кодовое слово: 
        <br />
       <?=$FORM->ShowCaptchaField()?> 
        <br />
       <?=$FORM->ShowCaptchaImage()?></td></tr>
   
    <tr><td colspan="2" style="border-image: initial;"><?=$FORM->ShowInput(\'politika\')?></td></tr>
   
    <tr><td style="border-image: initial;"><?=$FORM->ShowSubmitButton("отправить","")?></td><td style="border-image: initial;"><?=$FORM->ShowResetButton("очистить форму","")?></td></tr>
   </tbody>
 </table>
 <?=$FORM->ShowFormFooter();?>";}}';
return true;
?>