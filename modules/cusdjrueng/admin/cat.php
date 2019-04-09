<?php

if (!define('NV_ADMIN')){
	die('stop!!!');
}
$xtpl = new XTemplete('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] 
. '/modules' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$cat = 'category';
$xtpl->assign('CAT', $cat);
$i = 8;
if($i>2)
	$xtpl->parse('main.cat');
foreach ($allow_func as $func) {
	$xtpl->assign('FUNC', $func);
	$xtpl->parse('main.func.cat');
	$xtpl->parse('main.func');
}
$xtpl->parse('main');
$contents = $xtpl->text('main');

include (NV_ROOTDIR . "/includes/header.php");
echo nv_admin_theme($contents);
include (NV_ROOTDIR ."/includes/footer.php");

