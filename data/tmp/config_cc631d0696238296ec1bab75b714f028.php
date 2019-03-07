<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2019 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 04 Mar 2019 08:26:04 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) )
{
	die( 'Stop!!!' );
}

$db_config['dbhost'] = '127.0.0.1';
$db_config['dbport'] = '';
$db_config['dbname'] = 'nukeviet';
$db_config['dbsystem'] = 'nukeviet';
$db_config['dbuname'] = 'root';
$db_config['dbpass'] = '';
$db_config['dbtype'] = 'mysql';
$db_config['collation'] = 'utf8mb4_unicode_ci';
$db_config['charset'] = 'utf8mb4';
$db_config['persistent'] = false;
$db_config['prefix'] = 'nv4';

$global_config['site_domain'] = '';
$global_config['name_show'] = 0;
$global_config['idsite'] = 0;
$global_config['sitekey'] = '8a0c7f24f3db4304c53dfe8bfb326f1d';// Do not change sitekey!
$global_config['hashprefix'] = '{SSHA512}';
$global_config['cached'] = 'files';
$global_config['session_handler'] = 'files';
$global_config['extension_setup'] = 3; // 0: No, 1: Upload, 2: NukeViet Store, 3: Upload + NukeViet Store
$global_config['cookie_prefix'] = 'nv4c_j1PNJ';
$global_config['session_prefix'] = 'nv4s_w3bTC6';

$global_config['ftp_server'] = 'localhost';
$global_config['ftp_port'] = '21';
$global_config['ftp_user_name'] = '';
$global_config['ftp_user_pass'] = '';
$global_config['ftp_path'] = '/';
$global_config['ftp_check_login'] = '0';