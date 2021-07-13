﻿<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die ();?>
<?php if (sizeof($arResult["ACCESS_ERRORS"])):?>
<?php foreach ($arResult["ACCESS_ERRORS"] as $error):?>
		<p><font class="errortext"><?php echo $error?></font></p>
<?php endforeach?>
<p><a href="./">Вернуться к выбору экзаменов</a></p>';
<?php else:?>
<?
	$STUDENT_ID = intval($USER->GetID());
	$arGradebookA = CGradebook::GetList(Array("ID" => "ASC"),Array("TEST_ID" => $arResult["TEST"]["ID"], "STUDENT_ID" => $STUDENT_ID));
	$arGradebookA = $arGradebookA->GetNext();
	if ($arGradebookA["COMPLETED"]=='Y')
		echo '<p>Вы успешно сдали экзамен<p><p><a href="./">Вернуться к выбору экзаменов</a></p>';
	else
	{
?>
<?if (!empty($arResult["QUESTION"])):?>
<p><b>Практическое задание</b></p>

<? if ($arResult["TEST"]["ID"]==4) {?>
<h3>Задание:</h3>
<ol>
	<li>Установить ПО PERCo-S-20 на компьютер</li>
    <li>Подключить стендовое оборудование PERCo к серверу системы PERCo-S-20</li>
    <li>Настроить ПО PERCo-S-20 согласно следующим задачам</li>
    <li>По факту выполнения всех заданий. Открыть Центр управления PERCo-S-20 и остановить Сервер системы .</li>
    <li>Файл базы данных упаковать в архив и отправить на проверку.</li>
</ol>
<? }?>
<? if ($arResult["TEST"]["ID"]==5) {?>
<h3>Задание:</h3>
<ol>
	<li>Установить ПО PERCo-Web на компьютер</li>
	<li>Подключить стендовое оборудование PERCo к серверу системы PERCo-WEB</li>
	<li>Настроить ПО PERCo-WEB согласно следующим задачам</li>
	<li>По факту выполнения всех заданий. Открыть менеджер ПО PERCo-Web и создать резервную копию базы данных.</li> 
	<li>Файл резервной копии упаковать в архив и отправить на проверку.</li>
</ol>
<? }?>
<h3>Задачи:</h3>

<?
if ($arResult["QBAR"][$arResult["NAV"]["PAGE_NUMBER"]]["RESPONSE"][0]=="")
{
	$masAns=array();
	$resMas=array();
	if ($arResult["TEST"]["ID"]=="5")
	{
		$aQ = Array(
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
			        "Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Включить возможность подтверждать проход посетителя от пульта ДУ. Установить время ожидания подтверждения верификации на 15 секунд.",
					"Настроить жесткий контроль времени на вход и выход.",
					"Добавить пространственную зону контроля в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зоной и контроллером.",
					"В разделе 'Мониторинг' создать мнемосхему территории предприятия, разместить устройства внутри помещений.",
					"Создать шаблон доступа в разделе Бюро пропусков/Шаблоны доступа: установить границы временной зоны 08:00-20:00; настроить недельный критерий доступа с этой временной зоной.",
					"Заполнить справочные данные в разделе «Персонал» на вкладках «Подразделения» и «Должности».", 
					"Настроить график работы с началом рабочего времени в 09:00 и окончанием – в 18:00 часов. Перерыв на обед – с 13:00 до 14:00. Активизируйте параметр «Не учитывать праздники».",
					"Заполнить данные сотрудников: Богданов Сергей Николаевич специалист Отдела продаж и Тарасова Ольга Михайловна менеджера по персоналу. Предоставить доступ по карте.",
					"Совершить проход по выданным картам для получения данных в разделе «Отчёт о проходах». Выгрузить отчёт в Excel.",
					"Сделать заказ пропуска для посетителя в разделе «Заказ пропусков». Заполнить учетные данные посетителя:ФИО, подтверждающий документ, номер документа, куда и сопровождающий. Задать срок действия пропуска самостоятельно.",
					"Настроить учетную запись сотрудника «Бюро пропусков» в разделе Администрирование.",
					"Создать реакцию на событие. Условие и действие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждую субботу с 23:00 - 23:59."
				),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить жесткую защиту от передачи идентификаторов (Antipass) на всем предприятии.",
					"Установить доп. выход контроллера CT/L14 как генератор тревоги. Указать время активизации выхода 5 секунд. Настроить генерацию тревоги при предъявлении незарегистрированного идентификатора.",
					"Активировать возможность регистрации прохода по предъявлению идентификатора.",
					"Добавить пространственную зону «Проходная» в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зоной и контроллером.",
					"Добавить пространственную зону «Проходная» на мнемосхему в разделе 'Мониторинг'. Распределить устройства внутри помещения.",
					"Создать шаблон доступа для сотрудников предприятия в разделе Бюро пропусков/Шаблоны доступа. Установить временные границы самостоятельно.",
					"Заполнить справочники «Подразделения» и «Должности» в разделе «Персонал». Создать график работы сотрудников, время работы выбрать самостоятельно.",
					"Создать двух сотрудников: Бойко Олег Владимирович и Буденко Людмила Алексеевна. Заполнить учетные карточки сотрудников и выдать им карты доступа.",
					"Совершить проход по выданным картам доступа. Сформировать отчет о событиях за сегодняшний день в разделе Администрирование/События системы и выгрузить его в Excel.",
					"Настроить роль оператора «Служба безопасности» в разделе Администрирование/Роли и права операторов. Права выбирать самостоятельно. Добавить оператора «Служба безопасности» в разделе Администрирование/Операторы.",
					"Создать реакцию на событие, в результате которой выбранный сотрудник будет получать уведомление в мессенджере Viber. Условие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый день."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Включить глобальный контроль зональности (Glodal antipass).",
					"Настроить дополнительный вход контроллера CT/L14 для сброса тревоги.",
					"Запретить использование пульта ДУ для разрешения прохода в определенном направлении.",
					"Добавить пространственную зону контроля в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зоной и контроллером.",
					"Создать мнемосхему в разделе 'Мониторинг'. Распределить устройства внутри помещения.",
					"Создать шаблон доступа в разделе Бюро пропусков/Шаблоны доступа. Временные критерии доступа выбрать самостоятельно.",
					"В разделе «Дизайн пропуска» создайть общий шаблон пропуска для сотрудников. Разместить на шаблоне информацию: ФИО, подразделение, должность и фото.",
					"Заполнить справочники «Подразделения» и «Должности» в разделе «Персонал». Создать сменный график работы сотрудников с 20:00 до 8:00, время перерыва выбрать самостоятельно.",
					"Создать учетные карточки сотрудников Горбунков Семен Семенович и Бубликов Петр Петрович. Заполнить карточку сотрудников. Выдать карты доступа. Задать срок действия карт доступа на период 4 года.",
					"Совершить проход по выданным картам доступа и сформировать отчет о событиях в разделе Администрирование/События системы. Полученный отчет выгрузить в Excel.",
					"Создать и настроить роль оператора в разделе Администрирование/Роли и права операторов. Добавить оператора в разделе Администрирование/Операторы, назначить ему созданную роль.",
					"Настроить реакцию на события таким образом, чтобы у выбранного оператора включилось отображение кадров видеокамеры. Условие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый понедельник."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Осуществить поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить мягкий контроль времени на входном считывателе.",
					"Добавить пространственную зону «Проходная» в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между пространственной зоной и контроллером.",
					"Добавить пространственную зону «Проходная» на мнемосхему в разделе 'Мониторинг'. Распределить устройства внутри помещения.",
					"Создать шаблон доступа в разделе Бюро пропусков/Шаблоны доступа. Установить временные критерии доступа с Пн по Пт с 08:30 до 18:30.",
					"Создать график работы сотрудников с 9:00 до 18:00, с перерывом на обед 1 час. Разрешить опоздание на время не более 10 минут и уход раньше не более чем на 5 минут. Создать структуру подразделений предприятия и заполнить список должностей.",
					"Внести в программу двух сотрудников. Заполнить их учетные карточки и выдать им карты доступа.",
					"Совершить проход по выданным картам доступа.",
					"Сформировать отчет о событиях в разделе Администрирование/События системы и выгрузить его в Excel.",
					"Создать роль оператора «Охрана» в разделе Администрирование/Роли и права операторов. Предоставить право на работу с помещениями и устройствами. В разделе Администрирование/Операторы создайте оператора службы охраны и предоставьте право на работу с разделом «Контроль доступа».",
					"Создать реакцию на событие. Условие и действие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый день."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить мягкую защиту от передачи идентификаторов(Antipass) на считывателях.",
					"Настроить генерацию тревоги в системе при взломе ИУ с активизацией сирены.",
					"Добавить пространственную зону «Бухгалтерия» в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между пространственной зоной и контроллером.",
					"Добавить пространственную зону «Бухгалтерия» на мнемосхему в разделе 'Мониторинг'. Распределить устройства внутри помещения.",
					"Создать шаблон доступа в разделе Бюро пропусков/Шаблоны доступа. Установить границы «Временной зоны» 07:00-18:00; настроить временной критерий «Недельный график» с этой временной зоной.",
					"Заполнить справочники «Подразделения» и «Должности» раздела «Персонал». Создать график работы сотрудников с 8:00 до 17:00. Активировать возможность «Учитывать первый вход и последний выход».",
					"Создать учетные карточки сотрудников Горбунков Григорий Григорьевич и Бубликов Павел Павлович. Внести информацию о подразделении, должности, графике работы, шаблоне доступа и загрузить фотографию. Выдать карты доступа сотрудникам. Задать срок действия карт 3 года.",
					"Совершить проход по выданным картам доступа. Сформировать отчет в разделе «Отчет о проходах», выгрузить полученный отчет в Excel.",
					"Заказать пропуск для посетителя в разделе «Заказ пропусков».",
					"Предоставить право на работу с программой сотруднику «Отдела кадров»: создать оператора, предоставить ему роль и права. Перечень необходимых разделов ПО, подразделений, помещений, устройств и прав на работу с ними определить самостоятельно.",
					"Создать реакцию на событие 'Идентификатор не зарегистрирован'. Действие выбрать самостоятельно.",
					"Настроить резервное копирование базы. Время и частотность резервного копирования выберите самостоятельно."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить жесткий контроль зональности и времени на всей террирории предприятия.",
					"Активировать возможность регистрации прохода по предъявлению идентификатора.",
					"Создать структуру пространственных зон предприятия в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зонами и контроллерами.",
					"В разделе 'Мониторинг' создать мнемосхему предприятия. Разместите устройства внутри помещений.",
					"Создать шаблон доступа и установить временные критерии с ПН по ПТ с 08:30 до 18:15.",
					"Создать макет пропуска для посетителей предприятия в разделе «Дизайн пропуска». На макете разместить ФИО, сопровождающего и фотографию.",
					"Заполнить справочные данные, в разделе «Персонал», на вкладках «Подразделения» и «Должности». Создать график работы для сотрудников: с 9:00 – 17:45, обед с 13:00 до 13:45.",
					"Создать и заполнить карточки сотрудников – Богданова Сергея Николаевича, специалиста Отдела продаж и Тарасову Ольгу Михайловну, менеджера по персоналу. Предоставить доступ по карте.",
					"Совершить проход по выданным картам доступа. Сформировать отчет о всех событиях за текущий день, выгрузить его в Excel",
					"Предоставить право на работу с программой оператору «Бюро пропусков». Перечень необходимых разделов ПО, подразделений, помещений, устройств и прав на работу с ними определить самостоятельно.",
					"Создать реакцию на событие, в результате которой выбранный сотрудник получит уведомление через SMS-сообщение. Условие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый день."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить мягкий контроль времени на вход и выход.",
					"Создать структуру пространственных зон предприятия в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зонами и контроллерами.",
					"Создать мнемосхему предприятия в разделе 'Мониторинг'. Распределить устройства внутри помещений.",
					"Добавить шаблон доступа для сотрудников предприятия в разделе Бюро пропусков/Шаблоны доступа. Установить временные границы самостоятельно.",
					"Создать шаблон пропуска для сотрудников в разделе «Дизайн пропуска». Данные, размещаемые на пропуске, выбрать самостоятельно.",
					"Заполнить список подразделений и должностей в разделе «Персонал» на вкладках «Подразделения» и «Должности». Создать сменный график работы сотрудников с 8:00 до 20:00, время перерыва выбрать самостоятельно.",
					"Заполнить данные сотрудников – Бойко Олег Владимирович и Буденко Людмила Алексеевна. Установить для них созданный график работы, шаблон доступа, подразделение и должность. Выдать карты доступа.",
					"Совершить проход по выданным картам доступа и сформировать отчет о событиях в разделе Администрирование/События системы. Затем выгрузить его в Excel",
					"Создать нового оператора для работы с системой PERCo-Web. Выбрать роль и право самостоятельно.",
					"Создать реакцию на событие 'Идентификатор запрещен'. Действие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый понедельник, среду и пятницу с 23:00 - 23:59."
					),
				Array("Запустить процесс установки программы PERCo-WEB. В процессе установки задать пароль для сервера БД и менеджера PERCo-WEB – Q123456y", 
				    "Активировать дополнительные модули ПО 'Учёт рабочего времени', 'Верификация' и 'Мониторинг' для работы в ознакомительном режиме.",
					"Произвести поиск устройств в разделе Администрирование/Конфигурация/Устройства.",
					"Настроить подтверждение прохода посетителя/сотрудника от пульта ДУ. Установить время ожидания подтверждения на 8 секунд.",
					"Активировать мягкий контроль зональности на ИУ и считывателях контроллера CT/L14.",
					"Создать структуру пространственных зон предприятия в разделе Администрирование/Конфигурация/Помещения. Установить логическую связь между зонами и контроллерами.",
					"Создать мнемосхему предприятия в разделе 'Мониторинг'. Распределить устройства внутри помещений.",
					"Создать шаблон доступа в разделе Бюро пропусков/Шаблоны доступа и установить временные критерии с Пн по Пт с 07:00 до 19:00.",
					"Создать структуру подразделений предприятия в разделе «Персонал» и заполнить список должностей. Добавить график работы «Пятидневка» с 7:00 до 16:00, включите учет первого входа и последнего выхода.",
					"Внести в программу двух сотрудников. Заполнить их учетные карточки и выдать карты доступа. Задать срок действия карт доступа до конца года",
					"Совершить проход по выданным картам. Сформировать отчет о всех событиях за текущий день. Полученный отчет выгрузить в Excel",
					"Сделать заказ пропуска для посетителя в разделе «Заказ пропусков». Внести информацию о посетителе и установить время действия пропуска до 20:30.",
					"Создать роль и настроить права для сотрудника Бюро пропусков. Назначить ее оператору.",
					"Создать реакцию на событие, в результате которой будет включена запись видеокамеры. Условие выбрать самостоятельно.",
					"Настроить резервное копирование базы на каждый вторник, четверг и субботу с 23:00 - 23:59."
					)
				);
	$rndKey = array_rand($aQ, 1);
	$masAns = $aQ[$rndKey];
	}
	else
	{
		$aQ = Array(
				Array(
					"Создать пустую базу данных в Центре управления PERCo-S-20",
					"Создать расписание автоматического резервного копирования БД на каждый понедельник в 02:00"
					),
				Array(
					"Установить протокол считывателей «Универсальный»",
					"Включить глобальный контроль зональности",
					"Изменить наименование считывателей контроллера на Вход/Выход",
					"Создать структурную схему помещений. Разместить устройства в помещениях",
					"Создать структуру подразделений и распределить сотрудников по подразделениям",
					"Заполнить список должностей и назначить сотрудников на должности",
					"Настроить активизацию выхода при срабатывании датчика вскрытия корпуса контроллера."
					),
				Array(
					"Настроить срабатывание Генератора тревоги при вскрытии корпуса контроллера",
					"Настроить срабатывание Генератора тревоги при несанкционированном взломе ИУ",
					"Настроить срабатывание Генератора тревоги при недопустимо долгом открытии ИУ",
					"Настроить срабатывание Генератора тревоги при предъявлении идентификатора, который в системе не зарегистрирован"
					),
				Array(
					"Создать дополнительные поля карточки сотрудника:
					Страховое пенсионное свидетельство (СНИЛС) – графическое поле, Домашний телефон – текстовое поле",
					"Создать дополнительные поля карточки сотрудника:
					 Свидетельство о браке – графическое поле и Домашний адрес – текстовое поле"
					),
				Array(
					"Создать учетные карточки сотрудников Горбунков Семен Семенович и Бубликов Петр Петрович",
					"Заполнить праздничные дни текущего года предустановленными значениями",
					"Установить 21 и 28 января 2020 года рабочими выходными с переносом дня отдыха на 9 и 10 января  2020 года",
					"Установить вечернее и ночное время на с 18.00 до 22.00 и с 22.00 до 7.00 соответственно"
					),
				Array(
					"Создать недельный график работы с 09:00 до 18:00 с перерывом на обед с 13:00 до 14:00, Суббота, воскресенье – выходной. Включить контроль нарушений в течение рабочего дня.",
					"Создать недельный график работы с 09:00 до 17:45 с перерывом на обед с 13:00 до 13:45, Суббота, воскресенье – выходной. Включить контроль нарушений в течение рабочего дня.",
					"Создать недельный график работы с 08:00 до 17:00 с перерывом на обед с 12:00 до 13:00, Суббота, воскресенье – выходной. Включить контроль нарушений в течение рабочего дня."
					),
				Array(
					"Создать сменный график работы «два дня через два» с 20:00 до 08:00 с двумя перерывами по 30 минут ",
					"Создать сменный график работы «три дня через два» с 18:00 до 06:00 с двумя перерывами по 30 минут ",
					"Создать сменный график работы «три дня через три» с 20:00 до 08:00 с двумя перерывами по 30 минут ",
					"Создать месячный график работы: рабочие дни 1-5,8-12, 15-19, 22-26, 29-31, время работы с 09:00 до 21:00 два перерыва по полчаса",
					"Создать месячный график работы: рабочие дни 2-7, 10-14, 17-21, 24-28, 31, время работы с 08:00 до 18:00 два перерыва по полчаса",
					"Создать месячный график работы: рабочие дни 1, 2, 4-8, 11-15, 18-22, 25-29 время работы с 22:00 до 8:00 два перерыва по полчаса"
					),
				Array(
					"Включить параметр «Не учитывать праздники» на всех графиках работы",
					"Включить параметр «Учитывать только первый вход последний выход»"
					),
				Array(
					"Настроить параметр «Не считать нарушением опоздание не более чем на 5 минут»",
					"Настроить параметр «Не считать нарушением уход ранее не более чем на 5 минут»"
					),
				Array(
					"Назначить графики работы всем сотрудникам",
					"Создать график доступа, предоставив право прохода за 30 минут до начала рабочего времени. На выход с территории - не более 30 минут по окончанию рабочего времени",
					"Выдать карты доступа всем сотрудникам. Установить срок действия карт до конца текущего года",
					"Создайте шаблон доступа, параметры доступа определить самостоятельно. Назначьте шаблоном доступа пользователю.",
					"Зарегистрировать несколько проходов сотрудников",
					"Построить дисциплинарный отчет о времени присутствия. Установить параметр «Точность до секунд» и выгрузить отчёт в таблицу Excel",
					"Сформировать месячный отчет в Журнале отработанного времени и выгрузить его в таблицу Excel"
					),
				Array(
					"Установить  пароль на контроллере и затем сбросить его",
					"Отключить возможность управления пультом ДУ",
					"Настроить один из считывателей как картоприемник. Установить необходимые для работы картоприемника настройки дополнительного выхода",
					"Установить минимальное время ожидания подтверждения при верификации в разделе Конфигуратор",
					"Отключить предельное время разблокировки ИУ",
					"Настроить срабатывание сирены при предъявлении незарегистрированного идентификатора",
					"Настроить срабатывание сирены при вскрытии корпуса контроллера",
					"Настроить автоматическую разблокировку контроллера при возникновении задымления",
					"Добавить номера сотовых телефонов в учетные данные сотрудников",
					"Заменить график работы одному из сотрудников с 10 по 20 число текущего месяца",
					"Создать макет пропуска для печати на карточных принтерах",
					"Настроить рассылку смс при входе одного из сотрудников на предприятие"
					),
				Array(
					"Отключить локальный контроль зональности на исполнительном устройстве",
					"Настроить жесткий контроль зональности на всей территории",
					"Настроить мягкий контроль зональности на всей территории"
					),
				Array(
					"Отключить контроль графиков доступа на всей территории",
					"Настроить жесткий графиков доступа доступа на всей территории",
					"Настроить мягкий контроль графиков доступа на всей территории"
					),
				Array(
					"Настроить включение сирены при предъявлении незарегистрированного идентификатора",
					"Настроить включение сирены при предъявлении идентификатора с истекшим сроком",
					"Настроить включение сирены при предъявлении идентификатора с нарушением времени",
					"Настроить включение сирены при предъявлении идентификатора с нарушением зональности",
					"Настроить включение сирены при открытии корпуса контроллера"
				)
				);
	$numAn=array(0,1,0,1,0,1,1,1,1,0,1,1,1,1);
//	$numAn=array(0,1,0,2,1,1,1);
	foreach($aQ as $keyS=>$aQSec):
		if ($numAn[$keyS]==0) $resMas = array_merge ($resMas, $aQSec); else {
			$randMss = array_rand($aQSec, $numAn[$keyS]);
			if (count($randMss)==1) {
				$resMas[]=$aQSec[$randMss];
			} else {
				foreach($randMss as $randMssElem):
					$resMas[]=$aQSec[$randMssElem];
				endforeach;
		}}
		$masAns = array_merge ($masAns, $resMas);
		$resMas=array();
	endforeach;
	}
	$resAns='<ol>';
	foreach($masAns as $masAnsElem):
		$resAns.='<li>'.$masAnsElem.'</li>';
	endforeach;
	$resAns.='</ol>';
	$TEST_TESULT_ID=$arResult["QBAR"][$arResult["NAV"]["PAGE_NUMBER"]]["ID"];
	$arFields = Array("CORRECT" => "Y", "RESPONSE" => $resAns,"POINT" => "0");
	$plan = new CTestResult;
	$plan->Update($TEST_TESULT_ID, $arFields);
}

