<?php

// ini_set('display_errors',1);
// error_reporting(-1);

require_once("class.namaz.php");
//
// Sınıfı başlat!
$namaz = new Namaz();
//
//
// İsteğe bağlı ülke isimleri. Doğrudan dil değişimi yapılabilir!
// $ulkeIsimleri = array(
// 	'Kasım' => 'Kasim',
// 	'KasÄ±m' => 'Kasim'
// );
//
// $sehirIsimleri = array(
// 	'ADANA' => 'Adana',
// 	'ÇANAKKALE' => 'Çanakkale'
// );
//
// $ilceIsimleri = array(
// 	'ÇAN' => 'Çan',
// 	'BİGA' => 'Biga'
// );
//
// echo '<pre>';
// Ülke isimlerinin tanımlanması
// $namaz->ulkeIsimleri = $ulkeIsimleri;
// $namaz->sehirIsimleri = $sehirIsimleri;
// $namaz->ilceIsimleri = $ilceIsimleri;
//
// // ülkelerin çekilmesi
 $ulkeler = $namaz->ulkeler();

// $sehirler = $namaz->sehirler(2);
//
// $ilceler = $namaz->ilceler(2, 521);

// $vakit = $namaz->vakit(9349);

// $_GET["cityNumber"] = $cityNumber;
// $_GET["cityNumber"] = $cityNumbero;
$cityNumbero = $_GET["cityNumber"];

	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	// 1 hele maand rotterdam
	// $vakitler = $namaz->vakit(13980);
// 1 dag alleen rotterdam
	// $vakitler = $namaz->vakitler(13980);
	$vakitler = $namaz->vakitler($cityNumbero);

	echo json_encode($vakitler, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
	echo json_encode($ulkeler, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// print_r($ulkeler);
// print_r($sehirler);
// print_r($ilceler);
// print_r($vakit);
//
// print_r($vakitler);
