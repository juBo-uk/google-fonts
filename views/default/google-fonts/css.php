<?php
/**
 * Google Fonts
 *
 */

 
 $gf_bodyfont = elgg_get_plugin_setting('gf_bodyfont','google-fonts');
 $gf_bodyfont_size = elgg_get_plugin_setting('gf_bodyfont_size','google-fonts');
// $gf_bodyfont_lh = elgg_get_plugin_setting('gf_bodyfont_lh','google-fonts');
 
 
 $gf_headfont = elgg_get_plugin_setting('gf_headfont','google-fonts');
 $gf_headfont_size = elgg_get_plugin_setting('gf_headfont_size','google-fonts');
 //$gf_headfont_lh = elgg_get_plugin_setting('gf_headfont_lh','google-fonts');
 $gf_headfont_color = elgg_get_plugin_setting('gf_headfont_color','google-fonts');
 $gf_headfont_style = elgg_get_plugin_setting('gf_headfont_style','google-fonts');
 $gf_headfont_height = elgg_get_plugin_setting('gf_headfont_height','google-fonts');
 

 
?>


body {
	font-size: <?php echo $gf_bodyfont_size; ?>;
	line-height: 1.4em;
	font-family: <?php echo $gf_bodyfont; ?>, sans-serif;
	}


.elgg-heading-site,
.elgg-heading-site:hover,
.elgg-heading-site:focus {
	font-size: <?php echo $gf_headfont_size; ?>;
	line-height: 1.4em;
	color: <?php echo $gf_headfont_color; ?>;
	font-style: <?php echo $gf_headfont_style; ?>;
	font-family: <?php echo $gf_headfont; ?>, serif;
	text-shadow: 1px 2px 4px #333;
	text-decoration: none;
	}
	
.elgg-page-default .elgg-page-header > .elgg-inner {
  height: <?php echo $gf_headfont_height; ?>;
}

