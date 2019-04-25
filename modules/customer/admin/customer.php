<?php

<<<<<<< HEAD

=======
>>>>>>> 000b568cc8a7dd2d6f5de5f2482ad48d700b4396
$xtpl = new XTemplate('customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] 
. '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->parse('vidoco');
$contents = $xtpl->text('vidoco');

include (NV_ROOTER ."/includes/header(.php)");
echo nv_admin_theme($contents); 
include (NV_ROOTER . "/includes/footer.php");




