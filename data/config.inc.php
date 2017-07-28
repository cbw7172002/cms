<?php
/**
 * 数据库配置信息
 */
define('DB_HOST', '127.0.0.1'); //数据库服务器主机地址
define('DB_USER', 'root'); //数据库帐号
define('DB_PWD', 'root'); //数据库密码
define('DB_NAME', 'phpwechat'); //数据库名
define('DB_PRE', 'pw_'); //数据库表前缀，同一数据库安装多套phpWeChat时，请修改表前缀
define('DB_CHARSET', 'utf8'); //数据库字符集

/**
 * 创始人配置信息
 */
define('ADMIN_FOUNDERS', '1'); //网站创始人ID，多个ID逗号分隔
?>