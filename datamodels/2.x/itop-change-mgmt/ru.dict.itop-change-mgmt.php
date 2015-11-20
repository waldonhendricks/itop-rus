<?php

/**
 * Локализация интерфейса Combodo iTop подготовлена сообществом iTop по-русски http://community.itop-itsm.ru.
 * 
 * @author   Vladimir Kunin <v.b.kunin@gmail.com>
 * @license   http://opensource.org/licenses/AGPL-3.0
 *
 * 
 * Инструкция по установке
 * 
 * Процесс установки заключается в замене имеющихся локализационных файлов полученными и последующем запуске процедуры обновления iTop для перекомпиляции кода.
 * 	1. Скопируйте с заменой два полученных файла из "itop-rus/dictionaries" в "путь/до/вашего/itop/dictionaries".
 * 	2. Скопируйте с заменой полученные файлы "itop-rus/datamodels/2.x/название-модуля/ru.dict.название-модуля.php" в "путь/до/вашего/itop/datamodels/2.x/название-модуля".
 *  3. Перейдите по адресу "http://адрес/вашего/itop/setup", при этом файл "путь/до/вашего/itop/conf/production/config-itop.php" должен быть доступен для записи.
 *  4. На второй странице установщика выберите "Upgrade an existing iTop instance" и следуйте дальнейшим инструкциям установщика.
 *
 * Ответы на вопросы по установке и использованию переводов, а также на любые другие вопросы по iTop всегда можно получить на сайте сообщества iTop по-русски http://community.itop-itsm.ru.
 *
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:ChangeManagement' => 'Управление изменениями',
	'Menu:Change:Overview' => 'Обзор',
	'Menu:Change:Overview+' => 'Управление изменениями - Обзор',
	'Menu:NewChange' => 'Новый запрос на изменение',
	'Menu:NewChange+' => 'Создание нового запроса на изменение',
	'Menu:SearchChanges' => 'Поиск изменений',
	'Menu:SearchChanges+' => 'Поиск запросов на изменения',
	'Menu:Change:Shortcuts' => 'Ярлыки',
	'Menu:Change:Shortcuts+' => 'Ярлыки',
	'Menu:WaitingAcceptance' => 'Изменения, ожидающие принятия',
	'Menu:WaitingAcceptance+' => 'Изменения, ожидающие принятия',
	'Menu:WaitingApproval' => 'Изменения, ожидающие утверждения',
	'Menu:WaitingApproval+' => 'Изменения, ожидающие утверждения',
	'Menu:Changes' => 'Открытые изменения',
	'Menu:Changes+' => 'Открытые изменения',
	'Menu:MyChanges' => 'Изменения, назначенные мне',
	'Menu:MyChanges+' => 'Изменения, назначенные мне',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => 'Изменения по категориям за 7 дней',
	'UI-ChangeManagementOverview-Last-7-days' => 'Количество изменений за 7 дней',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => 'Изменения по домену за 7 дней',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => 'Изменения по статусу за 7 дней',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


//
// Class: Change
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Change' => 'Изменение',
	'Class:Change+' => '',
	'Class:Change/Attribute:status' => 'Статус',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:new' => 'Новый',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:assigned' => 'Назначен',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:planned' => 'Запланировано',
	'Class:Change/Attribute:status/Value:planned+' => '',
	'Class:Change/Attribute:status/Value:rejected' => 'Отклонён',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:approved' => 'Утверждён',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:closed' => 'Закрыт',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:category' => 'Категория',
	'Class:Change/Attribute:category+' => '',
	'Class:Change/Attribute:category/Value:application' => 'Приложение',
	'Class:Change/Attribute:category/Value:application+' => 'приложение',
	'Class:Change/Attribute:category/Value:hardware' => 'Железо',
	'Class:Change/Attribute:category/Value:hardware+' => 'аппаратное обеспечение',
	'Class:Change/Attribute:category/Value:network' => 'Сеть',
	'Class:Change/Attribute:category/Value:network+' => 'сеть',
	'Class:Change/Attribute:category/Value:other' => 'Другое',
	'Class:Change/Attribute:category/Value:other+' => 'другое',
	'Class:Change/Attribute:category/Value:software' => 'ПО',
	'Class:Change/Attribute:category/Value:software+' => 'программное обеспечение',
	'Class:Change/Attribute:category/Value:system' => 'Система',
	'Class:Change/Attribute:category/Value:system+' => 'система',
	'Class:Change/Attribute:reject_reason' => 'Причина отклонения',
	'Class:Change/Attribute:reject_reason+' => '',
	'Class:Change/Attribute:changemanager_id' => 'Менеджер изменения',
	'Class:Change/Attribute:changemanager_id+' => '',
	'Class:Change/Attribute:changemanager_email' => 'Email менеджера',
	'Class:Change/Attribute:changemanager_email+' => '',
	'Class:Change/Attribute:parent_id' => 'Родительское изменение',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_name' => 'Имя родительского изменения',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:creation_date' => 'Создан',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:approval_date' => 'Утверждение',
	'Class:Change/Attribute:approval_date+' => '',
	'Class:Change/Attribute:fallback_plan' => 'План отката',
	'Class:Change/Attribute:fallback_plan+' => '',
	'Class:Change/Attribute:related_request_list' => 'Связанные запросы',
	'Class:Change/Attribute:related_request_list+' => 'Связанные запросы',
	'Class:Change/Attribute:related_incident_list' => 'Связанные инциденты',
	'Class:Change/Attribute:related_incident_list+' => 'Связанные инциденты',
	'Class:Change/Attribute:related_problems_list' => 'Связанные проблемы',
	'Class:Change/Attribute:related_problems_list+' => 'Связанные проблемы',
	'Class:Change/Attribute:child_changes_list' => 'Дочерние изменения',
	'Class:Change/Attribute:child_changes_list+' => 'Дочерние изменения',
	'Class:Change/Attribute:parent_id_friendlyname' => 'Родительское изменение',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Stimulus:ev_assign' => 'Назначить',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_plan' => 'Планировать',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_reject' => 'Отклонить',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_reopen' => 'Вновь открыть',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_approve' => 'Утвердить',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_finish' => 'Закончить',
	'Class:Change/Stimulus:ev_finish+' => '',
));

?>
