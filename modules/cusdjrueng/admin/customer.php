<?php
$id = $nv_Request->get_int('id','get');
$loai = $nv_Request->get_int('checkbox','post', 0);
$full_name = $nv_Request->get_title('full_name','post','');
$company = $nv_Request->get_title('company','post');
$address = $nv_Request->get_string('address','post');
$mst = $nv_Request->get_title('mst','post');
$phone = $nv_Request->get_title('phone','post');
$email = $nv_Request->get_title('email','post');

if($nv_Request->get_title('save')==10)
{
	echo "LOAI:" . $loai ."</br>";
	echo "ho ten:" . $full_name ."</br>";
	echo "Cong ty:" . $company ."</br>";
	echo "Dia chi:" . $address ."</br>";
	echo "MST:" . $mst ."</br>";
	echo "So dien thoai:" . $phone ."</br>";
	echo "Email:" . $email ."</br>";
	
}


$xtpl = new XTemplate('customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme']
.'/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->parse('vidoco');
$contents = $xtpl->text('vidoco');

include(NV_ROOTDIR."/includes/header(.php)");
echo nv_admin_theme($contents);
include(NV_ROOTDIR."/includes/footer(.php)");
