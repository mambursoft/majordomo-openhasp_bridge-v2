<?php
$dictionary=array(
'OPENHASP_BRIDGE_ENDPOINT'=>'Адрес API',
'OPENHASP_BRIDGE_METHOD'=>'HTTP-метод',
'OPENHASP_BRIDGE_TOKEN'=>'Токен доступа',
'OPENHASP_BRIDGE_REGION'=>'Регион / маршрут',
'OPENHASP_BRIDGE_TRACKING'=>'Номер отправления',
'OPENHASP_BRIDGE_PAYLOAD'=>'Шаблон POST-запроса',
'OPENHASP_BRIDGE_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'OPENHASP_BRIDGE_LAST'=>'Последний результат',
'OPENHASP_BRIDGE_DEVICE_NAME'=>'Имя устройства openHASP',
'OPENHASP_BRIDGE_OBJECT_ID'=>'ID объекта панели',
'OPENHASP_BRIDGE_PROPERTY'=>'Свойство',
'OPENHASP_BRIDGE_PAGE'=>'ID страницы',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}