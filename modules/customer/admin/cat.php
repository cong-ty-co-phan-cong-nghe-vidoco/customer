<?php

if (! defined('NV_ADMIN')) {
    die('Stop!!!');
}
//print_r($global_config);die;
$xtpl = new XTemplate('cat.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);

$xtpl->parse('vidoco');
$contents = $xtpl->text('vidoco');
 
include (NV_ROOTDIR . "/includes/header.php");
//echo $contents; -> echo text off class themes
//echo json_encode($contents); -> echo chuoi json width $contents is array
echo nv_admin_theme($contents); // echo themes admin ( header, menu, footer)
include (NV_ROOTDIR . "/includes/footer.php");