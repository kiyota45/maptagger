<?php
function
nav_print($links)
{

	if (empty($links))
		return;
	echo '
      <div id="nav">
        <ul>';
	foreach ($links as $name => $uri)
		echo "
          <li><a href=\"$uri\"><span>$name</span></a></li>";
	echo '
        </ul>
      </div>';
}

function
header_print($title, $links)
{
	static $uri = 'http://mobile-ip.org/maptagger/';
	echo
'<!DOCTYPE html>
<html lang="ja">
  <head>
    <link rel="index" href="./index.php" />
    <link rev="made" href="mailto:null@mobile-ip.org" />
    <link href="' . $uri . 'style.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>' . $title . '</title>
  </head>
  <body>
    <h1>' . $title . '</h1>';
	nav_print(array('Top' =>  $uri,
	    '検索' => $uri . 'search.php',
	    '一覧' => $uri . 'list.php',
	    ));
	nav_print($links);
	echo '
    </div>
    <div id="main">';
}

function
footer_print()
{

	echo
'    </div>
  </body>
</html>';
}
?>
