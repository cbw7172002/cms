<?php
define('IN_DEBUG',false);
define('IN_LOG',true);
!IN_DEBUG?error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING):error_reporting (E_ALL);
header("Content-type:text/html;charset=utf-8");
//定义路径绝对路径‘/Applications/XAMPP/xamppfiles/htdocs/’
if(!defined('SYS_ROOT'))
{
  define('SYS_ROOT', str_replace("\\", '/', substr(dirname(__FILE__), 0, -7)));
}
//定义常量
define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
define('CLIENT_TIME',time());

//不懂
set_time_limit(0);
ini_set('magic_quotes_runtime',0);
unset($HTTP_RAW_POST_DATA, $HTTP_ENV_VARS, $HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_POST_FILES, $HTTP_COOKIE_VARS);

//加载配置信息
include_once PW_ROOT.'data/config.inc.php';
include_once PW_ROOT.'data/version.php';


?>