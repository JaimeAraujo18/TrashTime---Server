<?php

$dir="";

if ($_SERVER['SERVER_NAME']=='SITE.COM.BR') {
	$dir='/';
}else if ($_SERVER['SERVER_NAME']=='localhost') {
	$dir = "/trashtime";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?= $titulo ?></title>
	<base href="<?= base_url() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/styles.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.css') ?>">
</head>
<body class="bg-black">
	