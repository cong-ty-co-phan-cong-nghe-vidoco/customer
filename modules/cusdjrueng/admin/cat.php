<?php

if (!define('NV_ADMIN')){
	die('stop!!!');
}

$row['id'] = $nv_Request->get_int('id','get',0);
$savecat = $nv_Request->get_int('save','post',0);
if($savecat){
	$row['title'] = $nv_Request->get_int('title','post','');
	$row['alias'] = $nv_Request->get_string('alias','post','');
	$row['catid'] = $nv_Request->get_id('alias','post','');
	$error = "";
	if(empty($row['title'])){
		$error = $lang_module['title_error'];
	}elseif(empty($row['alias'])){
		$error = $lang_module['alias_error'];
	}
	if(!empty($error)){
		if($row['id']==0){
			try{
				$sql = 'INSERT INTO' .$db_config['prefix']."_" .$module_data 
				.'_cat(title,alias,catid) VALUES(:title,:alias,'.$row['catid'].')';
				$data_insert = $array();
				$data_insert['title'] = $row['title'];
				$data_insert['alias'] = $row['alias'];
				$newcatid = $db->insert_id($sql,'id',$data_insert);
			}catch(PDOException $e){
				trigger_error($e->getMessage());
			}
				if($newcatid>0){
					nv_insert_logs(NV_LANG_DATA, $module_name, $lang_module['add_cat'], $row['title'], $admin_info['userid']);
				}
		}else{
			$sql = 'UPDATE ' . $db_config['prefix'] . "_" . $module_data . '_cat SET title=:title, alias=:alias, parentid=:catid WHERE id = '. $row['id'];
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':title', $row['title'], PDO::PARAM_STR);
			
		}
		
	
	
}
}
$xtpl = new XTemplete('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] 
. '/modules' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$cat = 'category';
$xtpl->assign('CAT', $cat);
$i = 8;
if($i>2)
	$xtpl->parse('main.cat');
foreach ($allow_func as $func) {
	$xtpl->assign('FUNC', $func);
	$xtpl->parse('main.func.cat');
	$xtpl->parse('main.func');
}
$xtpl->parse('main');
$contents = $xtpl->text('main');

include (NV_ROOTDIR . "/includes/header.php");
echo nv_admin_theme($contents);
include (NV_ROOTDIR ."/includes/footer.php");

