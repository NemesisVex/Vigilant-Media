@extends('layout')

@section('content')
			<div class="container">
				<header>
					<h1>Résumé</h1>
				</header>

				<p><a href="/content/greg_bueno_resumex.pdf" class="button"><img src="{{{ VIGILANTMEDIA_CDN_BASE_URI }}}/web/images/icons/down-blue.gif" /> Download</a></p>

				@if (!empty($summary))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Summary</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($summary[0] as $summary_list)
						@if (!empty($summary_list['type']))
						<h4>{{ $summary_list['type'] }}</h4>
						@endif
						<ul class="resume-summary-list">
						@foreach ($summary_list->items[0] as $list_items => $item)
							<li>{{{ $item }}}</li>
						@endforeach
						</ul>
					@endforeach
					</div>
				</div>

				@endif

				@if (!empty($skills))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Skills</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($skills[0] as $skill_list)
						<p>
							<em>{{ $skill_list['type'] }}</em><br />
							{{ $skill_list->skill_list }}
						</p>
					@endforeach
					</div>
				</div>
				@endif

				@if (!empty($professional))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Professional experience</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($professional[0] as $i => $pro)
						<h4>{{ $pro->title }}</h4>

						<ul class="company-info">
							<li>{{ $pro->company }}</li>
							<li>{{ $pro->location }}</li>
							<li><em>{{ $pro->dates }}</em></li>
						</ul>

						<ul class="resume-duty">
						@foreach ($pro->duties[0] as $duty)
							<li>{!! $duty !!}</li>
						@endforeach
						</ul>
					@endforeach
					</div>
				</div>
				@endif

				@if (!empty($projects))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Side Projects</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($projects[0] as $i => $project)
						<h4>{{ $project->title }}</h4>

						<ul class="company-info">
							<li>{{ $project->company }}</li>
							<li>{{ $project->location }}</li>
							<li><em>{{ $project->dates }}</em></li>
						</ul>

						<ul class="resume-duty">
						@foreach ($project->duties[0] as $duty)
							<li> {{ $duty }}</li>
						@endforeach
						</ul>
					@endforeach
					</div>
				</div>
				@endif

				@if (!empty($miscellaneous))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Miscellaneous experience</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($miscellaneous[0] as $i => $misc)
						<h4>{{ $misc->title }}</h4>

						<ul class="company-info">
							<li>{{ $misc->company }}</li>
							<li>{{ $misc->location }}</li>
							<li><em>{{ $misc->dates }}</em></li>
						</ul>

						<ul class="resume-duty">
						@foreach ($misc->duties[0] as $duty)
							<li> {{ $duty }}</li>
						@endforeach
						</ul>
					@endforeach
					</div>
				</div>
				@endif

				@if (!empty($education))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Education</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($education[0] as $ed)
						<h4>{{ $ed->school }}</h4>

						<ul class="company-info">
							<li>{{ $ed->degree }}</li>
							<li>{{ $ed->location }}</li>
							<li><em>{{ $ed->dates }}</em></li>
						</ul>
					@endforeach
					</div>
				</div>
				@endif

				@if (!empty($awards))
				<div class="row">
					<div class="resume-column-1 col-md-4">
						<h2>Awards</h2>
					</div>

					<div class="resume-column-2 col-md-8">
					@foreach ($awards[0] as $award)
						<h4>{{ $award->honor }}</h4>

						<p>
							{{ $award->contest }}
						</p>
					@endforeach
					</div>
				</div>
				@endif
@stop