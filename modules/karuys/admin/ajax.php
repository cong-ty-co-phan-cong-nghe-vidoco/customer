<?php
<<<<<<< HEAD
$mod = $nv_Request->get_string('mod','post,get', '');
=======

$mod = $nv_Request->get_string('mod','post,get', '0');


>>>>>>> 2560de53979882a8a5a23adc42bccb617d75e683
if($mod == 'abc'){
	//$id = $nv_Request->get_int('id','post', 0);
	$value = "abc".$id;
	echo "1";
	die;
}
