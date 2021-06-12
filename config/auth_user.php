<?php
session_start();

if (!isset($_SESSION['login'])) {
	header('location:home.php');
	$_SESSION['pesan'] = "Anda harus login terlebih dahulu";
	exit();
}
