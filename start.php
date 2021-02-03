<?php
require_once "baidu_transapi 5.php";

$str = "test";

$ret = translate($str,'auto','auto');

var_dump($ret);