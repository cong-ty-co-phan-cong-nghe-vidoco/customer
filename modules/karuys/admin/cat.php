<?php

if (! defined('NV_ADMIN')) {
    die('Stop!!!');
}
$row['id']=$nv_Request->get_int('id','get', 0);
$savecat=$nv_Request->get_int('Save','post', 0);
if($savecat){
	$row['title']=$nv_Request->get_title('title','post', "");
	$row['alias']=$nv_Request->get_string('alias','post', "");
	$row['catid']=$nv_Request->get_id('catid','post', "");
	if(empty($row['title'])){
		$error=$lang_module['title_error'];
	}elseif(empty($row['alias'])){
		$error=$lang_module['alias_error'];
	}
	if(!empty($error)){
		if($row['id']==0){
			$sql='INSERT INTO' .$db_config['prefix'] . "_" . $module_data .'_cat (title,alias,catid) VALUES(:title, :alias, '.$row['catid'].');
		}else{
			$sql='UPDATE' .$db_config['prefix'] . "_" . $module_data .'_cat SET title=:title, alias=:alias, catid='.$error'['catid'] . 'WHERE id = '.$row['id'];
					
		}
	}
}
//pr'int_r($global_config);die;
$xtpl = new XTemplate('cat.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);

$xtpl->parse('main');
$contents = $xtpl->text('main');
 
include (NV_ROOTDIR . "/includes/header.php");
//echo $contents; -> echo text off class themes
//echo json_encode($contents); -> echo chuoi json width $contents is array
echo nv_admin_theme($contents); // echo themes admin ( header, menu, footer)
include (NV_ROOTDIR . "/includes/footer.php");