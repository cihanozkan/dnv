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
// 	'TURKIYE' => 'Türkiye',
// 	'ABD' => 'ABD'
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
// $ulkeler = $namaz->ulkeler();

// $sehirler = $namaz->sehirler(2);
//
// $ilceler = $namaz->ilceler(2, 521);

// $vakit = $namaz->vakit(9349);

	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	// 1 hele maand rotterdam
	// $vakitler = $namaz->vakit(13980);
// 1 dag alleen rotterdam
	$vakitler = $namaz->vakit(13980);

	echo json_encode($vakitler, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// print_r($ulkeler);
// print_r($sehirler);
// print_r($ilceler);
// print_r($vakit);
//
// print_r($vakitler);
