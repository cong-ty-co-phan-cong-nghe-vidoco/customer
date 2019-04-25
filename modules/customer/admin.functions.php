<?php

if (! defined('NV_MAINFILE') ) {
    die('Stop!!!');
}
$allow_func =array();
	$allow_func[]="main"; 
	$allow_func[]="cat"; 
	$allow_func[]="customer"; 
	$allow_func[]="ajax"; 
<<<<<<< HEAD

	
		
=======
	$allow_func[]="cat_list"; 
	$allow_func[]="del_cat"; 

	
$global_array_cat = array();
$sql = 'SELECT * FROM ' . $db_config['prefix'] . '_' . $module_data . '_cat ORDER BY id ASC';
$result = $db_slave->query($sql);
while ($row = $result->fetch()) {
    $global_array_cat[$row['id']] = $row;
}

>>>>>>> 2560de53979882a8a5a23adc42bccb617d75e683
