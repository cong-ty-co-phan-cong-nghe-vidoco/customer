<?php
$id = $nv_Request->get_int('id','get');

if($id){
	$row = $db->query("SELECT * FROM " . $db_config['prefix'] . "_" .$module_data . " WHERE id = " .$id)->fetch();
}

$loai = $nv_Request->get_int('checkbox','post', 0);
$full_name = $nv_Request->get_title('full_name','post','');
$company = $nv_Request->get_title('company','post');
$address = $nv_Request->get_string('address','post');
$mst = $nv_Request->get_title('mst','post');
$phone = $nv_Request->get_title('phone','post');
$email = $nv_Request->get_title('email','post');

if($nv_Request->get_title('save')==10)
{
	/*echo "LOAI:" . $loai ."</br>";
	echo "ho ten:" . $full_name ."</br>";
	echo "Cong ty:" . $company ."</br>";
	echo "Dia chi:" . $address ."</br>";
	echo "MST:" . $mst ."</br>";
	echo "So dien thoai:" . $phone ."</br>";
	echo "Email:" . $email ."</br>";
	die;*/
	if($id){

	}else{
		try{

			$sql = 'INSERT INTO '. $db_config['prefix']."_".$module_data.'(typeid,title,company,tax,address) values(:typeid,:title,:company,:tax,:address)';
			
			$data_insert = array();
			$data_insert['typeid'] = $loai;
			$data_insert['title'] = $full_name;
			$data_insert['company'] = $company;
			$data_insert['tax'] = $mst;
			$data_insert['address'] = $address;
			$newcatid = $db->insert_id($sql, 'id', $data_insert);
		}catch (PDOException $e) {
                trigger_error($e->getMessage());
				
            }

		if($newcatid>0){
				nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['customer_add'], $full_name, $admin_info['userid']);
			}

	}
}


$xtpl = new XTemplate('customer.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme']
.'/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('ROW', $row);
$xtpl->parse('vidoco');
$contents = $xtpl->text('vidoco');

include(NV_ROOTDIR."/includes/header(.php)");
echo nv_admin_theme($contents);
include(NV_ROOTDIR."/includes/footer(.php)");
