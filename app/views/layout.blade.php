<!DOCTYPE html>
<html>
	<head>
		<title>Vigilant Media &#8212; {{{ $title or 'the online portfolio of Greg Bueno'}}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="/favicon.png" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/css/facebox.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/typography.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/css/layout.css" type="text/css" media="screen, projection" />
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>		
		<script type="text/javascript" src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/js/modernizr-1.6.min.js"></script>
		<!--[if lt IE 9]><script type="text/javascript" src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/js/html5.js"></script><![endif]-->
	</head>
	<body>
		<div id="masthead">
			<div class="container" class="container">
				<div class="row">
					<header id="masthead-title" class="col-md-6">
						<hgroup class>
							<h1 id="title">
								<a href="/">Vigilant Media</a>
							</h1>
							<h2 id="subtitle">The online portfolio of Greg Bueno</h2>
						</hgroup>
					</header>

					<nav id="nav-main" class="col-md-6">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/projects/">Projects</a></li>
							<li><a href="/resume/">Résumé</a></li>
							<li><a href="{{ $config_url_base['to_wp'] }}/">Blog</a></li>
							<li><a href="/contact/">Contact</a></li>
						</ul>
					</nav>
				</div>
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

			&copy; {{{ date("Y") }}} Greg Bueno
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
