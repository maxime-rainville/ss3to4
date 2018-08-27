<?php
/* What kind of environment is this: development, test, or live (ie, production)? */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* Database connection */
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_NAME', 'ss3to4');

//define('SS_DATABASE_CLASS', 'MySQLPDODatabase');
//define('SS_DATABASE_USERNAME', 'root');
//define('SS_DATABASE_PASSWORD', '');

define('SS_DATABASE_CLASS', 'PostgreSQLDatabase');
define('SS_DATABASE_USERNAME', 'silverstripe');
define('SS_DATABASE_PASSWORD', 'admin');

/* Configure a default username and password to access the CMS on all sites in this environment. */
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['/home/maxime/Projects/ss3to4'] = 'http://ss3to4.max.silverstripe.com';
