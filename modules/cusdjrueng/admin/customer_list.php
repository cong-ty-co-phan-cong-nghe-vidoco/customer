<?php
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');

$xtpl = new XTemplate('customer_list.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);

$xtpl->parse('main');
$contents = $xtpl->text('main');

include(NV_ROOTDIR . "includes/header.php");
echo nv_admin_theme($contents);
include(NV_ROOTDIR . "/include/footer.php");