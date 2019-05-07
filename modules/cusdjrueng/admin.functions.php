 <?php
 
 if (!defined('NV_MAINFILE')){
 	die('stop!!!');
 }
 
 
 $allow_func = array();
 	$allow_func[] = "main";
 	$allow_func[] = "cat";
	$allow_func[] = "customer";
	$allow_func[] = "ajax";
	$allow_func[] = "cat_list";
	$allow_func[] = "del_cat";
	$allow_func[] = "customer_list";
	$allow_func[] = "main_product";
	$allow_func[] = "product";

$global_array_cat = array();
$sql = 'SELECT * FROM ' .$db_config['prefix']. '_' .$module_data . '_cat ORDER By id ASC';
$result = $db->query($sql);

while ($row = $result->fetch()) {
	$global_array_cat[$row['id']] = $row;
}
function nv_fix_cat_order($parentid = 0, $order = 0, $lev = 0)
{
	global $db, $module_data;
	$sql = 'SELECT id, parentid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_cat ORDER BY sort ASC';
	$result = $db_slave->query($sql);
	while ($row = $result->fetch()) {
	    $global_array_cat[$row['catid']] = $row;
	}
	$result->closeCursor();
	$weight = 0;
	if($parentid >0){
		++$lev;
	}else{
		$lev = 0;
	}
	foreach ($array_cat_order as $catid_i) {
        ++$order;
        ++$weight;
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_cat SET weight=' . $weight . ', sort=' . $order . ', lev=' . $lev . ' WHERE catid=' . intval($catid_i);
        $db->query($sql);
        $order = nv_fix_cat_order($catid_i, $order, $lev);
    }
	$numsubcat = $weight;
    if ($parentid > 0) {
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_cat SET numsubcat=' . $numsubcat;
        if ($numsubcat == 0) {
            $sql .= ",subcatid='','";
        } else {
            $sql .= ",subcatid='" . implode(',', $array_cat_order) . "'";
        }
        $sql .= ' WHERE catid=' . intval($parentid);
        $db->query($sql);
    }
    return $order;
}
