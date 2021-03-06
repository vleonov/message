<?php

define('ROOT_DIR', realpath(dirname(__FILE__) . '/../'));
define('WWW_DIR', ROOT_DIR . '/www');
define('WWW_TMP_DIR', ROOT_DIR . '/www/tmp');
define('TMP_URL', 'tmp');
define('ETC_DIR', ROOT_DIR . '/etc');
define('LIB_DIR', ROOT_DIR . '/lib');
define('VAR_DIR', ROOT_DIR . '/var');
define('VAR_TMP_DIR', ROOT_DIR . '/var/tmp');

define('PROJECT_DOMAIN', 'miphoto');
define('PROJECT_HOST', 'http://' . PROJECT_DOMAIN);
define('DOMAIN', 1);


// автозагрузчик классов
spl_autoload_register('autoload');

require_once ROOT_DIR . '/lib/Request.php';
require_once ROOT_DIR . '/lib/Response.php';
require_once ROOT_DIR . '/lib/Session.php';
require_once ROOT_DIR . '/lib/Config.php';

function autoload($className)
{
    $replaces = array(
        'C_' => 'Controller_',
        'M_' => 'Model_',
        'L_' => 'ModelList_',
        'U_' => 'Util_',
    );
    foreach ($replaces as $from=>$to) {
        $className = preg_replace('/^' . $from . '/', $to, $className);
    }

    $file_name = ROOT_DIR . '/lib/' . str_replace('_', '/', $className) . '.php';

    if (file_exists($file_name)) {
        require_once $file_name;
    }
}