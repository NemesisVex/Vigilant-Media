@extends('layout')

@section('content')
				<script type="text/javascript" src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/js/facebox.js"></script>
				<script type="text/javascript">
				var facebox_options = {
					closeImage: '{{ VIGILANTMEDIA_CDN_BASE_URI }}/web/images/closelabel.gif',
					loadingImage: '{{ VIGILANTMEDIA_CDN_BASE_URI }}/web/images/loading.gif'
				};
				$(function () {
					$('a[rel*=facebox]').facebox(facebox_options);
				});
				</script>

				<header>
					<h1>Projects</h1>
				</header>
				
				<section id="current" class="full-column-last">
					<header>
						<h2>Current</h2>
					</header>
					
					<div class="row">
						<article class="two-column-single col-md-6">

							<h3><a href="https://bitbucket.org/observantrecords/profile/repositories">Observant Records Network</a></h3>

							<a href="https://bitbucket.org/observantrecords/profile/repositories"><img src="/assets/images/observant_records_o_square_logo.png" class="img-align-right" alt="[Observant Records]" title="[Observant Records]" width="128" /></a>

							<p>WordPress powers the official sites of my various music projects, including <a href="http://observantrecords.com/">Observant Records</a>, <a href="http://eponymous4.com/">Eponymous 4</a>, <a href="http://emptyensemble.com/">Empty Ensemble</a> and <a href="http://shinkyokuadvocacy.com/">Shinkyoku Advocacy</a>.</p>

							<p>An <a href="https://bitbucket.org/observantrecords/observant-records-administration">administration site</a> maintains release information, which is accessed through a <a href="https://bitbucket.org/observantrecords/observant-records-artist-connector-for-wordpress">custom-built WordPress plug-in</a>.</p>

							<p>The source code for the network is available to view on <a href="https://bitbucket.org/observantrecords/profile/repositories">Bitbucket</a> or <a href="https://github.com/observantrecords?tab=repositories">Github</a>.</p>

						</article>

						<article class="two-column-single-last col-md-6">

							<h3><a href="https://bitbucket.org/NemesisVex/profile/repositories">Vigilant Media Network</a></h3>

							<a href="https://bitbucket.org/NemesisVex/profile/repositories"><img src="/assets/images/wordpress-logo-notext-rgb.png" class="img-align-right" alt="[Wordpress]" title="[Wordpress]" width="128" /></a>

							<p>The Vigilant Media Network is a set of personal web projects run on WordPress or built with frameworks such as CodeIgniter and Laravel.</p>

							<p><a href="http://archive.musicwhore.org/">Musicwhore.org Archive</a> is a WordPress blog with a <a href="https://bitbucket.org/NemesisVex/musicwhore-artist-connector-for-wordpress">custom plugin</a> that connects to an <a href="https://bitbucket.org/NemesisVex/musicwhore.org-administration">external database</a> and the Amazon Affiliate Marketing API.</p>

							<p><a href="https://bitbucket.org/NemesisVex/movable-type-id-mapper-for-wordpress">Another plugin</a> maps Movable Type entry IDs with posts imported into Wordpress.</p>

							<p>The source code for the network is available to view on <a href="https://bitbucket.org/NemesisVex/profile/repositories">Bitbucket</a> or <a href="https://github.com/NemesisVex?tab=repositories">Github</a>.</p>

						</article>
					</div>

				</section>

				<section id="past" class="full-column-last">
					<header>
						<h2>Past</h2>
					</header>

					<div class="three-columns row">
						<article class="three-column-single col-md-4">
							<p class="centered"><a href="/assets/images/_full_vm_folio_uw_research_website.png" rel="facebox"><img src="/assets/images/vm_folio_uw_research_website.png" alt="[University of Washington Research Website]" title="[University of Washington Research Website]" class="folio-image" /></a></p>

							<h3>University of Washington Research Website</h3>
							
							<p>The <a href="http://www.washington.edu/research/">University of Washington Research website</a> relaunched as a WordPress site, replacing a custom-built content management system.</p>
							
							<p>A contracted agency designed the look and feel, but the implementation was left to UW staff, including myself.</p>

							<p>The new site required the development of numerous custom plugins and the creation of a child theme.</p>
						</article>

						<article class="three-column-single col-md-4">
							<p class="centered"><a href="/assets/images/_full_vm_folio_epicom_cases_portal_v02.jpg" rel="facebox"><img src="/assets/images/vm_folio_epicom_cases_portal_v02.jpg" alt="[Epicom Cases Portal]" title="[Epicom Cases Portal]" class="folio-image" /></a></p>

							<h3>SugarCRM: Cases Portal</h3>

							<p>A number of clients asked Epicom to build external web sites their customers may access to keep track of cases filed through SugarCRM.</p>

							<p>These clients wanted such portals to be simple and expose only specific fields.</p>

							<p>So I helped to build these portal from the ground-up using the Sugar REST API to read from and write to SugarCRM.</p>
						</article>

						<article class="three-column-single-last col-md-4">
							<p class="centered"><a href="/assets/images/_full_vm_folio_mt_force_preview_plugin.jpg" rel="facebox"><img src="/assets/images/vm_folio_mt_force_preview_plugin.jpg" alt="[Movable Type Force Preview Plugin]" title="[Movable Type Force Preview Plugin]" class="folio-image" /></a></p>

							<h3>Movable Type Force Preview plugin</h3>

							<p><a href="https://bitbucket.org/NemesisVex/movable-type-forcepreview">Force Preview for Movable Type</a> prevents comment spam by requiring users to preview a comment before submitting it.</p>

							<p><a href="http://unicom.com/">Chip Rosenthal</a> created the Force Preview plugin for Movable Type 3. I updated it to work with Movable Type 4 and 5.</p>
						</article>
					</div>

				</section>
@stop