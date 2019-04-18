 <?php
 
 if (!defined('NV_MAINFILE')){
 	die('stop!!!');
 }
 
 
 $allow_func = array();
 	$allow_func[] = "main";
 	$allow_func[] = "cat";
	$allow_func[] = "customer";
	$allow_func[] = "ajax";
	$allow_func[] = "cat_list";
	$allow_func[] = "del_cat";

$global_array_cat = array();
$sql = 'SELECT * FROM ' .$db_config['prefix']. '_' .$module_data . '_cat ORDER By id ASC';
$result = $db->query($sql);

while ($row = $result->fetch()) {
	$global_array_cat[$row['id']] = $row;
}
	
