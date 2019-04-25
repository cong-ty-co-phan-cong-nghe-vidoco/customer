<?php
<<<<<<< HEAD

$mod = $nv_Request->get_string('mod','post,get', '0');


=======
$mod = $nv_Request->get_string('mod','post,get', '');
>>>>>>> 000b568cc8a7dd2d6f5de5f2482ad48d700b4396
if($mod == 'abc'){
	//$id = $nv_Request->get_int('id','post', 0);
	$value = "abc".$id;
	echo "1";
	die;
}