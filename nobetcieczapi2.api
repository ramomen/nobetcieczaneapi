/*
Nobetci Eczane Api 2.0
Yenilikler:
1. CSS eklendi (değişime uygundur)
2. print_r($goster) ile çağrılan arrayleri teker teker echo etmeye gerek kalmadı.
sadece $sehir ve $ilce parametrelerini değiştirerek rahatlıkla kullanabilirsiniz.

github.com/ramomen
Source'ler nobetci.org üzerinden alınmıştır.
*/

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<style type="text/css">
html, body{
	width: 100%;
	margin: 0px;
	font-family: Tahoma, sans-serif;
	background: url(../img/bg.png);
}

a{
	color: inherit;
}

a:link {
	color: inherit;
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

.mapsEczaneBaslik{
	color: #a0090f;
	font-weight: bold;
	font-size: 18px;
}

#divSite{
	margin-left: auto;
    margin-right: auto;
	
	/*width: 960px;*/

	box-shadow: 0px 0px 15px rgba(0,0,0,0.25);

	border-radius: 4px;
}

#divHeader{
	/*width: 960px;*/
	height: 75px;
	
	z-index: 1000;
	
	margin-top: 5px;
	
	border: 1px solid #AAA;
	border-bottom: 1px dotted #AAA;
	
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	
	background: url(../img/header_bg.png) repeat-x;
}

#divHeader > a > #imgLogo{
	float: left;
	
	border: 0;
	
	margin: 12px;
}

#divHeader > #divSplitter{
	float: left;
	
	margin-top: 12px;
	margin-left: 12px;
	
	width: 1px;
	height: 50px;
	
	background: #CCC;
}

#divHeader > h1{
	font-family: 'Roboto', sans-serif;
	
	float: left;
	
	width: 470px;
	
	margin-top: 22px;
	margin-left: 12px;
	
	font-weight: bold;
	font-size: 24px;
}

#divHeader > #aHomePage{
	float: right;
	
	margin-top: 31px;
	margin-right: 12px;
	
	font-size: 14px;
	
	color: #666;
}

#divHeader > #divPopupButton{
	float: right;
	
	width: 150px;
	
	text-align: left;
	
	margin-top: 20px;
	margin-right: 12px;
	
	padding: 6px;
	padding-left: 5px;
	padding-right: 5px;
	
	background: #d0070f;
	color: #fff;
	
	border: 1px solid #a0090f;
	
	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);

	border-radius: 3px;
	
	font-size: 18px;
	
	cursor: pointer;
}

#divHeader > #divPopupButton > img{
	float: right;
	margin-top: 8px;
}

#divHeader > #divPopupList{
	display: none;
	
	z-index: 10000;
	
	max-width: 730px;
	
	background: url(../img/popup_list_border_top.png) repeat-x top right #fff;
	
	position: absolute;
	
	padding: 8px;
	
	border: 1px solid #a0090f;
	border-top: 0;

	border-radius: 3px;
	
	border-top-right-radius: 0;
}

#divHeader > #divPopupList > ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	line-height: 25px;
}

#divHeader > #divPopupList > ul > li{
	float: left;
	width: 120px;
	font-size: 14px;
	text-align: left;
}

#divFooter{
	/*width: 960px;*/
	height: 25px;
	
	z-index: 1000;
	
	font-size: 12px;
	
	border: 1px solid #AAA;
	border-top: 1px dotted #AAA;
	
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
	
	background: url(../img/header_bg.png) repeat-x;
}

#divFooter div{
	margin: 3px;
}

#divFooterCopytightLinks{
	margin: 3px;
}

#divFooter a,span{
	color: #a0090f;
}

#imgMail{
	float:left; 
	
	margin-right:20px;
	
	cursor: pointer;
}

#divContent .clsNobetciEczaneTarihBilgisi{
	text-align: center;
	color:#a0090f;
	margin: 10px 0;
	font-size: 17px;
}

#divContent .clsEnYakinAdres{
	text-align: center;
	color:#a0090f;
	margin: 10px 0;
	font-size: 17px;
}

#divContent{
	/*width: 960px;*/
	
	font-size: 12px;
	
	border-left: 1px solid #AAA;
	border-right: 1px solid #AAA;
	
	background: #fff; 
}

#divContent > div{
	padding: 10px;
}

#inpSearch{
	width: 100%;
	box-sizing: border-box;
	
	height: 35px;
	
	font-size: 18px;
	
	margin-bottom: 10px;
	
	padding-left: 45px;
	
	background: url(../img/ara_bg.png) #fff no-repeat left;
	
	border: 1px solid #a0090f;
	
	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);

	border-radius: 2px;
}

