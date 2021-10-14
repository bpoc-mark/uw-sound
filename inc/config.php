<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

//$val = $_COOKIE["switchScreen"];
$val = isset($_COOKIE["switchScreen"]) ? $_COOKIE["switchScreen"] : null;

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
//if ($_SERVER['HTTPS'] == "on") {
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
 	$PROTOCOL = "https://";
} else {
 	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "サウンドデザインフェスティバルin浜松2021");

//キーワード
define("KEY_WORD", "サウンドデザイン,音,フェスティバル,浜松,2021");

//ディスクリプション
define("DESCRIPTION", "音と人の新たな関係を創造するサウンドデザインの祭典。[2021.12.11(SAT) - 12(SUN)] 10:00～17:00");

//H1文言
define("SEO_WORDS", "");
