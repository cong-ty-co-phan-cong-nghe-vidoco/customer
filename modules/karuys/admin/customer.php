<?php


$xtpl = new XTemplate('customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] 
. '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->parse('vidoco');
$contents = $xtpl->text('main');

include (NV_ROOTER ."/includes/header(.php)");
echo nv_admin_theme($contents); 
include (NV_ROOTER . "/includes/footer.php");




