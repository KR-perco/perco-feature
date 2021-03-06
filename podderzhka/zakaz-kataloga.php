<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->AddChainItem("Заказ технического каталога продукции PERCo", "");
$APPLICATION->SetPageProperty("title", "Заказ технического каталога продукции PERCo");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("description", "Заказ технического каталога продукции PERCo");
$APPLICATION->SetTitle("Заказ технического каталога продукции PERCo");

$APPLICATION->SetAdditionalCSS("/css/catalogue.css"); // подключение стилей
?>
<h1>
<?$APPLICATION->ShowTitle(false, false)?>
</h1>
<p>Закажите бесплатный технический каталог продукции PERCo или скачайте в формате pdf:</p>

	<a style="text-decoration: none;    margin: 20px 10px;" href="/download/catalogues-booklets/rus/technical-catalog-perco.pdf" target="_blank" onclick="ga('send', 'event', {'eventCategory': 'Поддержка покупателя', 'eventAction': 'download', 'eventLabel': '/download/catalogues-booklets/rus/technical-catalog-perco.pdf'});" download="">
		<div style="display: flex; align-items: center; background: #E6E7E8; padding: 10px 10px 7px; max-width: 275px;"><div class="icon" style="float: left; width: 45px; height: 47px;">
			<img src="/images/icons/catalog.svg" alt="Технический каталог">
		</div>
		<span class="icon_text" style="font-size: 18px;">Скачать технический каталог</span></div>
	</a>

<?/*=GetDownloadFile("tekhnicheskiy-katalog-a4");*/?>
 <?$APPLICATION->IncludeComponent("bitrix:form", "", Array(
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"SEF_MODE" => "N",	// Включить поддержку ЧПУ
	"WEB_FORM_ID" => "43",	// ID веб-формы
	"RESULT_ID" => $_REQUEST["RESULT_ID"],	// ID результата
	"START_PAGE" => "new",	// Начальная страница
	"SHOW_LIST_PAGE" => "Y",	// Показывать страницу со списком результатов
	"SHOW_EDIT_PAGE" => "Y",	// Показывать страницу редактирования результата
	"SHOW_VIEW_PAGE" => "Y",	// Показывать страницу просмотра результата
	"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
	"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
	"SHOW_ADDITIONAL" => "N",	// Показать дополнительные поля веб-формы
	"SHOW_STATUS" => "Y",	// Показать текущий статус результата
	"EDIT_ADDITIONAL" => "N",	// Выводить на редактирование дополнительные поля
	"EDIT_STATUS" => "Y",	// Выводить форму смены статуса
	"NOT_SHOW_FILTER" => "",	// Коды полей, которые нельзя показывать в фильтре
	"NOT_SHOW_TABLE" => "",	// Коды полей, которые нельзя показывать в таблице
	"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
	"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
	"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
	"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"VARIABLE_ALIASES" => array(
		"action" => "action",
	)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>