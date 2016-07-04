<?php
define("ROOT_DIR",dirname(__FILE__));
require(ROOT_DIR.'/printer.class.php');

if(!isset($_POST) || empty($_POST['name']) || empty($_POST['company'])){
	echo json_encode(['errno'=>'1','errmsg'=>'未指定参数']);
	exit;
}else{
	$number = isset($_POST['number'])?$_POST['number']:1;
	$n = isset($_POST['name'])?$_POST['name'] : '';
	$c =isset($_POST['company'])?$_POST['company'] : '';
	$params = implode([$number,$n,$c],";");
}
$userInfo = explode(";",$params);

$printer = new Printer($userInfo);
$printer->print();
echo json_encode(['errno'=>0,'errmsg'=>'']);
?>