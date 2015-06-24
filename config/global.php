<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 6/20/15
 * Time: 7:32 PM
 */

define('VIGILANTMEDIA_CDN_BASE_URI', env('VIGILANTMEDIA_CDN_BASE_URI', '//cdn.vigilantmedia.com'));

return [
	'url_base' => array(
		'to_eponymous4' => env('TO_EPONYMOUS4', '//eponymous4.com'),
		'to_emptyensemble' => env('TO_EMPTYENSEMBLE', '//emptyensemble.com'),
		'to_observantrecords' => env('TO_OBSERVANTRECORDS', '//observantrecords.com'),
		'to_penziasandwilson' => env('TO_PENZIASANDWILSON', '//penziasandwilson.com'),
		'to_shinkyokuadvocacy' => env('TO_SHINKYOKUADVOCACY', '//shinkyokuadvocacy.com'),
		'to_archive' => env('TO_ARCHIVE', '//archive.musicwhore.org'),
		'to_musicwhore' => env('TO_MUSICWHORE', '//musicwhore.org'),
		'to_filmwhore' => env('TO_FILMWHORE', '//filmwhore.org'),
		'to_tvwhore' => env('TO_TVWHORE', '//tvwhore.org'),
		'to_vigilantmedia' => env('TO_VIGILANTMEDIA', '//vigilantmedia.com'),
		'to_wp' => env('TO_WP', '//blog.vigilantmedia.com'),
		'to_ddn' => env('TO_DDN', '//dev.duran-duran.net'),
		'to_austinstories' => env('TO_AUSTINSTORIES', '//austin-stories.com'),
	),
];