.imgSearchIcon{
	float: left;
	position: relative;
	top: -2px;
	left: -5px;
}

#divNearest{
	width: 100%;
	box-sizing: border-box;
	
	height: 43px;
	
	margin-bottom: 5px;
	
	border: 1px solid #a0090f;

	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);
	
	border-radius: 8px;
}

#divNearest > img{
	float: left;
	
	margin: 5px;
}

#divNearest > span{
	float: left;
	
	margin-top: 8px;
	
	font-size: 20px;
	font-weight: bold;
}

#divNearestGeo{
	width: 100%;
	box-sizing: border-box;
	
	height: 43px;
	
	margin-bottom: 5px;
	
	border: 1px solid #a0090f;
	
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a0090f+0,e80d11+100 */
	background: #a0090f; /* Old browsers */
	background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */

	
	cursor: pointer;

	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);
	
	border-radius: 8px;
}

#divNearestGeo > img{
	float: left;
	
	margin: 5px;
}

#divNearestGeo > span{
	float: left;
	
	margin-top: 9px;
	
	color: #FFF;
	
	font-size: 20px;
	font-weight: bold;
}




#divNearestGeoError{
  
	display: none;
	
	width: 100%;
	box-sizing: border-box;
	
	min-height: 43px;
	
	margin-bottom: 5px;
	
	border: 1px solid #a0090f;
	
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a0090f+0,e80d11+100 */
	background: #a0090f; /* Old browsers */
	background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */

	
	cursor: pointer;

	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);
	
	border-radius: 8px;
	
	animation: bg-color 1s infinite;
	-webkit-animation: bg-color 1s infinite;
}

@-webkit-keyframes bg-color {
  0% { 
		background: #a0090f; /* Old browsers */
		background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */
  }
  50% { 
		background: #e80d11; /* Old browsers */
		background: -moz-linear-gradient(top,  #e80d11 0%, #a0090f 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #e80d11 0%,#a0090f 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #e80d11 0%,#a0090f 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e80d11', endColorstr='#a0090f',GradientType=0 ); /* IE6-9 */
  }
  100% { 
		background: #a0090f; /* Old browsers */
		background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */
  }
}

@keyframes bg-color {
  0% { 
		background: #a0090f; /* Old browsers */
		background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */
  }
  50% { 
		background: #e80d11; /* Old browsers */
		background: -moz-linear-gradient(top,  #e80d11 0%, #a0090f 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #e80d11 0%,#a0090f 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #e80d11 0%,#a0090f 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e80d11', endColorstr='#a0090f',GradientType=0 ); /* IE6-9 */
  }
  100% { 
		background: #a0090f; /* Old browsers */
		background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */
  }
}

#divNearestGeoError > img{
	float: left;
	
	margin: 5px;
}

#divNearestGeoError > span{
	/*float: left;*/
	
	/*margin-top: 9px;*/
	
	position: relative;
	
	top: 9px;
	
	color: #FFF;
	
	font-size: 18px;
}

#divPopupListButton{
	width: 100%;
	box-sizing: border-box;
	
	margin-bottom: 5px;
	
	text-align: center;
	
	border: 1px solid #a0090f;
	
	padding: 3px;
	
	background: url(../img/header_bg.png) repeat-x;
	
	cursor: pointer;

	box-shadow: 0px 0px 12px 0px rgba(220,220,220,1);
	
	border-radius: 8px;
}

#divPopupListButton > span{	
	color: #222;
	
	font-size: 20px;
	font-weight: bold;
}

.clsBannerLarge{
	margin: 5px;
	/*max-width: 950px;*/
}

#iframeMaps{
	width: 100%;
	box-sizing: border-box;
	
	border: 0;
	overflow: hidden;
}

#divPopupListMobile{
	display: none;
}

#ulPopupList{
	display: none;
}

.clsPopupListMobileTableHarf{ 
	font-size:35px; 
	text-align:center; 
	vertical-align:middle !important;
}

.clsPopupListMobileTable{ 
	vertical-align:middle !important;
}

#divSiteStats{
	width: 360px;
	box-sizing: border-box;
	
	text-align: center;
	
	margin-top: 7px;
	margin-left: auto;
    margin-right: auto;

	/*opacity: 0;
	display: none;*/
}

#divSiteStats a{
	margin-right: 10px;
}

#divTwitter{
	margin-top: 10px;
	width: 186px;
	margin-left: auto;
}

.cssTable{
	display: table-row-group;
	display: table;
	margin: 0px;
	padding: 0px;
	width: 100%;
}

.cssTableRadiusLeftTop{
	border-top-left-radius: 8px;
}

