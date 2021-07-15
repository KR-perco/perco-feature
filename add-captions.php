<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/*
\Bitrix\Iblock\TypeTable::getList(); // типы инфоблоков
\Bitrix\Iblock\IblockTable::getList(); // инфоблоки
\Bitrix\Iblock\PropertyTable::getList(); // свойства инфоблоков
\Bitrix\Iblock\PropertyEnumerationTable::getList(); // значения свойств, например списков
\Bitrix\Iblock\SectionTable::getList(); // Разделы инфоблоков
\Bitrix\Iblock\ElementTable::getList(); // Элементы инфоблоков 
\Bitrix\Iblock\InheritedPropertyTable::getList(); // Наследуемые свойства (seo шаблоны)
DATE_CREATE - дата создания элемента инфоблока
'ID', 'IBLOCK_ID' - лучше всегда указывать в select во избежание багов
*/

/*if (!$USER->IsAdmin()) {
	CHTTP::SetStatus("404 Not Found");
	@define("ERROR_404","Y");
}*/

$countries = [
	'Турникет-трипод TTR-04.1 и ограждение BH в фитнес-клубе, Нидерланды' => 'Нидерланды',
	'Всепогодный турникет-трипод TTR-04, колледж, Франция' => 'Франция',
	'Турникет-трипод T-5 на предприятии TRW Steering Systems (Словакия)' => 'Словакия',
	'Турикеты-триподы TTR-04.1, дом отдыха «Здравница Ая», Алтайский край' => 'Россия',
	'Турникет-трипод TTR-04 в SPA-центре «Vital World», Словакия' => 'Словакия',
	'Турникеты-триподы TTR-04 в Аквапарке, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04W в спортивном комплексе «Лавина», Украина' => 'Украина',
	'Турникеты TTR-04 в Министерстве Внутренних Дел Сирии' => 'Сирия',
	'Тумбовые турникеты TTD-03.2S на проходной предприятия, Чехия' => 'Чехия',
	'TTD-03.2S в Региональном Финансово-Экономическом Институте, Воронеж' => 'Россия',
	'Турникет-трипод TTD-03.1 и калитка WMD-04S, городской центр развлечений, Глазго' => 'Великобритания',
	'Калитки WMD-04S, Афины' => 'Греция',
	'Калитка WMD-04S. Бассейна «Laugardalslaug», Рейкьявик' => 'Исландия',
	'Калитки WHD-04G сеть отелей Grupo Transhotel, Испания' => 'Испания',
	'WHD-04R, в порту Корфу, Греция' => 'Греция',
	'Калитки WHD-04, Санкт-Петербург' => 'Россия',
	'Турникеты RTD-03S, в здании компании Беларуснефть, Гомель' => 'Беларусь',
	'Система безопасности S-20 и турникеты RTD-03S на Центральном автомобильном ремонтном заводе, Воронеж' => 'Россия',
	'Полноростовые турникеты RTD-15.2, на заводе компании ARNEG, Падуя, Италия' => 'Италия',
	'Полноростовый роторный турникет RTD-15.1 на пивоваренном заводе Spendrups Brewery, Grängesberg, Швеция' => 'Швеция',
	'Полноростовый роторный турникет RTD-15, в храмовом комплексе Гжантия на острове Гоцо (Мальта)' => 'Мальта',
	'Полноростовые турникеты RTD-15 в аквапарке «Дельфин», Туапсинский район, Краснодарский край.' => 'Россия',
	'Роторные турникеты RTD-15.1 на стадионе Vincenzo Presti, Гела, Сицилия (Италия)' => 'Италия',
	'Полноростовые роторные турникеты RTD-15.1 в международном морском порту Jebel Ali, Дубай, ОАЭ' => 'Объединённые Арабские Эмираты',
	'Полноростовый роторный турникет RTD-15.1 и MB-15, мобильные проходные, Франция' => 'Франция',
	'Полноростовый турникет RTD-15.2 на входе в Межвузовский студенческий городок, Санкт-Петербург - 3' => 'Россия',
	'Электронная проходная KT02 в компании «Современные технологии строительства», Санкт-Петербург' => 'Россия',
	'TTD-03.1S и картоприемником IC02 в здании администрации РЖД, Санкт-Петербург' => 'Россия',
	'RTD-05.2 Завод компании «ARNEG», Падуя, Италия' => 'Италия',
	'Полноростовые роторные турникеты RTD-15.1, в международном морском порту Jebel Ali, Дубай, ОАЭ - 2' => 'Объединённые Арабские Эмираты',
	'Турникет-трипод TTR-04.1 и огражение BH02 в кафе Quad Cafe, Университет Окланда, Н. Зеландия.' => 'Новая Зеландия',
	'Ограждения BH02 на проходной Мэрии города Владивостока' => 'Россия',
	'Ограждение и Электронная проходная KT02 в здании Управления Россельхознадзора по Приморскому краю, Владивосток' => 'Россия',
	'Электронная проходная KT02, калитка WHD-04 и ограждения серии BH в здании Управления Россельхознадзора по Приморскому краю, Владивосток.' => 'Россия',
	'Электронные проходные KTC01 в московском учреждении' => 'Россия',
	'Автоматические калитки WMD-04S, Chong Qing Mobile LTD, Китай' => 'Китай',
	'Электронная проходная КТ02, предприятие Samalaju Lodge, Бинтулу, Саравак, Малайзия' => 'Малайзия',
	'TTD-03.1S и ограждения BH02 в библиотеке для молодежи, Москва' => 'Россия',
	'TTD-03.1 бизнес-центр Киев' => 'Украина',
	'TTD-03.1S Центр образования "Школа здоровья" №1317, Москва' => 'Россия',
	'Электронные проходные KT02, гимназия №8, Витебск, Беларусь - 2' => 'Беларусь',
	'Парк Сокольники, Москва.' => 'Россия',
	'RTD-03S Линия подземного трамвая Метротрам, Волгоград.' => 'Россия',
	'Турникеты-триподы TTR-04.1, Бизнес-центр «Каскад», Москва' => 'Россия',
	'Турникеты-триподы PERCo-TTR-04.1R и калитки PERCo-WHD-04R, предприятие ELBA, Словакия' => 'Словакия',
	'Роторные полуростовые турникеты PERCo-RTD-03S и калитка PERCo-WMD-05S на вагоностроительном заводе «TATRAVAGONKA a.s.», Словакия.' => 'Словакия',
	'Электронные проходные PERCo-KT05, Издательство Молодая Гвардия, Москва.' => 'Россия',
	'Турникет-трипод PERCo-TTR-04E, детский развлекательный центр «Гранд каньон», Санкт-Петербург' => 'Россия',
	'Электронные проходные KT05 и ограждения серии BH. Бизнес центр «Санкт-Петербург», Санкт-Петербург' => 'Россия',
	'Электронные проходные PERCo-KT05, Завод «Трубодеталь», Челябинск.' => 'Россия',
	'Тумбовые турникеты-триподы, Бизнес-центр «Орликов», Москва' => 'Россия',
	'Электронные проходные PERCo-KTC01, Бизнес-центр Helios, Москва' => 'Россия',
	'Электронные проходные PERCo-KT02, средняя общеобразовательная школа, Москва' => 'Россия',
	'Учет рабочего времени на заводе, Псков' => 'Россия',
	'Тумбовые турникеты PERCo-TTD-03.1, Бизнес-центр Riga Land, Московская область' => 'Россия',
	'Тумбовые турникеты PERCo-TTD-03.1, Бизнес-центр Столица, Воронеж' => 'Россия',
	'Турникеты-триподы PERCo-TTR-04, ТРЦ Омега, Ледовый каток, Ижевск' => 'Россия',
	'Электронные проходные PERCo-KT02 и ограждения PERCo серии BH, Гимназия, Москва - 2' => 'Россия',
	'Полноростовые роторные турникеты PERCo-RTD-15. Автомобильный завод Магна. Санкт-Петербург' => 'Россия',
	'Турникет-трипод PERCo-TTR-04CW, Сафари Парк, Анапа' => 'Россия',
	'Турникеты-триподы PERCo-TTR-04.1, фитнес-центр Gym, Дубаи, ОАЭ' => 'Объединённые Арабские Эмираты',
	'Турникеты-триподы TTR-04.1, фитнес-центр «Fitness House», Санкт-Петербург - 2' => 'Россия',
	'Турникеты-триподы PERCo-TTR-04.1 с планками «Антипаника» и автоматические калитки PERCo-WMD-05, Италия - 2' => 'Италия',
	'Электронные проходные PERCo-KT02 и ограждения PERCo серии BH, школа № 56, Калининград' => 'Россия',
	'Тумбовые турникеты- триподы PERCo-TTD-03.1, «Зима», Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты- триподы PERCo-TTD-03.1, 22 линия ВО, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты- триподы PERCo-TTD-03.1, «Лето», Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты- триподы PERCo-TTD-03.1 и ограждения PERCo-BH02, «Теорема», Санкт-Петербург' => 'Россия',
	'Роторные полуростовые турникеты PERCo-RTD-03S, картоприемник PERCo-IC02, ограждения PERCo-BH02 и калитка PERCo-WMD-05S, «Леон», Санкт-Петербург' => 'Россия',
	'Турникеты- триподы PERCo-TTR-04.1, «Механобр», Санкт-Петербург' => 'Россия',
	'Турникеты- триподы PERCo-TTR-04.1 и ограждения PERCo-BH02, «Феникс», Санкт-Петербург' => 'Россия',
	'Полноростовые роторные турникеты PERCo-RTD-15. Этнографический комплекс «Атамань», Кубань, Краснодарский край' => 'Россия',
	'Тумбовые турникеты TTD-03.2S, общеобразовательная школа в Лиссабоне, Португалия' => 'Португалия',
	'Тумбовые турникеты TTD-03.1, «Даниловская мануфактура», Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.2 «Алексеевская башня», Москва' => 'Россия',
	'Электронные проходные KT05, бизнес-центр ГАП, Санкт-Петербург' => 'Россия',
	'Электронные проходные KT05, бизнес-центр ГАП, Санкт-Петербург - 3' => 'Россия',
	'Терминал учета рабочего времени LICON, бизнес-центр ГАП, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1, бизнес-центр H2O, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1, бизнес-центр Осень, Санкт-Петербург' => 'Россия',
	'Парк Сокольники, Москва - 2' => 'Россия',
	'TTR-04.1 Даниловская мануфактура, Москва' => 'Россия',
	'Турникеты-триподы T-5 и ограждения BH02 в ФГУП "Космическая связь", Москва' => 'Россия',
	'Турникет-трипод T-5, фитнес-центр, Германия' => 'Германия',
	'Автоматические калитки WMD-05, Мариинский театр, Санкт-Петербург' => 'Россия',
	'Полноростовые роторные турникеты RTD-15, морской порт, Ростов-на-Дону' => 'Россия',
	'Турникеты-триподы T-5 на главном входе филателистической торговой выставки в Park Floral, Париж, Франция' => 'Франция',
	'Полноростовые турникеты RTD-15, морской порт, Триест, Италия' => 'Италия',
	'Электронные проходные KT05 в составе системы S-20, Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02, Школа №2, Ленск' => 'Россия',
	'Роторные турникеты RTD-03S, бизнес-центр Arcus, Москва' => 'Россия',
	'Калитка WMD-06, центр досуга и сервиса Moto Hospitality, Бедфордшир, Великобритания' => 'Великобритания',
	'Электронная проходная KT02, бизнес-центр Резон, Санкт-Петербург' => 'Россия',
	'Полноростовые турникеты RTD-15, завод Ford, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы T-5 и ограждения серии BH02, STU, Братислава, Словакия' => 'Словакия',
	'Тумбовые турникеты TTD-03.1 и ограждения BH02, бизнес-центр Diamond Hall, Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.1 и ограждения серии BH02, UPV, Словакия' => 'Словакия',
	'Турникеты-триподы TTR-04.1 и ограждения серии BH02, Hyza Topolcany, Словакия' => 'Словакия',
	'Турникеты-триподы TTR-04CW и ограждения BH02, парк Сокольники, Москва' => 'Россия',
	'Турникеты-триподы T-5, фитнес-центр, Париж, Франция' => 'Франция',
	'Полноростовые турникеты RTD-15, футбольный клуб БАТЭ, стадион Борисов-Арена, Беларусь' => 'Беларусь',
	'Полноростовые турникеты RTD-15, футбольный клуб Сатурн, Раменское' => 'Россия',
	'Турникет-трипод с автоматическими планками «Антипаника» TTR-07 и ограждения с секцией «Антипаника» BH02, Управление Федерального Казначейства по Оренбургской области' => 'Россия',
	'Тумбовые турникеты TTD-03.1, Эврика, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1, Сбербанк, Москва' => 'Россия',
	'Электронные проходные KT-02 и ограждения BH02, ИФНС №25, Москва' => 'Россия',
	'Электронные проходные KT02 и ограждения BH02, школа, Владикавказ' => 'Россия',
	'Полноростовый турникет RTD-15, КПП завода ORENBEEF, Оренбург' => 'Россия',
	'Турникеты-триподы TTR-04.1, Спорткомплекс Алексеева, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04.1 и ограждения BH02, ФМИЦ Лазарева, Санкт-Петербург' => 'Россия',
	'Электронная проходная KT02 и ограждения BH02, БЦ Пионер, Санкт-Петербург' => 'Россия',
	'Тумбовый турникет ТВ01A, ограждения серии BH, бизнес-центр «Преображенский двор», Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02 и ограждения BH02, Школа, Фаниполь, Беларусь' => 'Беларусь',
	'Электронные проходные KT05 и автоматическая калитка WMD-06, БЦ Базель, Санкт-Петербург - 1' => 'Россия',
	'Электронные проходные KT05 и ограждения BH02, Ренессанс Правда, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1, Марокко' => 'Марокко',
	'Автоматическая калитка WMD-06 и роторный турникет RTD-03S, Аквапарк, Польковице, Польша' => 'Польша',
	'Тумбовае турникеты TTD-03.1, БЦ Саммит, Екатеринбург' => 'Россия',
	'Тумбовае турникеты TTD-03.1, БЦ Streamline Plaza, Москва' => 'Россия',
	'Роторные турникеты RTD-03S, Бизнес центр в Москве' => 'Россия',
	'Турникеты-триподы TTR-04.1, БЦ Yamskoe PLAZA, Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.2, БЦ Solutions Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.1 и автоматическая калитка WMD-05S, Кидбург, Москва' => 'Россия',
	'Тумбовые турникеты TB01A, региональный колледж, Питерборо, Кембриджшир, Великобритания' => 'Великобритания',
	'Автоматическая калитка WMD-05S, региональный колледж, Питерборо, Кембриджшир, Великобритания' => 'Великобритания',
	'Тумбовые турникеты-триподы TTD-03.2, бизнес центр Депо, Москва' => 'Россия',
	'Электронные проходные KTC01 в составе системы безопасности S-20, производственное предприятие "Северная заря", Санкт-Петербург' => 'Россия',
	'Электронные проходные KTC01 и калитка WMD-05 в составе системы безопасности S-20, производственное предприятие "Северная заря", Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02,бизнес-центр GOLF PALACE, Тюмень' => 'Россия',
	'Калитки WHD-04, БЦ «Престиж», Санкт-Петербург' => 'Россия',
	'Турникеты-триподы T-5, Фитнес Хаус на Коломяжском, Санкт-Петербург' => 'Россия',
	'Калитка WHD-05, морской порт, Санкт-Петербург' => 'Россия',
	'Полноростовый турникет RTD-15, компания SICPA, Италия' => 'Италия',
	'Электронные проходные KT02, калитки WMD-05S и ограждения BH02, центр олимпийской подготовки, Саранск' => 'Россия',
	'Тумбовые турникеты TB-01A, офис компании NewDay, Лидс, Англия' => 'Великобритания',
	'Электронная проходная KT02 и ограждения BH02, Исполнительный комитет Рыбно-Слободского муниципального района, Татарстан' => 'Россия',
	'Тумбовые турникеты TTD-03.1S и ограждения BH02, Префектура Центрального Административного округа, Москва' => 'Россия',
	'Тумбовые турникеты TBC01 и TTD-03.1S, автоматическая калитка WMD-05 и ограждения BH02, бизнес-центр «Водный», Москва' => 'Россия',
	'Тумбовые турникеты TB01, бизнес-центр, «Европа», Рязань' => 'Россия',
	'Турникет-трипод TTR-04CW, Метромост, Сараево' => 'Сараево',
	'Тумбовые турникеты TB01 и ограждения BH02, Новосибирский университет' => 'Россия',
	'Тумбовые турникеты TTD-03.1S и ограждения BH02, поликлиника, Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.2S и ограждения BH02, Сарапульский Электрогенераторный завод' => 'Россия',
	'Тумбовые турникеты TTD-03.1S и ограждения BH02, бизнес-центр «На Смоленке», Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1G и ограждения BH02, бизнес-центр «Owental History», Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1S и ограждения BH02, бизнес-центр «На Косой», Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TB01 и ограждения BH02, бизнес-центр «Прагма», Санкт-Петербург' => 'Россия',
	'Автоматические калитки WMD-05, ГрандМакетРоссия, Санкт-Петербург' => 'Россия',
	'Полноростовые турникет RTD-15 и калитка WHD-15, Селектел, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04.1, полноростовые ограждения MB-15 и калитка WHD-15, Санкт-Петербургский институт гостеприимства' => 'Россия',
	'Турникеты-триподы TTR-04.1 и ограждения BH02, Эрмитаж, Санкт-Петербург' => 'Россия',
	'Полноростовые турникеты RTD-15, стадион Kazan Arena, Казань' => 'Россия',
	'Роторный турникет RTD-03S, родильный дом №18, Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02, отдел полиции №9 УМВД России по Владивостоку на острове Русском' => 'Россия',
	'Скоростные проходы ST-01, бизнес-центр «CITYCENTER», Новосибирск' => 'Россия',
	'TTD-03.1, киностудия Russian World Studios, Санкт-Петербург' => 'Россия',
	'Калитка WMD-06 и тумбовый турникет TTD-03.2, фитнес-центр Megafit, Форбак, Франция' => 'Франция',
	'Полноростовый турникет RTD-15 и калитка WHD-15, фитнес-зал Gigagym, Париж' => 'Франция',
	'Роторные турникеты RTD-03 и ограждения BH02, группа Компаний СТАЛТ, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-07 и ограждения BH02, академия фигурного катания, Санкт-Петербург' => 'Россия',
	'Электронная проходная KT02, торгово-промышленная палата, Саранск, Мордовия' => 'Россия',
	'Электронный прходные KT02, Центр одаренных детей, Саранск, Мордовия' => 'Россия',
	'Калитки WHD-05G, таможенный пункт, Ивангород' => 'Россия',
	'Электронные проходные KTC01, бизнес-центр «Маяк Плаза», Кемерово' => 'Россия',
	'Автоматические калитки WMD-06, стойки-считыватели IRP01 и картоприемник IC02, бизнес-центр «Империал Парк», Москва' => 'Россия',
	'Полноростовый турникет RTD-15, порт Muuga, Таллинн' => 'Эстония',
	'Электронные проходные KT02, картоприемник IC02 и ограждения BH02, Администрация города Серпухов' => 'Россия',
	'Электронная проходная KT02, ТРК РИО Зоопарк, Санкт-Петрбург' => 'Россия',
	'Турникет-трипод T-5, ТРК РИО Зоопарк, Санкт-Петрбург' => 'Россия',
	'Турникет-трипод TTR-04, фитнес-клуб «Созвездие», Санкт-Петрбург' => 'Россия',
	'Тумбовый турникет TTD-03.1, музей Арктики и Антарктики, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы T-5, Планета ИГРиК, Екатеринбург' => 'Россия',
	'Калитка WMD-06, государственное учреждение, Глазго, Шотландия' => 'Великобритания',
	'Турникеты-триподы TTR-04.1 и картоприемник IC02, физкультурно-оздоровительный центр Tauras, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04.1, фитнес-клуб Tauras, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1 и калитка WMD-05, детский городок «Кидбург», Москва' => 'Россия',
	'Турникеты-триподы TTR-08A, фитнес-центр «Гравитация», Санкт Петербург' => 'Россия',
	'Скоростные проходы ST-01, Внешэкономбанк, Москва' => 'Россия',
	'Скоростные проходы ST-01, инновационный центр Сколково, Московская область - 2' => 'Россия',
	'Турникеты-триподы TTR-08A, торговый центр «GEDIMINO 9», Вильнюс, Литва' => 'Литва',
	'Турникеты-триподы T-5, общежитие СПБГПУ ИМОП, Санкт-Петербург' => 'Россия',
	'Роторные турникеты RTD-03S, СПБГПУ ИМОП, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-07A, бизнес-центр Castellana Forum, Богота, Колумбия' => 'Колумбия',
	'Турникет-трипод T-5 и ограждения BH02, фитнесс-студия, Германия' => 'Германия',
	'Тумбовые турникеты TB01, бизнес-центр «Мезон», Санкт-Петербург' => 'Россия',
	'Калитки WHD-05, городская Мариинская больница, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-04.1, образовательный центр «Сириус», Сочи' => 'Россия',
	'Скоростные проходы ST-01, офис компании Student Loans Company, Hillington, Шотландия' => 'Великобритания',
	'Скоростные проходы ST-01, бизнес-центр «Hadovka Office Park», Прага' => 'Чехия',
	'Скоростные проходы, офис холдинга «ПИК», Москва' => 'Россия',
	'Тумбовые турникеты TTD-08A, Университет общества южных Филиппин, Себу, Филиппины' => 'Филиппины',
	'Турникеты-триподы TTR-04CW, Алма-Атинский зоопарк' => 'Казахстан',
	'Электронная проходная KT02, библиотека Университета Порта-Харкорт, Нигерия' => 'Нигерия',
	'Тумбовые турникеты TTD-03S, Казахский национальный университет им. аль-Фараби' => 'Казахстан',
	'Тумбовые турникеты TBC01, бизнес-центр «Время», Нижний Новгород' => 'Россия',
	'Тумбовые турникеты TTD-03.2, офис компании «Яндекс», Москва' => 'Россия',
	'Роторные турникеты RTD-15, Центр трудовой миграции, Москва' => 'Россия',
	'Полноростовый турникет RTD-15, Университет Париж II – Пантеон-Ассас, Париж' => 'Франция',
	'Скоростные проходы ST-01, фитнес-клуб L\'Appart Fitness, Франция' => 'Франция',
	'Скоростные проходы ST-01, ВНИИНЕФТЕМАШ, Москва' => 'Россия',
	'Турникеты-триподы TTR-04.1, ВДНХ, Москва' => 'Россия',
	'Турникеты-триподы TTR-08A, Царское Село, Санкт-Петербург' => 'Россия',
	'Скоростные проходы ST-01, офис PERCo, Санкт-Петербург' => 'Россия',
	'Скоростные проходы ST-01, Экспофорум, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-15, Jacobi Carbons Philippines, Филиппины' => 'Филиппины',
	'Скоростной проход ST-01, спортивный клуб Ben Rietdijk Sport, Нидерланды' => 'Нидерланды',
	'Турникеты-триподы TTR-08A, офис компании Skynet, Санкт-Петербург' => 'Россия',
	'Турникет-трипод T-5, городская больница №20, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-08A и калитка WMD-06, Amec Foster Wheeler, Шарантон-ле-Пон, Франция - 2' => 'Франция',
	'Скоростные проходы ST-01, картоприемник IC02, ограждения BH02, Ленинградская областная клиническая больница' => 'Россия',
	'Скоростные проходы ST-01, Центр хирургии глаза им. Федорова, Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.1, Завод МАЗ, Минск, Беларусь' => 'Беларусь',
	'Тумбовые турникеты TTD-03.2, Минский тракторный завод, Беларусь' => 'Беларусь',
	'Тумбовые турникеты TTD-03.1 и калитки WHD-05, Красноярская ГЭС' => 'Россия',
	'Турникеты RTD-16 на футбольном стадионе Suwalki City Stadium, Польша' => 'Польша',
	'Автоматическая калитка WMD-06 в страховой компании APRIL PARTENAIRES, Франция' => 'Франция',
	'Полноростовые турникеты RTD-15, аэропорт, Алматы' => 'Казахстан',
	'Скоростные проходы ST-01 и калитки WMD-06, Назарбаев Университет, Астана' => 'Казахстан',
	'Калитка WMD-06, РЖД, Финляндский вокзал, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-15, ТЭЦ, Колпино' => 'Россия',
	'Роторный полноростовый турникет RTD-16.2, Министерство Экономики и Финансов, Уагадугу, Буркина-Фасо ' => 'Буркина-Фасо',
	' Турникеты-триподы TTR-08A, замок Шамбор, Луар и Шер, Франция' => 'Франция',
	'Скоростные проходы в составе системы S-20, Тимирязевская Академия, Москва' => 'Россия',
	'Автоматическая калитка WMD-06 и скоростной проход ST-01, бизнес-центр Сенатор, Санкт-Петербург' => 'Россия',
	'Тумбовый турникет-трипод TTD-03.2S, бизнес-центр ТехноЦентрПлаза, Ярославль' => 'Россия',
	'Полуростовый роторный турникет RTD-03S с формирователем прохода RB-03S, бизнес-центр SkyTrade, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-08A, бизнес-центр Невский, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты-триподы TB01.1, бизнес-центр Энерго, Москва' => 'Россия',
	'Тумбовые турникеты-триподы TB01.1, бизнес-центр Покровский, Минск, Беларусь' => 'Беларусь',
	'Скоростные проходы ST-01, Государственное автономное образовательное учреждение ДПО МЦКО, Москва' => 'Россия',
	'Тумбовый турникет-трипод TTD-03.1G, Национальный исследовательский технологический университет МИСиС, Москва' => 'Россия',
	'Тумбовые турникеты-триподы TB01.1, Российский Международный Олимпийский Университет, Сочи' => 'Россия',
	'Турникет-трипод TTR-04.1, Госучреждение, Санкт-Петербург' => 'Россия',
	'Тумбовый турникет-трипод TTD-03.1S, Центр трудовой миграции, Москва' => 'Россия',
	'Полноростовый роторный турникет RTD-15, Центр трудовой миграции, Москва' => 'Россия',
	'Автоматическая калитка WMD-06, Офис страховой компании, Франция' => 'Франция',
	'Скоростные проходы ST-01, Пушной аукцион, Дания' => 'Дания',
	'Полуростовый роторный турникет RTD-03S с формирователем прохода RB-03TP, Центральный офис строительной компании YIT, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-15, Завод Питерформ, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-16, Завод УАЗ, Ульяновск' => 'Россия',
	'Турникет-трипод TTR-04CW и ограждение полуростовое BH02, Завод Doowon, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-08A и полноростовое ограждение MB-15, Казаньоргсинтез, Казань' => 'Россия',
	'Ограждение полуростовое BH02, Гипермаркет спортивных товаров Декатлон, Санкт-Петербург' => 'Россия',
	'Электронная проходная KT02 и ограждение полуростовое BH02, Елизаветинская больница, Санкт-Петербург' => 'Россия',
	'Скоростной проход ST-01, ограждение полуростовое BH02 и стойка-считыватель IRP01, Ленинградская Областная Клиническая больница' => 'Россия',
	'Автоматическая калитка WMD-06, музей железных дорог России, Санкт-Петербург' => 'Россия',
	'Турникет-трипод T-5, Амфитеатр города Пула, Хорватия' => 'Хорватия',
	'Турникет-трипод TTR-04CW и ограждение полуростовое BH02, Батутный клуб 720, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-04CW, Дельфинарий парк Ривьера, Сочи' => 'Россия',
	'Турникет-трипод TTR-08A и ограждение полуростовое BH02, Екатерининский дворец, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-15, стадион Спартак, Москва' => 'Россия',
	'Полноростовый роторный турникет RTD-15, стадион Спартак, Москва - 02' => 'Россия',
	'Турникет-трипод TTR-08A, Фитнесс-центр TIRANA, Албания' => 'Албания',
	'Калитка автоматическая WMD-05, Аэропорт Пулково, Санкт-Петербург' => 'Россия',
	'Калитка полуавтоматическая WHD-05, Аэропорт Толмачёво, Новосибирск' => 'Россия',
	'Скоростные проходы ST-01, Аэропорт, Красноярск' => 'Россия',
	'Электронная проходная KT02, «Центр развития творчества детей и юношества «Созвездие», Калуга' => 'Россия',
	'Тумбовый турникет-трипод TTD-03., Бизнес-центр, Москва' => 'Россия',
	'Скоростной проход ST-01, Коворкинг IQ, Казахстан' => 'Казахстан',
	'Электронная проходная KT02, Лицей №20 города Актобе, Казахстан' => 'Казахстан',
	'Электронная проходная KT02, Лицей №1560, Москва' => 'Россия',
	'Тумбовый турникет-трипод TTD-03.1G, Университет Народного Хозяйства, Алматы' => 'Казахстан',
	'Тумбовый турникет-трипод TBC01, Челябинский государственный промышленно гуманитарный техникум' => 'Россия',
	'Турникет-трипод TTR-07, Школа Мастерград, Пермь' => 'Россия',
	'Турникет-трипод T-5, Школа №1, Красноуфимск' => 'Россия',
	'Электронная проходная KT02, Школа №12 города Актау, Казахстан' => 'Казахстан',
	'Тумбовый турникет-трипод TBC01 и калитка WMD-06, БЦ Баланс, Красноярск' => 'Россия',
	'Турникет-трипод TTR-04.1, Гимназия №16, Мытищи' => 'Россия',
	'Электронная проходная KT02, Школа №1298, Москва' => 'Россия',
	'Считыватель дальнего действия IR-10, Бизнес-центр Сенатор, Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04, ограждения серии BH, Бизнес-центр LOTOS, Алматы' => 'Казахстан',
	'Тумбовые турникеты ТB01, ограждения серии BH, Бизнес-центр PRIME Business Park, Алматы' => 'Казахстан',
	'Калитки WHD-06, считыватели IRP01 и ограждения серии BH, Бизнес-центр-Дубровка, Москва' => 'Россия',
	'Электронные проходные KTC01, бизнес-центр «Башня Запад», Красногорск' => 'Россия',
	'Скоростные проходы ST-01, Бизнес-центр Дубровка-Плаза, Москва' => 'Россия',
	'Электронные проходные KT02, ограждения серии BH, Бизнес-центр, Екатеринбург' => 'Россия',
	'Электронные проходные KT02, ограждения серии BH, бизнес-центр «Меридиан», Новокузнецк' => 'Россия',
	'Тумбовые турникеты TTD-03.1S, бизнес-центр «Площадь Мясникова», Беларусь' => 'Беларусь',
	'Тумбовые турникеты TBC01, ограждения серии BH, бизнес-центр «РАСТКОМ», Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.1S, бизнес-центр «ШТЕРН Эстейт», Москва' => 'Россия',
	'Тумбовые турникеты TBC01, ограждения серии BH, бизнес-центр Factory, Москва' => 'Россия',
	'Скоростные проходы ST-01, картоприемник IC05, бизнес-центр Green Yard, Санкт-Петербург' => 'Россия',
	'Электронные проходные KT05, бизнес-центр SP Hall, Украина' => 'Украина',
	'Скоростные проходы ST-01, бизнес-центр West East, Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.2S, бизнес-центр «Аквамарин», Москва' => 'Россия',
	'Скоростные проходы ST-01, бизнес-центр «Галерея 76», Москва' => 'Россия',
	'Электронные проходные KTС01, бизнес-центр «Высота», Москва' => 'Россия',
	'Тумбовые турникеты TTD-03.1S, ограждения BH, бизнес-центр, Екатеринбург' => 'Россия',
	'Тумбовые турникеты TBC01, бизнес-центр, Караганда' => 'Казахстан',
	'Роторные турникеты RTD-03S, калитки WMD-05S, бизнес-центр «Профсоюзная, 125», Москва' => 'Россия',
	'Скоростные проходы ST-01, ограждения серии BH, бизнес-центр «РГР», Москва' => 'Россия',
	'Скоростные проходы ST-01, бизнес-центр, Нижний Новгород' => 'Россия',
	'Скоростные проходы ST-01, бизнес-центр «Чайка Плаза», Москва' => 'Россия',
	'Электронные проходные TBC01, Минский тракторный завод, Беларусь' => 'Беларусь',
	'Полноростовые роторные турникеты RTD-20, полноростовая калитка WHD-16, завод «Мираторг», Санкт-Петербург' => 'Россия',
	'Электронные проходные KT05, ограждения серии BH, «Термотрон-Завод», Санкт-Петербург' => 'Россия',
	'Турникеты-триподы TTR-04.1, ограждения серии BH, спортивный комплекс «Арена Север», Красноярск' => 'Россия',
	'Электронная проходная KT02, ограждения серии BH, административное здание, Барнаул' => 'Россия',
	'Скоростные проходы ST-01, калитки WMD-06, административное здание, Приморский край' => 'Россия',
	'Полноростовые роторные турникеты RTD-16, ГКНПЦ имени М. В. Хруничева, Москва' => 'Россия',
	'Тумбовые турникеты TBC01, Железнодорожный районный суд, Улан-Удэ' => 'Россия',
	'Скоростные проходы ST-01, Московская государственная экспертиза, Москва' => 'Россия',
	'Электронные проходные KT02, ограждения серии BH, средняя школа, Москва' => 'Россия',
	'Скоростные проходы ST-01, инженерно-технологическая школа № 777, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-16, лицей физико-технической школы, Санкт-Петербург' => 'Россия',
	'Скоростные проходы ST-01, школа № 3, Самарская область' => 'Россия',
	'Скоростные проходы ST-01, школа № 3, Самарская область - 2' => 'Россия',
	'Электронные проходные KT02, ограждения серии BH, школа №210, Новосибирск' => 'Россия',
	'Электронные проходные KT02, школа, Полесск' => 'Россия',
	'Турникеты-триподы TTR-08А, Ингушский государственный университет, Назрань' => 'Россия',
	'Тумбовые турникеты TTD-03.2S, Дворец спорта МГСУ, Москва - 2' => 'Россия',
	'Скоростные проходы ST-01, Российская академия народного хозяйства, Москва' => 'Россия',
	'Калитки WHD-06, считыватели IRP01, ограждения серии BH, компания «ЕПК», Москва' => 'Россия',
	'Скоростной проход ST-01, калитка WHD-06, бассейновое водное управление, Марокко' => 'Марокко',
	'Тумбовый турникет TBC-01, калитка WMD-05S, компания «Технопарк Зеленоград», Зеленоград' => 'Россия',
	'Скоростные проходы ST-01, логистический центр COOP, Эстония' => 'Эстония',
	'Скоростные проходы ST-01, бизнес-центр, Латвия' => 'Латвия',
	'Скоростной проход ST-01, ограждения серии BH, Мариинская больница, Санкт-Петербург - 2' => 'Россия',
	'Скоростные проходы ST-01, сеть частных домов престарелых Belmont Village, Мексика' => 'Мексика',
	'Турникет-трипод TTR-07, Музей-сидра, Испания' => 'Испания',
	'Скоростные проходы ST-01, банк Goldman Sachs, Индия' => 'Индия',
	'Скоростные проходы ST-01, жилой комплекс Clever Park, Екатеринбург' => 'Россия',
	'Считыватель IR10, территория бизнес-центра, Санкт-Петербург' => 'Россия',
	'Скоростные проходы ST-01, жилой комплекс «Мосфильмовский», Москва' => 'Россия',
	'Скоростные проходы ST-01, Мексика' => 'Мексика',
	'Тумбовые турникеты TBC01, многофункциональный центр, Чебоксары' => 'Россия',
	'Тумбовые турникеты TTD-03.1S, бизнес-центр, Самара' => 'Россия',
	'Скоростные проходы ST-01 в составе системы безопасности S-20, Академия цифровых технологий, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-03.1 и калитки WMD-05S, офис RT, Москва' => 'Россия',
	'Скоростные проходы ST-01, Аэропорт Эрбиль, Ирак_170' => 'Ирак',
	'Турникеты-триподы T-5, Икеа, Чехия' => 'Чехия',
	'Скоростные проходы ST-01, кинотеатр Cinamon Kosmos, Эстония' => 'Эстония',
	'Cкоростные проходы ST-01, SBE France, Франция' => 'Франция',
	'Турникеты-триподы T-5, ограждения серии BH, бизнес-центр «Арена», Москва' => 'Россия',
	'Электронные проходные KT05, ограждения серии BH, автоматическая калитка WMD-05, школа, Краснодар' => 'Россия',
	'Полноростовый роторный турникет RTD-16, городская больница № 40 Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02, ограждения серии BH, автоматическая калитка WMD-05, завод Kastamonu, Татарстан' => 'Россия',
	'Полноростовый роторный турникет RTD-20, Завод ZF Friedrichshafen AG, Сербия' => 'Сербия',
	'Полноростовые роторные турникеты RTD-15, завод Caterpillar, Ленинградская область' => 'Россия',
	'Скоростные проходы ST-01, ограждения серии BH, картоприемник IC05, завод «Сигнал», Новосибирск' => 'Россия',
	'Полноростовый роторный турникет RTD-16, завод «Энергомаш» Калуга' => 'Россия',
	'Полноростовые роторные турникеты RTD-15, АО ВНИИЭМ, Москва' => 'Россия',
	'Скоростные проходы ST-01 с модулем распознавания лиц, АО Атомстройэкспорт, Нижний Новгород' => 'Россия',
	'Электронные проходные KT02 с алкотестерами, ЗАО «НПО Специальных материалов», Санкт-Петербург' => 'Россия',
	'Полуростовый роторный турникет RTD-03S, ОЭЗ «Санкт-Петербург», Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02 с алкотестерами, ГОК «Олений ручей», Мурманск' => 'Россия',
	'Скоростные проходы ST-01, кинотеатр Cinamon Mega, Латвия' => 'Латвия',
	'Полноростовый роторный турникет RTD-16, Смольный институт РАО, Санкт-Петербург' => 'Россия',
	'Электронные проходные KT02, киностудия «Союзмультфильм», Москва' => 'Россия',
	'Полноростовые роторные турникеты RTD-15, Текнос, Санкт-Петербург ' => 'Россия',
	'Турникеты-триподы TTR-08А, спортивный клуб Bodyfit, Греция' => 'Греция',
	'Тумбовые турникеты-триподы TBC01.1, турникет-трипод TTR-08А, автоматическая калитка WMD-06, Физкультурно-оздоровительный комплекс Газпрома, Армения' => 'Армения',
	'Скоростные проходы ST-01, Центр Fotografiska, Эстония' => 'Эстония',
	'Полноростовый роторный турникет RTD-15, стадион Фишт, Сочи' => 'Россия',
	'Скоростной проход ST02, НИПИ «Каспиймунайгаз», Казахстан' => 'Казахстан',
	'Скоростные проходы ST02, Аэропорт Внуково, Москва' => 'Россия',
	'Тумбовый турникет TTD-03.2S, ограждения BH02, каток ICE Park, Санкт-Петербург' => 'Россия',
	'Калитки WMD-06, детский игровой комплекс KABONK, Нидерланды' => 'Нидерланды',
	'Электронные проходные KT02, ограждения BH02, школа № 11, Видное' => 'Россия',
	'Электронные проходные KT02, ограждения BH02, школа № 155, Красноярск' => 'Россия',
	'Полноростовые роторные турникеты RTD-15, завод BSH, Санкт-Петербург' => 'Россия',
	'Полноростовые роторные турникеты RTD-16 и RTD-20, музей-заповедник Павловск, Санкт-Петербург' => 'Россия',
	'Полноростовый роторный турникет RTD-16, завод Trane, Франция' => 'Франция',
	'Полноростовый роторный турникет RTD-15, Винзавод, Новая Зеландия' => 'Новая Зеландия',
	'Скоростные проходы ST-01, фабрика по производству внутрисамолетных перегородок Safran, Франция' => 'Франция',
	'Скоростные проходы ST-01, автоматические калитки WMD-06, частный дом престарелых Belmont Village, Мексика' => 'Мексика',
	'Скоростные проходы ST-01, коворкинг SOK, Москва' => 'Россия',
	'Скоростные проходы ST-01, курорт Marassi, Египет' => 'Египет',
	'Скоростные проходы ST-01, школа «Южный город», Самара' => 'Россия',
	'Тумбовые турникеты TB01, автоматические калитки WMD-05S, ограждения BH02, школа № 66, Екатеринбург' => 'Россия',
	'Тумбовые турникеты TB01, фитнес центр Gigagym, Лилль Франция' => 'Франция',
	'Тумбовые турникеты TTD-08A, ограждения BH02, бассейн BALNEO, Франция' => 'Франция',
	'Тумбовые турникеты TTD-08A, автоматические калитки WMD-05S, Иезуитский университет ITESO, Мексика' => 'Мексика',
	'Тумбовые турникеты TTD-08A, зоологический сад Green Planet, ОАЭ' => 'ОАЭ',
	'Тумбовые турникеты TTD-08A, ЛЭТИ, Санкт-Петербург' => 'Россия',
	'Тумбовый турникет TTD-08А, парк развлечений «Дримвуд», Ялта' => 'Украина',
	'Тумбовые турникеты TTD-08A, Российский педагогический университет им. Герцена, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-08A, клуб «Фитнес-Арена 3000», Уфа' => 'Россия',
	'Тумбовые турникеты TTD-08A, футбольный стадион Karvina, Чехия' => 'Чехия',
	'Тумбовые турникеты TTD-03.2S, офис группы компаний «Яндекс Маркет», Москва' => 'Россия',
	'Турникеты-триподы TTR-04.1, ограждения BH02, офис компании Роснефть, Москва' => 'Россия',
	'Турникеты-триподы TTR-04.1, завод Wrigley, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-04CW, Лопатинский парк, Смоленск' => 'Россия',
	'Турникеты-триподы TTR-04.1, скоростные проходы ST-01, школа жилого комплекса Green City, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-08A, парк развлечений Parc du Futuroscope, Франция' => 'Франция',
	'Турникет-трипод TTR-08А, ограждения BH02, фитнес-клуб Like, Санкт-Петербург' => 'Россия',
	'Турникет-трипод TTR-08А, фитнес-клуб Lijfkracht, Нидерланды' => 'Нидерланды',
	'Автоматические калитки WMD-05S, жилой комплекс Green City, Санкт-Петербург' => 'Россия',
	'Скоростные проходы ST-01, автоматические калитки WMD-05S, картоприемник IC05, бизнес-центр Renaissance Fontanka, Санкт-Петербург' => 'Россия',
	'Тумбовые турникеты TTD-08А, ограждения BH02, проектный институт Газпрома, Воронеж' => 'Россия',
	'Турникеты-триподы TTR-04.1, бизнес-центр «Велка», Саратов' => 'Россия',
	'Скоростные проходы ST-01, бизнес-школа Emlyon, Франция' => 'Франция',
];

