<?php
session_start();
ob_start();
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sayfaAyar.php");

if(isset($_REQUEST["SK"])){
	$SayfaKoduDegeri	=	SayiliIcerikleriFiltrele($_REQUEST["SK"]);
}else{
	$SayfaKoduDegeri	=	0;
}

if(isset($_REQUEST["SYF"])){
	$Sayfalama			=	SayiliIcerikleriFiltrele($_REQUEST["SYF"]);
}else{
	$Sayfalama			=	1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">
<title><?php echo DonusumleriGeriDondur($siteTitle); ?></title>
<link type="image/png" rel="icon" href="Resimler/technology.png">
<meta name="description" content="<?php echo DonusumleriGeriDondur($siteDescription); ?>">
<meta name="keywords" content="<?php echo DonusumleriGeriDondur($siteKeywords); ?>">
<script type="text/javascript" src="Frameworks/JQuery/jquery-3.3.1.min.js" language="javascript"></script>
<link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
<script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head>
<body>
    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="40">
            <td><img src="Resimler/HeaderResmi.png" border="0"></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp;</td>
                        <?php
                        if(isset($_SESSION["Kullanici"])){
                        ?>
                        <td width="20"><a href="index.php?SK=50"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="70" class="UyeIslemMenubar"><a href="index.php?SK=50">Hesabım</a></td>
                        <td width="20"><a href="index.php?SK=49"><img src="Resimler/CikisBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="85" class="UyeIslemMenubar"><a href="index.php?SK=49">Çıkış Yap</a></td>
                        <?php
                        }else{
                        ?>
                        <td width="20"><a href="index.php?SK=31"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="70" class="UyeIslemMenubar"><a href="index.php?SK=31">Giriş Yap</a></td>
                        <td width="20"><a href="index.php?SK=22"><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="85" class="UyeIslemMenubar"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <?php
                        }
                        ?>
                        <td width="20">
                            <?php if(isset($_SESSION["Kullanici"])){ ?><a href="index.php?SK=94"><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"></a><?php }else{ ?><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"><?php } ?>
                        </td>
                        <td width="103" class="UyeIslemMenubar">
                            <?php if(isset($_SESSION["Kullanici"])){ ?><a href="index.php?SK=94">Alışveriş Sepeti</a><?php }else{ ?>Alışveriş Sepeti<?php } ?>
                        </td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#e7e3e3">
                        <td width="192"><a href="index.php"><img src="Resimler/<?php echo DonusumleriGeriDondur($siteLogo); ?>" border="0"></a></td>
                        <td>
                            <table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="306" class="AnaMenu">&nbsp;</td>
                                    <td width="137" class="AnaMenu"><a href="index.php">Ana Sayfa</a></td>
                                    <td width="180" class="AnaMenu"><a href="index.php?SK=84">Bilgisayarlar</a></td>
                                    <td width="170" class="AnaMenu"><a href="index.php?SK=85">Telefonlar</a></td>
                                    <td width="80" class="AnaMenu"><a href="index.php?SK=86">Akıllı Saatler</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td valign="top"><table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center"><?php
                        
                        if((!$SayfaKoduDegeri) or ($SayfaKoduDegeri=="") or ($SayfaKoduDegeri==0)){
                            include($Sayfa[0]);
                        }else{
                            include($Sayfa[$SayfaKoduDegeri]);
                        }
                        ?><br /></td>
                </tr>
            </td>
        </tr>

        <tr>
            <td>
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0"></table>
            </td>
        </tr>

        <tr height="210">
            <td>
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9">
                    <tr height="30">
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;<b>Kurumsal</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Üyelik & Hizmetler</b></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Sözleşmeler</b></td>
                        <td width="21">&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Bizi Takip Edin</b></td>
                    </tr>
                    <tr height="30">
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=1">Hakkımızda</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=31">Giriş Yap</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=5">Güvenli Alışveriş Kılavuzu</a></td>
                        <td width="21">&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalFacebook); ?>" target="_blank"><img src="Resimler/Facebook16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalFacebook); ?>" target="_blank">Facebook</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=2">İş Ortaklarımız</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=6">Bilgi Güvenliği Politikası</a></td>
                        <td width="21">&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalTwitter); ?>" target="_blank"><img src="Resimler/Twitter16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalTwitter); ?>" target="_blank">Twitter</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=3">Havale Bildirim Formu</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=21">Sık Sorulan Sorular</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=8">Kişisel Verilerin Korunması</a></td>
                        <td width="21">&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalLinkedin); ?>" target="_blank"><img src="Resimler/LinkedIn16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalLinkedin); ?>" target="_blank">LinkedIn</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=4">Ödeme Seçenekleri</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=14">Kargom Nerede?</a></td>
                        <td width="22">&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=9">Çerez Politikamız</a></td>
                        <td width="21">&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalinstagram); ?>" target="_blank"><img src="Resimler/Instagram16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalinstagram); ?>" target="_blank">Instagram</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=16">Çözüm Merkezi</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td width="250" class="Footerbar">&nbsp;<a href="index.php?SK=7">İptal & İade & Değişim</a></td>
                        <td width="21">&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalPinterest); ?>" target="_blank"><img src="Resimler/Pinterest16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalPinterest); ?>" target="_blank">Pinterest</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="20"><a href="<?php echo DonusumleriGeriDondur($sosyalYoutube); ?>" target="_blank"><img src="Resimler/YouTube16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                    <td width="230" class="Footerbar"><a href="<?php echo DonusumleriGeriDondur($sosyalYoutube); ?>" target="_blank">YouTube</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>        

        <tr height="30">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center"><?php echo DonusumleriGeriDondur($siteCopyRight); ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="30">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center"><img src="Resimler/RapidSSL32x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/InternetteGuvenliAlisveris28x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/3DSecure14x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/BonusCard41x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/MaximumCard46x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/WorldCard48x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/CardFinans78x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/AxessCard46x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/ParafCard19x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/VisaCard37x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/MasterCard21x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/AmericanExpiress20x12.png" border="0"></td>
                    </tr>
                </table>
            </td>
        </tr>
        
    </table>
</body>
</html>


<?php
$VeritabaniBaglantisi=null;
ob_end_flush();
?>