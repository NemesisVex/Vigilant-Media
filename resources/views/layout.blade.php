<!DOCTYPE html>
<html>
	<head>
		<title>Vigilant Media &#8212; {{{ $title or 'the online portfolio of Greg Bueno'}}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="apple-touch-icon" sizes="57x57" href="/assets/graphics/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/assets/graphics/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/assets/graphics/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/assets/graphics/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/assets/graphics/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/assets/graphics/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/assets/graphics/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/assets/graphics/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/graphics/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/assets/graphics/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/assets/graphics/favicon/manifest.json">
		<link rel="mask-icon" href="/assets/graphics/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="/assets/graphics/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/assets/graphics/favicon/mstile-144x144.png">
		<meta name="msapplication-config" content="/assets/graphics/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/css/facebox.css" type="text/css" media="screen, projection" />
		<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen, projection" />
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>		
		<script type="text/javascript" src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/js/modernizr-1.6.min.js"></script>
		<!--[if lt IE 9]><script type="text/javascript" src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/js/html5.js"></script><![endif]-->
	</head>
	<body>
		<div id="masthead">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#vm-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Vigilant Media</a>
					</div>

					<div class="collapse navbar-collapse" id="vm-collapse">
						<ul class="nav navbar-nav">
							<li><a href="/">Home</a></li>
							<li><a href="/projects/">Projects</a></li>
							<li><a href="/resume/">Résumé</a></li>
							<li><a href="{{ config( 'global.url_base.to_wp' ) }}/">Blog</a></li>
							<li><a href="/contact/">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
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
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-7828220-7', 'auto');
			ga('send', 'pageview');

		</script>
	</body>
</html>
