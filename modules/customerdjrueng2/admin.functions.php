 <?php
 
 if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN'))
     die('Stop!!!');
  
 //define('NV_IS_QLHS_ADMIN', true);
 define('NV_IS_CUS_ADMIN', true);
 if(defined('NV_IS_CUS_ADMIN')){
	 $alow_func[]='main';
 }
 
