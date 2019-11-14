<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>CELH - Trade History</title>
<script src="CELH.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Marcus Winston - STHS - Version : 3.1.9.9 - CELH-STHS.db - CELH-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="CELH.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"CELH-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"CELH-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
[11/2/2019 2:00:24 PM] - Josef Novotny was added to HC Lynx Kladno.<br />
[11/2/2019 1:55:02 PM] - Walter White was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:59 PM] - Vratislav Zbynek was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:54 PM] - Tomas Pylon was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:44 PM] - Simothy Drunkebird was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:54:32 PM] - Sachimo Zoidberg was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:28 PM] - Ruslan Zaporozhets was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:19 PM] - Petr Kolesnikovs was added to HC Lions Bohemia.<br />
[11/2/2019 1:54:14 PM] - Patrik Satan was added to HC Lynx Kladno.<br />
[11/2/2019 1:54:10 PM] - Ondrej Ravchitikov was added to HC Eagles Moravia.<br />
[11/2/2019 1:54:05 PM] - Mikhail Kladno was added to HC Eagles Moravia.<br />
[11/2/2019 1:53:59 PM] - Merit Csonka was added to HC Lynx Kladno.<br />
[11/2/2019 1:53:52 PM] - Matej Stransky was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:42 PM] - Krysztof Kowalski was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:53:33 PM] - Konstantin Voloshin was added to HC Lions Bohemia.<br />
[11/2/2019 1:53:28 PM] - Jakub Trocheck was added to HC Black Eagles Silesia.<br />
[11/2/2019 1:52:58 PM] - Grayson St. Raegan was added to HC Lynx Kladno.<br />
[11/2/2019 1:52:52 PM] - Dickie Pecker was added to HC Lions Bohemia.<br />
[11/2/2019 1:52:46 PM] - Daniel Garland was added to HC Eagles Moravia.<br />
[11/2/2019 1:52:38 PM] - Cash Savage was added to HC Lynx Kladno.<br />
[10/16/2019 3:57:10 PM] - Ty Justice was added to HC Eagles Moravia.<br />
[10/16/2019 3:57:08 PM] - Slappy McDoodle was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:55 PM] - Schnitinfritz Jagr was added to HC Lynx Kladno.<br />
[10/16/2019 3:56:44 PM] - Potato Chips was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:34 PM] - Pierre-Luc Laflamme was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:29 PM] - Christoffer Bjornsson was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:13 PM] - Cameron Urbowicz was added to HC Lions Bohemia.<br />
[10/16/2019 3:56:09 PM] - Barak Obrana was added to HC Eagles Moravia.<br />
[10/16/2019 3:56:07 PM] - Aviad Ratzon was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:58 PM] - Marian Potoczny was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:56 PM] - Marek Vyskoc was added to HC Eagles Moravia.<br />
[10/16/2019 3:49:44 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:42 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:49:36 PM] - Casimir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:41:25 PM] - Zalleras Szlerchek was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:40:26 PM] - Mike Verminski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:39:31 PM] - Casmir Stevens was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:34:34 PM] - Jakub Novak was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Eagles Moravia to HC Lions Bohemia : Tokek Takshak (67).<br />
[10/16/2019 3:08:18 PM] - TRADE : From HC Lions Bohemia to HC Eagles Moravia : Barak Obrana (60).<br />
[10/16/2019 3:07:34 PM] - Soren Kierkegaard was added to HC Lions Bohemia.<br />
[10/16/2019 3:06:58 PM] - Dionyz Vyskoc was added to HC Eagles Moravia.<br />
[10/16/2019 3:04:21 PM] - Georgette Pel was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:55 PM] - Knox Booth was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:50 PM] - Jakob Hamr was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:46 PM] - Izem Abioye was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:43 PM] - Barret McCarthy was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:39 PM] - Noctis Caelum was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:35 PM] - Radovan Hudec was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:33 PM] - Ravyn Tedisko was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:28 PM] - Alex Winters was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:15 PM] - Shouta Aizawa was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:11 PM] - Michael Scarn was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:08 PM] - Filip Zadina was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:04 PM] - Kornel Kasparek was added to HC Lynx Kladno.<br />
[10/16/2019 3:03:01 PM] - Troy McClure III was added to HC Lynx Kladno.<br />
[10/16/2019 3:02:59 PM] - Schnitinfritz Jagr was added to HC Lynx Kladno.<br />
[10/16/2019 3:02:50 PM] - Tauras Karazija was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:30 PM] - Przemyslaw Brzeszczyczkiewicz was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:24 PM] - Piotr Czerkawski was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:22 PM] - Mikas Bieksa was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:16 PM] - Flash Gordon was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:10 PM] - Matej Elias was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:02:05 PM] - Samee Iqbal was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:58 PM] - Charlie Schieck was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:55 PM] - Aron Hernadivic was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:50 PM] - Josef Kubinec was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:46 PM] - David Kastrba was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:28 PM] - Josef Novotny was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:24 PM] - Alexander Zajac was added to HC Black Eagles Silesia.<br />
[10/16/2019 3:01:17 PM] - Travis Jeziak was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:09 PM] - Johnny Yuma was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:05 PM] - Chris Partridge was added to HC Lions Bohemia.<br />
[10/16/2019 3:01:02 PM] - David Vent was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:55 PM] - Sean Stevenson Jr. was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:52 PM] - Pierre-Luc Laflamme was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:29 PM] - Petr Mikulak was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:24 PM] - Cameron Urbowicz was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:20 PM] - DeMaricus Smyth was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:16 PM] - Jan Zacha was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:12 PM] - Luke Thomason was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:07 PM] - Bernik Vrzala was added to HC Lions Bohemia.<br />
[10/16/2019 3:00:04 PM] - Barak Obrana was added to HC Lions Bohemia.<br />
[10/16/2019 2:59:59 PM] - Tokek Takshak was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:37 PM] - Andrej Doskocil was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:26 PM] - Ty Justice was added to HC Eagles Moravia.<br />
[10/16/2019 2:59:19 PM] - Brady McIntyre was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:44 PM] - Sasha Dangelchek was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:38 PM] - Boruvka Banananak was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:31 PM] - Nico Gross was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:26 PM] - Potato Chips was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:19 PM] - Zivan Zidek was added to HC Eagles Moravia.<br />
[10/16/2019 2:58:12 PM] - Slappy McDoodle was added to HC Eagles Moravia.<br />
[10/16/2019 2:57:30 PM] - Ben Holtby was added to HC Eagles Moravia.<br />
[10/16/2019 2:57:26 PM] - Christoffer Bjornsson was added to HC Eagles Moravia.<br />
<?php include "Footer.php";?>
