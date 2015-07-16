<?php
// Zabbix GUI configuration file.
global $DB;

$DB["TYPE"]             = 'MYSQL';
$DB["SERVER"]           = $_ENV["MYSQL_HOST"];
$DB["PORT"]             = '3306';
$DB["DATABASE"]         = 'zabbix';
$DB["USER"]             = $_ENV["MYSQL_USER"];
$DB["PASSWORD"]         = $_ENV["MYSQL_PASSWORD"];
// Schema name. Used for IBM DB2 and PostgreSQL.
$DB["SCHEMA"]           = '';

$ZBX_SERVER             = 'oso-centos7-zabbix-server';
$ZBX_SERVER_PORT        = '10051';
$ZBX_SERVER_NAME        = '';

$IMAGE_FORMAT_DEFAULT   = IMAGE_FORMAT_PNG;
?>

