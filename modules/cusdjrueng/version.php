<?php
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');
 
$module_version = array(
    'name' => 'cus_djrueng', // Tieu de module
    'modfuncs' => 'main', // Cac function co block
    'change_alias' => '',
    'submenu' => '',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 0, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '4.0.00', // Phien ban cua modle
    'date' => 'Wed, 16 Mar 2018 18:50:00 GMT', // Ngay phat hanh phien ban
    'author' => 'hoctap.vidoweb.com.vn (djruengnay@gmail.com)', // Tac gia
    'note' => '', // Ghi chu
    'uploads_dir' => array(
        $module_name,
        $module_name . '/source',
        $module_name . '/temp_pic',
        $module_name . '/topics'
    ),
    'files_dir' => array($module_name . '/topics')
);


/*
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');
 
$module_version = array(
    'name' => 'customer', // Tieu de module
    'modfuncs' => 'main', // Cac function co block
    'change_alias' => '',
    'submenu' => '',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 0, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '4.0.00', // Phien ban cua modle
    'date' => 'Thu, 14 Mar 2019 19:11:00 GMT', // Ngay phat hanh phien ban
    'author' => 'NV Systems (hoangnt@nguyenvan.vn)', // Tac gia
    'note' => '', // Ghi chu
    'uploads_dir' => array(
        $module_name,
        $module_name . '/source',
        $module_name . '/temp_pic',
        $module_name . '/topics'
    ),
    'files_dir' => array($module_name . '/topics')
);*/
