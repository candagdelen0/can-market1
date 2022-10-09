<?php
try{
	$VeritabaniBaglantisi =	new PDO("mysql:host=localhost;dbname=ecommerce;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die();
}

$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi	= $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0){
	$siteName =	$Ayarlar["siteName"];
	$siteTitle = $Ayarlar["siteTitle"];
	$siteDescription = $Ayarlar["siteDescription"];
	$siteKeywords = $Ayarlar["siteKeywords"];
	$siteCopyRight = $Ayarlar["siteCopyRight"];
	$siteLogo = $Ayarlar["siteLogo"];
	$SiteLinki = $Ayarlar["SiteLinki"];
	$siteEmail = $Ayarlar["siteEmail"];
	$siteEmailPassword = $Ayarlar["siteEmailPassword"];
	$SiteEmailHostAdresi = $Ayarlar["SiteEmailHostAdresi"];
	$sosyalFacebook	= $Ayarlar["sosyalFacebook"];
	$sosyalTwitter	= $Ayarlar["sosyalTwitter"];
	$sosyalLinkedin	= $Ayarlar["sosyalLinkedin"];
	$sosyalinstagram = $Ayarlar["sosyalinstagram"];
	$sosyalPinterest = $Ayarlar["sosyalPinterest"];
	$sosyalYoutube = $Ayarlar["sosyalYoutube"];
	$DolarKuru	= $Ayarlar["DolarKuru"];
	$EuroKuru = $Ayarlar["EuroKuru"];
}else{
	die();
}

$MetinlerSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM sozlesmeler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi	= $MetinlerSorgusu->rowCount();
$Metinler = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($MetinlerSayisi>0){
	$hakkimizda	= $Metinler["hakkimizda"];
	$isOrtaklari = $Metinler["isOrtaklari"];
	$guvenliAlisveris = $Metinler["guvenliAlisveris"];
	$bilgiGuvenligi = $Metinler["bilgiGuvenligi"];
	$kisiselVeriler	= $Metinler["kisiselVeriler"];
	$cerezPolitikasi = $Metinler["cerezPolitikasi"];
	$iptaliademetni	= $Metinler["iptaliademetni"];
}else{
	die();
}

if(isset($_SESSION["Kullanici"])){
	$KullaniciSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? LIMIT 1");
	$KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
	$KullaniciSayisi		=	$KullaniciSorgusu->rowCount();
	$Kullanici				=	$KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);

	if($KullaniciSayisi>0){
		$KullaniciID=$Kullanici["id"];
		$EmailAdresi=$Kullanici["EmailAdresi"];
		$Sifre=$Kullanici["Sifre"];
		$IsimSoyisim=$Kullanici["IsimSoyisim"];
		$TelefonNumarasi=$Kullanici["TelefonNumarasi"];
		$Cinsiyet=$Kullanici["Cinsiyet"];
		$Durumu	=$Kullanici["Durumu"];
		$KayitTarihi=$Kullanici["KayitTarihi"];
		$KayitIpAdresi=$Kullanici["KayitIpAdresi"];
		$AktivasyonKodu	=$Kullanici["AktivasyonKodu"];
	}else{
		die();
	}
}


?>