.cssTableRadiusRightTop{
	border-top-right-radius: 8px;
}

.cssTableRadiusLeftBottom{
	border-bottom-left-radius: 8px;
}

.cssTableRadiusRightBottom{
	border-bottom-right-radius: 8px;
}

.cssTableRow {
	display: table-row;
}

.cssTableRow > span:first-child {
	border-left: 1px solid #333;
	white-space: nowrap;
}

.cssTableRow > span:nth-child(2), .cssTableRow > span:nth-child(3) {
	/*white-space: nowrap;*/ /*telefon*/
}

.cssTableRow > span {
	vertical-align: top;
	list-style:none;
	display: table-cell;
	border: 1px solid #333;
	border-left: 0;
	border-top: 0;
	padding: 8px 6px;
}

.cssTableHeader {
	display: table-header-group;
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a0090f+0,e80d11+100 */
	background: #a0090f; /* Old browsers */
	background: -moz-linear-gradient(top,  #a0090f 0%, #e80d11 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  #a0090f 0%,#e80d11 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  #a0090f 0%,#e80d11 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0090f', endColorstr='#e80d11',GradientType=0 ); /* IE6-9 */

}

.cssTableHeader span {
	border-top: 1px solid #333;
	font-weight: bold;
	padding: 10px;
	color: #FFF;
}

.googleMapsLabels{
	/*background-color: #fff;
	border: 1px solid #444;
	border-radius: 3px;
	padding: 2px;
	height: 23px;*/
}
.googleMapsLabels span {
	color: #a0090f;
	text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
	position: relative;
	top: -4px;
	margin-left: 2px;
	font-size: 15px;
	font-weight: bold;
	text-align: left;
	font-family: Tahoma;
	white-space: nowrap;
}

.googleMapsLabelsTarget span {
	color: #498cb7;
	text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
	position: relative;
	top: -12px;
	margin-left: 2px;
	font-size: 15px;
	font-weight: bold;
	text-align: left;
	font-family: Tahoma;
	white-space: nowrap;
}

.sprite { background: url('../img/sprite.png') no-repeat top left; width: 32px; height: 32px;  } 
.sprite.anasayfa_nearest { background-position: 0 0; } 
.sprite.anasayfa_nearest_enyakin { background-position: -33px 0; } 
.sprite.anasayfa_nearest_enyakin_error { background-position: -66px 0; } 
.sprite.anasayfa_nearest_nobetci { background-position: -99px 0; } 
.sprite.icon_eczane { background-position: -132px 0; width: 24px; height: 24px; } 
.sprite.icon_hastane { background-position: -157px 0; width: 24px; height: 24px; } 
.sprite.icon_search { background-position: -182px 0; width: 24px; height: 24px; } 
.sprite.logo { background-position: -207px 0; width: 180px; height: 48px; } 
.sprite.mail { background-position: -388px 0; width: 101px; height: 13px; } 
.sprite.ok_beyaz { background-position: -490px 0; width: 12px; height: 7px; } 
.sprite.ok_kirmizi { background-position: -503px 0; width: 12px; height: 7px; } 
.sprite.valid_css { background-position: -516px 0; width: 42px; height: 15px; } 
.sprite.valid_html { background-position: -559px 0; width: 50px; height: 15px; } 
.sprite.valid_pagespeed { background-position: -610px 0; width: 68px; height: 15px; } 

.sprite_mobile { background: url('../img/sprite_mobile.png') no-repeat top left; width: 18px; height: 18px;  } 
.sprite_mobile.anasayfa_nearest { background-position: 0 0; } 
.sprite_mobile.anasayfa_nearest_enyakin { background-position: -19px 0; } 
.sprite_mobile.anasayfa_nearest_enyakin_error { background-position: -38px 0; } 
.sprite_mobile.anasayfa_nearest_nobetci { background-position: -57px 0; } 
.sprite_mobile.logo { background-position: -76px 0; width: 100px; height: 26px; } 

/*@media (min-width: 768px) and (max-width: 1024px) {*/
@media (max-width: 959px) {
	#divNearestGeoError > span{
		font-size: 15px;
	}
}
	
	
@media (min-width: 601px) and (max-width: 959px) {
	/*h1 { color:#F00; }*/
	#divSite{ width: 95% !important; } 
	#divHeader, #divFooter, #divContent { width: 100% !important; }
	#aHomePage { display:none !important; }
	#divHeader > #divPopupList { max-width: 500px !important; }
	#divFooterCopytightLinks { display:none !important; }
	.clsBannerLarge { max-width: 750px !important; }
	#divGoogleMaps{ height: 350px !important; }
}

