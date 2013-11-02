<?php
action_gatekeeper();

/**
 * Saves global plugin settings.
 *
 * This action can be overriden for a specific plugin by creating the
 * settings/<plugin_id>/save action in that plugin.
 *
 * @uses array $_REQUEST['params']    A set of key/value pairs to save to the ElggPlugin entity
 * @uses int   $_REQUEST['plugin_id'] The ID of the plugin
 *
 * @package Elgg.Core
 * @subpackage Plugins.Settings
 */



$params = get_input('params');
$plugin_id = get_input('plugin_id');
$plugin = elgg_get_plugin_from_id($plugin_id);

if (!($plugin instanceof ElggPlugin)) {
	register_error(elgg_echo('plugins:settings:save:fail', array($plugin_id)));
	forward(REFERER);
}

$plugin_name = $plugin->getManifest()->getName();

$result = false;



//this bit sets the settings...

	foreach ($params as $k => $v) {
   	$result = $plugin->setSetting($k, $v);
		if (!$result) {
			register_error(elgg_echo('plugins:settings:save:fail', array($plugin_name)));
			forward(REFERER);
			exit;
		}
	}
	
	


	
 $gf_bodyfont = elgg_get_plugin_setting('gf_bodyfont','google-fonts');
 $gf_bodyfont_size = elgg_get_plugin_setting('gf_bodyfont_size','google-fonts');
 $gf_bodyfont_weight = elgg_get_plugin_setting('gf_bodyfont_weight','google-fonts');


 
 $gf_headfont = elgg_get_plugin_setting('gf_headfont','google-fonts');
 $gf_headfont_size = elgg_get_plugin_setting('gf_headfont_size','google-fonts'); 
 $gf_headfont_color = elgg_get_plugin_setting('gf_headfont_color','google-fonts');
 $gf_headfont_style = elgg_get_plugin_setting('gf_headfont_style','google-fonts');
 $gf_headfont_weight = elgg_get_plugin_setting('gf_headfont_weight','google-fonts');
 $gf_headfont_height = elgg_get_plugin_setting('gf_headfont_height','google-fonts');

	

 
 
 

	
elgg_invalidate_simplecache();
elgg_reset_system_cache();
system_message(elgg_echo('plugins:settings:save:ok', array($plugin_name)));
forward(REFERER);