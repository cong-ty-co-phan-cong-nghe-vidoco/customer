<?php

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_cat";
$sql_create_module = $sql_drop_module;

$sql_create_module[] = "CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $module_data . " (
	id int(11) NOT NULL AUTO_INCREMENT,
	groupid int(11) NOT NULL DEFAULT '0',
	typeid tinyint(4) NOT NULL DEFAULT '0',
	title varchar(250)  NOT NULL DEFAULT '',
	company varchar(250)  NOT NULL DEFAULT '',
	tax varchar(30)  NOT NULL DEFAULT '',
	address varchar(250)  NOT NULL DEFAULT '',
	provinceid int(11) NOT NULL DEFAULT '0',
	districtid int(11) NOT NULL DEFAULT '0',
	wardid int(11) NOT NULL DEFAULT '0',
	PRIMARY KEY(id)
)ENGINE = InnoDB";

$sql_create_module[] = "CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $module_data . "_cat (
	id int(11) NOT NULL AUTO_INCREMENT,
	parentid int(11) NOT NULL DEFAULT '0',
	title varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	alias varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
	PRIMARY KEY(id)
)ENGINE = InnoDB";
