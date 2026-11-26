<?php
$dictionary=array(
'OPENHASP_BRIDGE_ENDPOINT'=>'Адреса API',
'OPENHASP_BRIDGE_METHOD'=>'HTTP-метод',
'OPENHASP_BRIDGE_TOKEN'=>'Токен доступу',
'OPENHASP_BRIDGE_REGION'=>'Регіон / маршрут',
'OPENHASP_BRIDGE_TRACKING'=>'Номер відправлення',
'OPENHASP_BRIDGE_PAYLOAD'=>'Шаблон POST-запиту',
'OPENHASP_BRIDGE_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'OPENHASP_BRIDGE_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}