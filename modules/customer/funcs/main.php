<?php

if (! defined('NV_IS_MOD_CUS')) {
    die('Stop!!!');
}

$data =array();


$contents = theme_main($data,$op);

include (NV_ROOTDIR . "/includes/header.php");
//echo $contents; -> echo text off class themes
//echo json_encode($contents); -> echo chuoi json width $contents is array
echo nv_site_theme($contents); // echo themes admin ( header, menu, footer)
include (NV_ROOTDIR . "/includes/footer.php");