$resTRID = CTestResult::GetByID($arResult["QBAR"][$arResult["NAV"]["PAGE_NUMBER"]]["ID"]);
if ($arResultTRID = $resTRID->GetNext())
{
	if ($arResultTRID["QUESTION_TYPE"]=="T"){
		echo html_entity_decode($arResultTRID["RESPONSE"]);
	} else {
		$resCLANS = CLAnswer::GetByID($arResultTRID["RESPONSE"]);
		if ($arAnswerCL = $resCLANS->GetNext())
		{
			echo html_entity_decode($arAnswerCL["ANSWER"]);
		}
	}
}
?>
<script type="text/javascript">

</script>
<form enctype="multipart/form-data" name="learn_test_answer" action="<?=$arResult["ACTION_PAGE"]?>" method="post">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="TEST_RESULT" value="<?=$arResult["QBAR"][$arResult["NAV"]["PAGE_NUMBER"]]["ID"]?>">
		<input type="hidden" name="<?=$arParams["PAGE_NUMBER_VARIABLE"]?>" value="<?=($arResult["NAV"]["PAGE_NUMBER"] + 1)?>">
		<input type="hidden" name="back_page" value="<?=$arResult["SAFE_REDIRECT_PAGE"]?>" />

        <p><strong><?=$nump;?>Прикрепите файл с базой:</strong></p>
		<?=CFile::InputFile("VOTE", 50, '',"/upload/praktika/", false, false, 'onchange="$(\'input[name=finish]\').prop(\'disabled\', false)"');?><br />

		<input disabled="disabled" type="submit" name="finish" value="<?=GetMessage("LEARNING_BTN_FINISH")?>" onClick="return confirm('<?=GetMessage("LEARNING_BTN_CONFIRM_FINISH")?>')">
		<input type="hidden" name="ANSWERED" value="Y">
	</form>

