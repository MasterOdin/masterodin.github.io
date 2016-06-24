<?php
/* init variables */
$pages = array(
				'home',
				'work',
				'resume',
			);

$projects = array(
					'turing',
					'cfg2cnf',
					'flynn',
					'alt',
				);

/* end init */

$content = !isset($_GET['content']) || !in_array($_GET['content'],$pages) ? 'home' : $_GET['content'];
?>

<!doctype html>
<html lang="en">
<head>
	<title>matthew peveler - <?php print $content; ?></title>
	<link rel="stylesheet" href="assets/style.css" type="text/css" />

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-40645452-1', 'mpeveler.com');
		ga('send', 'pageview');
	</script>
</head>
<body>
<!-- header -->
<div id="container">
	<div id="header">
		<div id="menu">
			<ul>
				<li<?php print ($content == "home") ? ' class="selected"' : ""; ?>><a href="?content=home">Home</a></li>
				<li<?php print ($content == "work") ? ' class="selected"' : ""; ?>><a href="?content=work">Work</a></li>
				<li<?php print ($content == "resume") ? ' class="selected"' : ""; ?>><a href="?content=resume">Résumé</a></li>
			</ul>
		</div>
		<h1><a href="?content=home">matthew peveler</a></h1>
	</div>

	<div id="content">
<?php
	if($content == "work" && (isset($_GET['proj']) && in_array($_GET['proj'], $projects)))
	{
		require_once("assets/content/projects/".$_GET['proj'].".html");
	} else {
		require_once("assets/content/".$content.".html");
	}
?>
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
