<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======
$mod = $nv_Request->get_string('mod','post,get', '');
=======
>>>>>>> e7b722a4a1919e485f3e2564ec98940a6b0068b6

$mod = $nv_Request->get_string('mod','post,get', '0');


<<<<<<< HEAD
=======
$mod = $nv_Request->get_string('mod','post,get', '');
>>>>>>> 000b568cc8a7dd2d6f5de5f2482ad48d700b4396
=======
>>>>>>> 2560de53979882a8a5a23adc42bccb617d75e683
>>>>>>> e7b722a4a1919e485f3e2564ec98940a6b0068b6
if($mod == 'abc'){
	//$id = $nv_Request->get_int('id','post', 0);
	$value = "abc".$id;
	echo "1";
	die;
}