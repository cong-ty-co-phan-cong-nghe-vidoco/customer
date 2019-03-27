<?php

if (! defined('NV_IS_MOD_CUS')) {
    die('Stop!!!');
}


function theme_main($data,$op){
	global $global_config,$module_file,$lang_module,$lang_global;
	$xtpl = new XTemplate($op.'.tpl', NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/modules/' . $module_file);
	$xtpl->assign('LANG', $lang_module);
	$xtpl->assign('GLANG', $lang_global);
	 
	$xtpl->parse('main');
	return $xtpl->text('main');
}
