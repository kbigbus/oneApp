<?php
//工具类
class XUtils {
	public static function echoJson($data, $jsonp = "") {
	    header("Content-type: application/json; charset=utf-8");
	    if (empty($jsonp)) {
	        echo json_encode($data);
	    } else {
	        echo $jsonp . '(' . json_encode($data) . ')';
	    }
	}
}

fd
