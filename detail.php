<?php
require_once('lib.php');
header_print('家ログ 詳細', array());
$id = $_GET['id'];
echo('<a href="contact.php?id=XXXX">contact</a>');
echo("$id");

$ncomments = 10; /* XXX */
	echo("<div class=\"balloon-wrapper\">\n");
for ($i = 0; $i < $ncomments; $i++) {
	if($i % 2 == 0)
		echo("<p class=\"balloon-left\">");
	else
		echo("<p class=\"balloon-right\">");

	echo("また、資源をエネルギーに変換するためには、要らないものを空気中に排出しなくてはなりません。二酸化炭素などの排出物は、大気汚染を引き起こし、やがては地球全体の気温を徐々にあげてしまいます。これが地球温暖化と呼ばれるもので、異常気象や農作物への影響、海水面の上昇、紫外線の問題など、さまざまな問題の原因となっています。人間だけでなく、すべての生き物の住みやすい環境を守るためにも、エネルギーの節約は必要なのです。 ");
	echo("</p>\n");
}
	echo("</div>\n");

footer_print();
?>