$ibId = 18;
$sId = 1777;
$i = 0;

if (!CModule::includeModule('iblock')) {
	echo '<div style="color: red;">Ошибка подключения модуля инфоблоков.</div>';
}

$dbItems = CIBlockElement::GetList(
	['DATE_CREATE' => 'ASC'],
	['IBLOCK_ID' => $ibId, 'SECTION_ID' => $sId, 'PROPERTY_COUNTRY' => false],
	false,
	false,
	['IBLOCK_ID', 'ID', 'SECTION_ID', 'NAME', 'CODE']
);

echo '<div style="font-size: 16px;">';
echo '<div style="color: darkgreen; font-size: 24px;">Всего элементов: <b>' . $dbItems->SelectedRowsCount() . '</b>.</div><br>';

while($item = $dbItems->GetNextElement()) {
	$i++;
	
	$fields = $item->GetFields();
	$props = $item->GetProperties();
	
	echo '<div style="color: grey;">' . $i . '. id: <b>' . $fields['ID'] . '</b>.</div>';
	echo '<div>Название (NAME): <b>' . $fields['NAME'] . '</b>.</div>';
	if (isset($countries[$fields['NAME']])) {
		echo '<div style="color: green;">Добавляемая страна: (COUNTRY): <b>' . $countries[$fields['NAME']] . '</b>.</div>';
		//var_dump(CIBlockElement::SetPropertyValuesEx($fields['ID'], 18, array('COUNTRY' => $countries[$fields['NAME']])));
	} else {
		echo '<div style="color: red;">Нет страны.</div>';
	}
	
	echo '<br>';
}

echo '</div>';

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");