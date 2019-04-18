<?php

if(! define('NV_ADMIN')){
	die('Stop!!!');
}
$xtpl = new XTemplate('cat.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('LANG', $lang_global);
foreach ($global_array_cat as $catid => $cat) {
	$cat['linkedit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' .NV_LANG_DATA . '&' . NV_NAME_VARIABLE .'=' .$module_data . '&' . NV_OP_VARIABLE . '=cat&id=' .$cat['id'];
	$cat['linkdelete'] = NV_BASE_ADMINURL . 'index.php?' .NV_LANG_VARIABLE . '=' .NV_LANG_DATA .'&' .NV_NAME_VARIABLE .'=' .$module_data . '&' .NV_OP_VARIABLE . '=del_cat&id=' .$cat['id'];
	$xtpl->assign('CAT', $cat);
	
	$xtpl->parse('main.view.cat');
}

$xtpl->parse('main.view');
if(!empty($error)){
	$xtpl->assign('ERROR', $error);
	$xtpl->parse('main.error');
}
$xtpl->parse('main');
$contents = $xtpl->text('main');

include(NV_ROOTDIR . "includes/header.php");
echo nv_admin_theme($contents);
include(NV_ROOTDIR . "/include/footer.php");
