<p>To use the Google Fonts plugin, you will need to use information from the <a style='color:blue; text-decoration:underline' href='http://www.google.com/fonts'>Google Fonts Website</a> 
<p>In this plugin, you will be able to specify two fonts - one for the title and another for the main body text. The information you need from the Google Fonts Website is first the <strong> FONT FAMILY</strong>, and then - depending on the options available - the <strong>FONT WEIGHT</strong> (eg: 400, 700) and <strong>STYLE</strong> (italic, normal).  It will be helpful to open the Google Fonts Website in a new browser window, or tab, before you begin.</p>    
<div style="background-color:#F5DEB3; border: 2px solid #DEB887; padding:20px;">
<h2>Title Font Options</h2><br />
<img style="border: 2px solid #fff" src="<?php echo elgg_get_site_url();?>/mod/google-fonts/graphics/titlefont.png" alt="title font" />
<?php

echo "</p><p>[1] First choose your <strong>Title Font</strong> from the selection at <a style='color:blue; text-decoration:underline' href='http://www.google.com/fonts'>Google Fonts</a> <em>(example = 'Molengo' or 'Londrina Shadow')</em></p>";  

	if(empty($vars['entity']->gf_headfont)){
	$vars['entity']->gf_headfont = "Londrina Shadow";
	}
                                      
echo elgg_view('input/text', array(     'name' => 'params[gf_headfont]', 
                                        'value' => $vars['entity']->gf_headfont,
                                        'class' => 'google-fonts', ) ); 
																				
																				
echo "<br /><br /><p>[2] Title Font Weight - from Font Family options <em>(example = '400', '700')</em></p>";																			
 if(empty($vars['entity']->gf_headfont_weight)){
  $vars['entity']->gf_headfont_weight = "400";
  }

echo elgg_view('input/text', array(     'name' => 'params[gf_headfont_weight]', 
                                        'value' => $vars['entity']->gf_headfont_weight,
                                        'class' => 'google-fonts', ) ); 																				
																				
echo "<br /><br /><p>[3] Title Font Style - from Font Family options<em>(example = 'italic', 'normal')</em></p>";


  if(empty($vars['entity']->gf_headfont_style)){
  $vars['entity']->gf_headfont_style = "italic";
  }

echo elgg_view('input/text', array(     'name' => 'params[gf_headfont_style]', 
                                        'value' => $vars['entity']->gf_headfont_style,
                                        'class' => 'google-fonts', ) ); 																				
																				
																				
echo "<br /><br /><p>[4] Title Font Size <em>(example = '2em')</em></p>";


	if(empty($vars['entity']->gf_headfont_size)){
	$vars['entity']->gf_headfont_size = "2em";
	}

echo elgg_view('input/text', array(     'name' => 'params[gf_headfont_size]', 
                                        'value' => $vars['entity']->gf_headfont_size,
                                        'class' => 'google-fonts', ) ); 
																				
																				
																				
echo "<br /><br /><p>[5] Title Font Colour <em>(example = '#fff')</em></p>";

  if(empty($vars['entity']->gf_headfont_color)){
  $vars['entity']->gf_headfont_color = "#fff";
	}
                                      
echo elgg_view('input/text', array(     'name' => 'params[gf_headfont_color]', 
                                        'value' => $vars['entity']->gf_headfont_color,
                                        'class' => 'google-fonts', ) ); 


?>																				
</div>		
<br /><br />		
<div style="background-color:#F5DEB3; border: 2px solid #DEB887; padding:20px;">
<h2>Body Font Options</h2><br />
<img style="border: 4px solid #fff" src="<?php echo elgg_get_site_url();?>/mod/google-fonts/graphics/bodyfont.png" alt="title font" />																
<?php																				
echo "<br /><br /><p>[1] Next choose your <strong>Body Font</strong> <em>(example = 'Gudea')</em></p>";
																					
  if(empty($vars['entity']->gf_bodyfont)){
  $vars['entity']->gf_bodyfont = "Gudea";
  }
                                      
echo elgg_view('input/text', array(     'name' => 'params[gf_bodyfont]', 
                                        'value' => $vars['entity']->gf_bodyfont,
                                        'class' => 'google-fonts', ) ); 
																				
																				
																
echo "<br /><br /><p>[2] Body Font Weight and style - from Font Family options <em>(example = '400', '400,400italic,700', etc... look at the options available for your chosen font-family)</em></p>";																			
 if(empty($vars['entity']->gf_bodyfont_weight)){
  $vars['entity']->gf_bodyfont_weight = "400,400italic,700";
  }

echo elgg_view('input/text', array(     'name' => 'params[gf_bodyfont_weight]', 
                                        'value' => $vars['entity']->gf_bodyfont_weight,
                                        'class' => 'google-fonts', ) ); 																				
																				
																				
																				
																				

echo "<br /><br /><p>[3] Body Font Size <em>(example = '80%')</em></p>";


	if(empty($vars['entity']->gf_bodyfont_size)){
	$vars['entity']->gf_bodyfont_size = "80%";
	}

echo elgg_view('input/text', array(     'name' => 'params[gf_bodyfont_size]', 
                                        'value' => $vars['entity']->gf_bodyfont_size,
                                        'class' => 'google-fonts', ) );
																				
																				echo "<br><br>"; 
?>
</div>																				

Note: It is very easy to end up with a mess, especially if you don't have any eperience of web typography, but there are examples of good font pairings on the web for you to copy. Eg <a style='color:blue; text-decoration:underline' href="http://designshack.net/articles/typography/10-more-great-google-font-combinations-you-can-copy/"> 10 more Great Google Font Combinations You Can Copy</a>.<br /><br />


<div style="background-color:#F5DEB3; border: 2px solid red; padding:20px;">
<?php
echo "<p><span style='color: red'> Warning! Leave this empty unless you need it</span>. I have included this option because changing the header height (just a little) can make your title font look better. <strong>The height you choose needs to take into account the height of the header of your theme.</strong> <br /><br /><strong>[*] Header Height</strong> <em>(example, the Elgg default is '90px')</em></p>";


	if(empty($vars['entity']->gf_headfont_height)){
	$vars['entity']->gf_headfont_height = "";
	}

echo elgg_view('input/text', array(     'name' => 'params[gf_headfont_height]', 
                                        'value' => $vars['entity']->gf_headfont_height,
                                        'class' => 'google-fonts', ) ); 
																				
?>																																								
</div>																				