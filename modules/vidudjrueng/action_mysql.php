<?php

$sql_drop_module=array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_group"; // lệnh xóa bản cũ

$sql_create_module = $sql_drop_module; //$sql_create_module -> lệnh quan trọng

$sql_create_module[] = "CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $module_data . " (
  id int(11) NOT NULL,
  groupid int(11) NOT NULL DEFAULT '0',
  typeid int(4) NOT NULL DEFAULT '0',
  title varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  company varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  taxcode varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  address varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  provinceid int(11) NOT NULL DEFAULT '0',
  districtid int(11) NOT NULL DEFAULT '0',
  wardid int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB";

$sql_create_module[] = "CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $module_data . "_group (
  id int(11) NOT NULL AUTO_INCREMENT,
  titlegroup varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  alias varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  parentid int(11) NOT NULL DEFAULT '0',
  level int(5) NOT NULL DEFAULT '0',
  sort int(11) NOT NULL DEFAULT '0',
  weight int(11) NOT NULL DEFAULT '0',
  addtime int(11) NOT NULL DEFAULT '0',
  edittime int(11) NOT NULL DEFAULT '0',
  adminid int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id) USING BTREE
) ENGINE=InnoDB";
