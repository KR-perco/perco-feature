<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->AddChainItem("KIT-набор", "");
$APPLICATION->SetPageProperty("title", "Комплект оборудования S-20 для самостоятельного изучения | PERCo");
$APPLICATION->SetPageProperty("description", "В комплект KIT входит: контроллер CT/L-04, считыватели серии IR, датчик прохода, индикатор, блок питания, розетка Ethernet");
$APPLICATION->SetPageProperty("keywords", "документация perco");
$APPLICATION->SetTitle("KIT-набор");

$APPLICATION->SetAdditionalCSS("/css/kit.css"); // подключение стилей
$APPLICATION->AddHeadScript("/scripts/pages/kit.js"); // подключение скриптов
?>
<div id="content">
	<h1>
	<?$APPLICATION->ShowTitle(false, false)?>
	</h1>
	<p>Для того, чтобы успешно пройти один из практических тестов, требуется наличие комплекта оборудования систем безопасности PERCo. Тест подразумевает подключение реального оборудования и выполнение действий по его настройке.</p>
	<p>Необходимый комплект для прохождения теста:</p>
	<ul>
		<li>Контроллер PERCo-CT/L-04.2</li>
		<li>Считыватели PERCo-MR07</li>
		<li>Датчик прохода</li>
	</ul>
	<p>В случае отсутствия необходимого оборудования его можно получить в виде компактного переносного стенда - комплекта KIT.</p>
	<p>Комплект KIT предоставляется по договору ответственного хранения на один месяц без оплаты. Пользователь оплачивает только стоимость доставки комплекта со склада производителя и обратно.</p>
	<p>Для получения комплекта KIT необходимо после регистрации на сайте, в разделе Кабинет клиента:</p>
	<ul>
		<li>Выбрать способ получения: самовывоз или доставка</li>
		<li>В случае варианта с доставкой указать почтовый адрес и предпочтительный способ получения: Почта России или транспортная компания.</li>
	</ul>
	<p>В комплект KIT входит:</p>
	<ul>
		<li>Контроллер PERCo-CT/L-04.2</li>
		<li>Считыватели PERCo-MR07</li>
		<li>Датчик прохода</li>
		<li>Индикатор открытия исполнительного устройства</li>
		<li>Блок питания 12 В</li>
		<li>Розетка Ethernet для подключения ПК</li>
		<li>Информационный плакат по подключению оборудования</li>
	</ul>
</div>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>