/*@media (min-width: 480px) and (max-width: 767px) {
	h1 { color:#0F0; }
	#aHomePage { display:none !important; }
}*/

@media (max-width: 600px) {
	/*h1 { color:#00F; }*/
	html, body { background: white !important; }
	#divSite { margin-left: 0 !important; margin-right: 0 !important; }
	#divHeader { border-left:0 !important; border-right:0 !important; border-top:0 !important; margin-top: 0 !important; left: 0px !important; top: 0px !important;  position: fixed !important; height: 50px !important; }
	#divSplitter { margin-top: 7px !important; height: 37px !important; margin-left: 0 !important; }
	#divFooter { border-left:0 !important; border-right:0 !important; border-bottom:0 !important; position: fixed !important; bottom: 0px !important; }
	#divHeader > h1 { font-size: 14px !important; margin-top: 18px; }
	#divContent { border-left:0 !important; border-right:0 !important; }
	
	#divNearestGeo { height: 44px !important; } 
	
	#divNearest { height: 80px !important; } 
	#imgNearestEczaneler { clear: both !important; }
	#imgNearestEczaneler, #spanNearestEczaneler { float: left !important; margin-top:0 !important; }
	#spanNearestEczaneler > a, #spanNearestNobetciEczaneler > a, #spanNearestGeoEnYakin > a, #spanPopupListButton > a, #spanPopupListButtonHarf, #spanPopupListButtonTitle { font-size: 16px !important; }
	
	#inpSearch { height: 25px !important; font-size: 15px !important; padding-left: 5px !important; background: white !important; margin-bottom:5px !important; }
	#iframeMaps, #divPopupButton, #aHomePage, #divSiteStats, #divFooterLinks { display: none !important; }
	#divPopupListMobile { display: block; }
	#divContent { padding-top: 52px !important; padding-bottom: 25px !important; }
	#divSite, #divHeader, #divFooter, #divContent { box-shadow: none !important; border-radius: 0 !important; }
	.clsPopupListMobileTableHarf{ font-size: 36px !important; }
	.clsPopupListMobileTable{ font-size: 20px !important; }
	.clsBannerLarge { max-width: 310px !important; }
	#divGoogleMaps{ height: 250px !important; }
}

@media (max-width: 320px) {
	#imgLogo { margin: 5px !important; }
	#divHeader { height: 37px !important; }
	#divHeader > h1 { font-size: 12px !important; margin-top: 4px; margin-left: 4px !important; }
	#divSplitter{ margin-top: 3px !important; height: 30px !important; }
	#divContent { padding-top: 40px !important; }
	#divContent > div { padding: 3px !important; }
	#divFooter #imgMail { display: none !important; }
	#divFooter{ font-size: 10px !important; }
	
	#divNearestGeo { height: 29px !important; } 
	#divNearestGeo > span{ margin-top: 0 !important; }
	
	#divNearest  { height: 60px !important; }
	#divNearest > span { margin-top: 0px !important; }
	#spanNearestEczaneler > a, #spanNearestNobetciEczaneler > a, #spanNearestGeoEnYakin > a, #spanPopupListButton > a, #spanPopupListButtonHarf, #spanPopupListButtonTitle { font-size: 11px !important; }
	.clsPopupListMobileTableHarf{ font-size: 24px !important; }
	.clsPopupListMobileTable{ font-size: 16px !important; }
	#divGoogleMaps{ height: 200px !important; }
}

@media (max-width: 240px) {
	#spanNearestEczaneler > a, #spanNearestNobetciEczaneler > a, #spanNearestGeoEnYakin > a, #spanPopupListButton > a, #spanPopupListButtonHarf, #spanPopupListButtonTitle { font-size: 9px !important; }
	#divNearest  { height: 54px !important; }
	#spanNearestGeoEnYakin { position: relative; top: -3px !important; }
	#spanNearestNobetciEczaneler { position: relative; top: -2px !important; }
	#spanNearestEczaneler { position: relative; top: -6px !important; }
	.clsPopupListMobileTableHarf{ font-size: 16px !important; }
	.clsPopupListMobileTable{ font-size: 10px !important; }
	#divGoogleMaps{ height: 200px !important; }
}
    </style>
    
    <?php
function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    $sehir = 'konya';
    $ilce = 'seydisehir';
    $link = "https://nobet.org/$sehir/$ilce/nobetci-eczaneler.html";

    $icerik = file_get_contents($link);
    $goster = ara('p class="clsNobetciEczaneTarihBilgisi"','<div style="text-align:center;">Toplam',$icerik);

    echo $goster[0];
    
    ?>

</body>

</html>

