<?php
if(!define('NV_IS_MOD_CUS')){
	die('stop!!!');
}
$xtpl = new XTemplate('main.tpl', VN_ROOTIR . '/themes' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->parse('vidoco');
$contents = $xtpl->text('vidoco');

include (NV_ROOTER ."/includes/header(.php)");
echo nv_admin_theme($contents);
include (NV_ROOTER . "/includes/footer.php");




