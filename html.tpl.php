<?php print $doctype; ?>
<html lang="<?php print $language -> language; ?>" dir="<?php print $language -> dir; ?>"<?php print $rdf -> version . $rdf -> namespaces; ?>>
	<head<?php print $rdf -> profile; ?>
		> <?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
		<?php print $scripts; ?>
		<div id="fb-root"></div>
		<div id="fb-root"></div>
		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if(d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=239411239425270";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		</head>
		<body<?php print $attributes; ?>>

			<?php print $page_top; ?>
			<?php print $page; ?>
			<?php print $page_bottom; ?>
			</body>
</html>