<?php
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');
 
$module_version = array(
    'name' => 'customer_djrueng2', // Tieu de module
    'modfuncs' => 'main', // Cac function co block
    'change_alias' => '',
    'submenu' => '',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 0, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '4.0.00', // Phien ban cua modle
    'date' => 'Wed, 21 Mar 2018 22:33:00 GMT', // Ngay phat hanh phien ban
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