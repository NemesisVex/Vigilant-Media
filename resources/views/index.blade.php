@extends('layout')

@section('content')
				<div class="row">
					<section id="introduction" class="col-md-12">
						<p class="lead">I started out as a content producer for the newspaper industry in 1997, then retrained to become a web application developer in 1999.</p>

						<p>I work primarily in server-side web application development, but if need be, I can throw together a user interface.</p>

						<p>My first sites were built with a custom-made content management system, which I later migrated to <a href="http://ellislab.com/codeigniter">CodeIgniter</a>. These days, I'm more likely to work with <a href="http://wordpress.org/">Wordpress</a> and <a href="http://laravel.com/">Laravel</a>.</p>

						<p>Other applications I've worked with include <a href="http://sugarcrm.com/">SugarCRM</a>, <a href="http://drupal.org/">Drupal</a> and <a href="http://movabletype.org/">Movable Type</a>.</p>
					</section>
				</div>

				<div id="panels" class="row">
					<section id="projects" class="three-column-single col-md-4">
						<header class="text-center">
							<a href="/projects/"><img src="/images/shellscript.png" width="64" height="64" /></a>
							<h3><a href="/projects/">Projects</a></h3>
						</header>

						<p>Browse through work I've done in the past and projects currently in development.</p>
					</section>

					<section id="resume" class="three-column-single col-md-4">
						<header class="text-center">
							<a href="/resume/"><img src="/images/file_doc.png" width="64" height="64" /></a>
							<h3><a href="/resume/">Résumé</a></h3>
						</header>

						<p>Explore my employement history and get an overview of my skill set.</p>
					</section>

					<section id="blog" class="three-column-single-last col-md-4">
						<header class="text-center">
							<a href="http://blog.vigilantmedia.com/"><img src="/images/easymoblog.png" width="64" height="64" /></a>
							<h3><a href="http://blog.vigilantmedia.com/">Blog</a></h3>
						</header>

						<p><a href="http://blog.vigilantmedia.com/">Bit-Wise Dilletante</a> is where I talk about technology and work.</p>
					</section>
				</div>

				<div class="row">
					<section id="contact" class="col-md-12">
						<p>Want to get in touch? <a href="/contact/">Send an e-mail</a>. You can also find me on these and other fine web destinations:</p>

						<ul class="nav-social">
							<li><a href="http://bitbucket.org/NemesisVex"><img src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/images/icons/bitbucket-16x16.png" alt="[Bitbucket]" title="[Bitbucket]" /></a></li>
							<li><a href="http://www.linkedin.com/pub/greg-bueno/3/3a3/a98"><img src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/images/icons/linkedin.png" alt="[LinkedIn]" title="[LinkedIn]" /></a></li>
							<li><a href="http://www.twitter.com/NemesisVex"><img src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/images/icons/twitter.png" alt="[Twitter]" title="[Twitter]" /></a></li>
						</ul>
					</section>
				</div>
@stop