<?php
if (! defined('NV_ADMIN')) {
    die('Stop!!!');
}
$page_title = $lang_module['main_cat'];


$row['id'] = $nv_Request->get_int('id','get', 0);
$savecat=$nv_Request->get_int('save','post', 0);
if($savecat){
	$row['title']=$nv_Request->get_title('title','post', '');
	$row['alias']=$nv_Request->get_string('alias','post', '');
	$row['catid']=$nv_Request->get_int('catid','post', 0);
	$error = '';
	if(empty($row['title'])){
		$error = $lang_module['title_error'];
	}elseif(empty($row['alias'])){
		$error = $lang_module['alias_error'];
	}
	
	if(empty($error)){
		
		if($row['id']==0){
			try{
				$sql = 'INSERT INTO ' . $db_config['prefix'] . "_" . $module_data . '_cat (title,alias,parentid) VALUES(:title, :alias, ' . $row['catid'] . ')';
				$data_insert = array();
				$data_insert['title'] = $row['title'];
				$data_insert['alias'] = $row['alias'];
				$newcatid = $db->insert_id($sql, 'id', $data_insert);
			}catch (PDOException $e) {
                trigger_error($e->getMessage());
				
            }
			
			
			if($newcatid>0){
				nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['add_cat'], $row['title'], $admin_info['userid']);
			}
		}else{
			$sql = 'UPDATE ' . $db_config['prefix'] . "_" . $module_data . '_cat SET title=:title, alias=:alias, parentid=:catid WHERE id = '. $row['id'];
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':title', $row['title'], PDO::PARAM_STR);
			$stmt->bindParam(':alias', $row['alias'], PDO::PARAM_STR);
			$stmt->bindParam(':catid', $row['catid'], PDO::PARAM_INT);
			if($stmt->execute()){
				nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['edit_cat'], $row['title'], $admin_info['userid']);
			
			}
		}
		
		nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=cat_list' );
		
	}
	
}elseif($row['id']>0){
	$row = $db->query("SELECT * FROM " . $db_config['prefix'] . "_" .$module_data . "_cat WHERE id = " .$row['id'])->fetch();
}

$xtpl = new XTemplate('cat.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('ROW', $row);
if (!empty($error)) {
    $xtpl->assign('ERROR', $error);
    $xtpl->parse('main.error');
}

foreach ($global_array_cat as $catid => $cat) {
	$cat['selected'] = ($row['parentid'] == $cat['id']) ? 'selected="selected"' : "";
	$xtpl->assign('CAT', $cat);
	$xtpl->parse('main.cat');
}


$xtpl->parse('main');
$contents = $xtpl->text('main');
 
include (NV_ROOTDIR . "/includes/header.php");

echo nv_admin_theme($contents); 
include (NV_ROOTDIR . "/includes/footer.php");