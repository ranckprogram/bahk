<?php
/*
 *	二维数组专函称一维数组
 *	@param {Arr} $TArr 数组  二维数组
 *	@param {String} $key 键
 *	return {Array}  $Oarr    一维数组
 */
function arrChange($TArr, $key) {
	$OArr = array();
	foreach ($TArr as $value) {
		$OArr[$value[$key]] = $value[$key]; // 这里能不能 在通用一点
	}
	;
	return $OArr;
}
function testhe() {
	echo "string";
}

?>