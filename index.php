<?php
/* init variables */
$pages = array(
				'home',
				'work',
				'resume',
			);
/* end init */

$content = !isset($_GET['content']) || !in_array($_GET['content'],$pages) ? 'home' : $_GET['content'];

$selected = array();
foreach ($pages as $page) {
	if ($content == $page) {
		$selected[$page] = "class='selected'";
	}
	else {
		$selected[$page] = "";
	}
}

print <<<HTML

<!doctype html>
<html lang="en">
<head>
	<title>matthew peveler - <?php print $content; ?></title>
	<link rel="stylesheet" href="assets/style.css" type="text/css" />
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
<!-- header -->
<div id="container">
	<div id="header">
		<div id="menu">
			<ul>
				<li {$selected["home"]}><a href="?content=home">Home</a></li>
				<li {$selected["work"]}><a href="?content=work">Work</a></li>
				<li {$selected["resume"]}><a href="?content=resume">Résumé</a></li>
			</ul>
		</div>
		<h1><a href="?content=home">matthew peveler</a></h1>
	</div>

	<div id="content">
HTML;
	require_once("assets/content/{$content}.php");
print <<<HTML
	</div>

	<hr />
	<div id="footer">
		<ul>
			<li><a href="mailto:matt.peveler@gmail.com"><img src="assets/images/icons/icon-letter.png" height="16px" /> matthew.peveler@gmail.com</a></li>
			<li><a href="https://github.com/MasterOdin"><img src="assets/images/icons/icon-github.png" height="16px" /> github.com/MasterOdin</a></li>
		</ul>
	</div>
</div>
</body>
</html>
HTML;