<?elseif ($arResult["TEST_FINISHED"] === true):?>

		<?ShowError($arResult["ERROR_MESSAGE"]);?>
		<?ShowNote(GetMessage("LEARNING_COMPLETED"));?>
<p><a href="./">Вернуться к выбору экзаменов</a></p>



	<?elseif (strlen($arResult["ERROR_MESSAGE"]) > 0):?>

		<?ShowError($arResult["ERROR_MESSAGE"]);?>
		<br />
		<form name="learn_test_start" method="post" action="<?=$arResult["ACTION_PAGE"]?>">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="back_page" value="<?=$arResult["SAFE_REDIRECT_PAGE"]?>" />
		<input type="submit" name="next" value="<?=GetMessage("LEARNING_BTN_CONTINUE")?>">
		</form>

	<?else:?>

		<?=GetMessage("LEARNING_TEST_NAME")?>: <?=$arResult["TEST"]["NAME"];?><br />
		<?if (strlen($arResult["TEST"]["DESCRIPTION"]) > 0):?>
			<?=$arResult["TEST"]["DESCRIPTION"]?><br />
		<?endif?>

		<?if ($arResult["TEST"]["ATTEMPT_LIMIT"] > 0):?>
			<?=GetMessage("LEARNING_TEST_ATTEMPT_LIMIT")?>: <?=$arResult["TEST"]["ATTEMPT_LIMIT"]?>
		<?else:?>
			<?=GetMessage("LEARNING_TEST_ATTEMPT_LIMIT")?>: <?=GetMessage("LEARNING_TEST_ATTEMPT_UNLIMITED")?>
		<?endif?>
		<br />

		<?if ($arResult["TEST"]["TIME_LIMIT"] > 0):?>
			<?=GetMessage("LEARNING_TEST_TIME_LIMIT")?>: <?=$arResult["TEST"]["TIME_LIMIT"]?> <?=GetMessage("LEARNING_TEST_TIME_LIMIT_MIN")?>
		<?else:?>
			<?=GetMessage("LEARNING_TEST_TIME_LIMIT")?>: <?=GetMessage("LEARNING_TEST_TIME_LIMIT_UNLIMITED")?>
		<?endif?>
		<br />

		<?=GetMessage("LEARNING_PASSAGE_TYPE")?>:
		<?if ($arResult["TEST"]["PASSAGE_TYPE"] == 2):?>
			<?=GetMessage("LEARNING_PASSAGE_FOLLOW_EDIT")?>
		<?elseif ($arResult["TEST"]["PASSAGE_TYPE"] == 1):?>
			<?=GetMessage("LEARNING_PASSAGE_FOLLOW_NO_EDIT")?>
		<?else:?>
			<?=GetMessage("LEARNING_PASSAGE_NO_FOLLOW_NO_EDIT")?>
		<?endif?>
		<br />

		<?if ($arResult["TEST"]["PREVIOUS_TEST_ID"] > 0 && $arResult["TEST"]["PREVIOUS_TEST_SCORE"] > 0 && $arResult["TEST"]["PREVIOUS_TEST_LINK"]):?>
			<?=str_replace(array("#TEST_LINK#", "#TEST_SCORE#"), array('"'.$arResult["TEST"]["PREVIOUS_TEST_LINK"].'"', $arResult["TEST"]["PREVIOUS_TEST_SCORE"]), GetMessage("LEARNING_PREV_TEST_REQUIRED"))?>
			<br />
		<?endif?>

		<br />
		<form name="learn_test_start" method="post" action="<?=$arResult["ACTION_PAGE"]?>">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="back_page" value="<?=$arResult["SAFE_REDIRECT_PAGE"]?>" />
		<input type="submit" name="next" value="<?=GetMessage("LEARNING_BTN_START")?>">
		</form>

	<?endif?>
    <?}?>
<?php endif?>
