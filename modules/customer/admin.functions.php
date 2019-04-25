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
	$allow_func[]="cat_list"; 
	$allow_func[]="del_cat"; 

	
$global_array_cat = array();
$sql = 'SELECT * FROM ' . $db_config['prefix'] . '_' . $module_data . '_cat ORDER BY id ASC';
$result = $db_slave->query($sql);
while ($row = $result->fetch()) {
    $global_array_cat[$row['id']] = $row;
}

=======

	
		
>>>>>>> 000b568cc8a7dd2d6f5de5f2482ad48d700b4396
