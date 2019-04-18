<?php


$row['id'] = $nv_Request->get_int('id','get',0);
if($row['id']>0){
	$db->query("DELETE FROM " .$db_config['prefix']. "_" .$module_data . "_cat WHERE id= " .$row['id']);
	nv_redirect_location(NV_BASE_ADMINURL .'index.php?' .NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' .NV_NAME_VARIABLE . '=' .$modules_name . '&' . NV_OP_VARIBLE . '=cat_list');
}
