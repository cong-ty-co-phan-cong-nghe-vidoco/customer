<?php

$mod = $nv_Request->get_string('mod','post,get', '0');


if($mod == 'abc'){
	//$id = $nv_Request->get_int('id','post', 0);
	$value = "abc".$id;
	echo "1";
	die;
}
