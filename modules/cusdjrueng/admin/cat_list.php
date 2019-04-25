<?php

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');

$sql = "SELECT * FROM " .$db_config['prefix']. "_" . $module_data . "_cat ORDER BY id DESC";
$result = $db->query($sql);
$row = $result->fetchAll();

$xtpl = new XTemplate('cat_list.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);

foreach ($row as $data) {
	$data['url_edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=cat&id='.$data['id'];
	$data['url_del'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=del_cat&id='.$data['id'];
	$xtpl->assign('DATA', $data);
	$xtpl->parse('main.loop');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include(NV_ROOTDIR . "includes/header.php");
echo nv_admin_theme($contents);
include(NV_ROOTDIR . "/include/footer.php");
