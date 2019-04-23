<?php
$mod = $nv_Request->get_string('mod','post,get', '');
if($mod == 'abc'){
	$id = $nv_Request->get_int('id','post', 0);
	$value ="abc".$id;
	echo $value;
	die;
}