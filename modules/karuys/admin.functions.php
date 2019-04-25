<?php
if (! defined('NV_MAINFILE') ) {
    die('Stop!!!');
}
$allow_func =array();
	$allow_func[]="main"; 
	$allow_func[]="cat"; 
	$allow_func[]="customer"; 
	$allow_func[]="ajax"; 
	$allow_func[]="cat_list"; 
	$allow_func[]="del_cat"; 
	
<<<<<<< HEAD

=======
	

	$global_array_cat = array();
$sql = 'SELECT * FROM ' . $db_config['prefix'] . '_' . $module_data . '_cat ORDER BY id ASC';
$result = $db_slave->query($sql);
while ($row = $result->fetch()) {
    $global_array_cat[$row['id']] = $row;
}
>>>>>>> e7b722a4a1919e485f3e2564ec98940a6b0068b6
	
