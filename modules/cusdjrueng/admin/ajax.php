<?php

$mod = $nv_Request->get_string('mod','post,get',0);

if($mod == 'abc'){
	$value = "abc".$id;
	echo "1";
	die;
}
