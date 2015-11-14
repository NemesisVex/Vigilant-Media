@extends('layout')

@section('content')
			<div class="container">
				<header>
					<h1>Résumé</h1>
				</header>

				<p><a href="/content/greg_bueno_resumex.pdf" class="button"><img src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/images/icons/down-blue.gif" /> Download</a></p>

                {!! $resume !!}
            </div>
@stop