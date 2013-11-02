 <?php
 //*******
 
 $gf_bodyfont = elgg_get_plugin_setting('gf_bodyfont','google-fonts'); 
 $gf_headfont = elgg_get_plugin_setting('gf_headfont','google-fonts');
 $gf_headfont_weight = elgg_get_plugin_setting('gf_headfont_weight','google-fonts');
 $gf_bodyfont_weight = elgg_get_plugin_setting('gf_bodyfont_weight','google-fonts');
 $gf_headfont_style = elgg_get_plugin_setting('gf_headfont_style','google-fonts');
 $gf_bodyfont = str_replace(" ", "+", $gf_bodyfont);
 $gf_headfont = str_replace(" ", "+", $gf_headfont);
 ?>

 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=<?php echo $gf_headfont, ":",  $gf_headfont_weight, $gf_headfont_style; ?>|<?php echo $gf_bodyfont, ":", $gf_bodyfont_weight; ?>"> 
 