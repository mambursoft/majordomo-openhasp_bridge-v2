<?php
$dictionary=array(
'OPENHASP_BRIDGE_ENDPOINT'=>'API endpoint',
'OPENHASP_BRIDGE_METHOD'=>'HTTP method',
'OPENHASP_BRIDGE_TOKEN'=>'Access token',
'OPENHASP_BRIDGE_REGION'=>'Region / route',
'OPENHASP_BRIDGE_TRACKING'=>'Tracking number',
'OPENHASP_BRIDGE_PAYLOAD'=>'POST payload template',
'OPENHASP_BRIDGE_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'OPENHASP_BRIDGE_LAST'=>'Last result',
'OPENHASP_BRIDGE_DEVICE_NAME'=>'openHASP device name',
'OPENHASP_BRIDGE_OBJECT_ID'=>'Object ID',
'OPENHASP_BRIDGE_PROPERTY'=>'Property',
'OPENHASP_BRIDGE_PAGE'=>'Page ID',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}