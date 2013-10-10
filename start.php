<?php
elgg_register_event_handler('init', 'system', 'googlefonts_init');

function googlefonts_init() {
	       elgg_extend_view('css/elgg', 'google-fonts/css');		     
         elgg_extend_view ('page/elements/head','google-fonts/meta');

		$base = elgg_get_plugins_path() . 'google-fonts/actions/google-fonts';
		elgg_register_action('google-fonts/settings/save', "$base/save.php", 'admin');

}
