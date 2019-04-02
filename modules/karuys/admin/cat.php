<?php

if (! defined('NV_ADMIN')) {
    die('Stop!!!');
}
//print_r($global_config);die;
$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$cat='category';
$xtpl->assign('CAT', $cat);
$i=8;
if($i>2)
 	$xtpl->parse('main.cat');

foreach ($allow_func as $func){ 
	$xtpl->assign('FUNC', $func);
	$xtpl->parse('main.func.cat');
	$xtpl->parse('main.func');
}
$xtpl->parse('main');
$contents = $xtpl->text('main');
 
include (NV_ROOTDIR . "/includes/header.php");
//echo $contents; -> echo text off class themes
//echo json_encode($contents); -> echo chuoi json width $contents is array
echo nv_admin_theme($contents); // echo themes admin ( header, menu, footer)
include (NV_ROOTDIR . "/includes/footer.php");