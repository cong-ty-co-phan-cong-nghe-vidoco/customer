<?php
if (!defined('NV_IS_MOD_CUS'))
    die('Stop!!!');
function theme_main(){
	global $global_config, $modules_file, $lang_module, $lang_global;
	$xtpl = new XTemplate('main.tpl', NV_ROOTDIR .'/themes/'.$global_config['site_theme'] .'/modules/' . $modules_file);
	$xtpl->assign('LANG',$lang_module);
	$xtpl->assign('GLANG', $lang_global);
	
	$xtpl->parse('main');
	return $xtpl->text('main');
}
