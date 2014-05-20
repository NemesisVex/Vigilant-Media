<!DOCTYPE html>
<html>
	<head>
		<title>Vigilant Media &#8212; {{{ $title or 'the online portfolio of Greg Bueno'}}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="/favicon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="{{{ $vigilantmedia_cdn_uri }}}/web/css/blueprint/screen.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="{{{ $vigilantmedia_cdn_uri }}}/web/css/blueprint/print.css" type="text/css" media="print" />
		<!--[if lt IE 8]><link rel="stylesheet" href="{{{ $vigilantmedia_cdn_uri }}}/web/css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
		<link rel="stylesheet" href="{{{ $vigilantmedia_cdn_uri }}}/web/css/facebox.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/typography.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/layout.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/mobile.css" type="text/css" media="screen and (max-width: 768px)" />
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="{{{ $vigilantmedia_cdn_uri }}}/web/js/modernizr-1.6.min.js"></script>
		<!--[if lt IE 9]><script type="text/javascript" src="{{{ $vigilantmedia_cdn_uri }}}/web/js/html5.js"></script><![endif]-->
	</head>
	<body>
		<div id="masthead">
			<div class="container">
				<header id="masthead-title">
					<hgroup>
						<h1 id="title"><a href="/">Vigilant Media</a></h1>
						<h2 id="subtitle">The online portfolio of Greg Bueno</h2>
					</hgroup>
				</header>

				<nav id="nav-main">
					<ul>
						<li class="active"><a href="/">Home</a></li>
						<li><a href="/projects/">Projects</a></li>
						<li><a href="/resume/">Résumé</a></li>
						<li><a href="http://blog.vigilantmedia.com/">Blog</a></li>
						<li><a href="/contact/">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div id="content">
			<div class="container">
				<!--CONTENT START-->
				@yield('content')
				<!--CONTENT END-->
			</div>
		</div>

		<footer id="footer">
			<div class="container centered">

			&copy; {{{ $copyright_year }}} Greg Bueno
			</div>
		</footer>

		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

		try
		{
			var pageTracker = _gat._getTracker("UA-7828220-7");
			pageTracker._trackPageview();
		} catch(err) {}
		</script>

	</body>
</html>
