<?php

if(! defined('NV_IS_MOD_CUS')){
	die('stop!!!');
}
$data = array();

$content = theme_main($data,$op);
include (NV_ROOTDIR . "/includes/header.php");
echo nv_site_themes($contents);
include (NV_ROOTDIR . "/includes/footer.php");
