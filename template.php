<?php


/* funciones globales personalizadas 
******************************************** */

	
/*function EjecutarBlockCache($blockid, $arguments)
{
		// colocar un nombre global
		$uniqueid = "LOC-block-".$blockid."-".$arguments; 
			
		// id unico
		$uniqueidmd5 = md5($uniqueid); 
		// print $uniqueidmd5; 
			
		$currentdate = date('Y-m-d H:i:s');
		
		if ($arguments == "corto") { $cachetime = 60; $host='cachedrupal.bmgoix.cfg.usw1.cache.amazonaws.com'; }
          	else if ($arguments == "mediano") { $cachetime = 300; $host='cachedrupal.bmgoix.cfg.usw1.cache.amazonaws.com'; }
		else if ($arguments == "largo") { $cachetime = 600; $host='cachedrupal.bmgoix.cfg.usw1.cache.amazonaws.com'; }
                else if ($arguments == "hora") { $cachetime = 3600; $host='cachedrupal.bmgoix.cfg.usw1.cache.amazonaws.com'; }
		else { $cachetime = 360;  $host='cachedrupal.bmgoix.cfg.usw1.cache.amazonaws.com'; }
		 
		$port=22422;
		$memcache = new Memcache();
		$memcache->addServer($host, $port);
		$stats = @$memcache->getExtendedStats();
		$available = (bool)$stats["$host:$port"];
		if ($available && @$memcache->connect($host, $port))
		{
			$var = $memcache->get($uniqueidmd5);  
			if ($var) {	 $blockhtmloutput = $var; return $blockhtmloutput; }
			else
			{
		        // $block = block_load('block', 39);
        		// $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));

		        $block = block_load('block', $blockid);
				$bloquetmpredner = _block_render_blocks(array($block));  
				$blockhtmloutput = drupal_render(_block_get_renderable_array($bloquetmpredner))."<div style='display:none' class='execdate'>bcached ".$cachetime.": ".$currentdate."</div>";;
				$memcache->set($uniqueidmd5, $blockhtmloutput, 0, $cachetime);

				return $blockhtmloutput;
			} 
		} 		
		else  
		{   
		        $block = block_load('block', $blockid);
  			$bloquetmpredner = _block_render_blocks(array($block));
			$blockhtmloutput = drupal_render(_block_get_renderable_array($bloquetmpredner))."<div style='display:none' class='execdate'>bnoncached ".$cachetime.": ".$currentdate."</div>";;
		}
				
		return $blockhtmloutput;
}



/**
 * Implements hook_html_head_alter().
 * We are overwriting the default meta character type tag with HTML5 version.
 */
function framework_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function framework_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $heading = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // Uncomment to add current page to breadcrumb
	// $breadcrumb[] = drupal_get_title();
    return '<nav class="breadcrumb">' . $heading . implode(' » ', $breadcrumb) . '</nav>';
  }
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function framework_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function framework_preprocess_node(&$variables) {
  $variables['submitted'] = t('Published by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

/**
 * Preprocess variables for region.tpl.php
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
function framework_preprocess_region(&$variables, $hook) {
  // Use a bare template for the content region.
  if ($variables['region'] == 'content') {
    $variables['theme_hook_suggestions'][] = 'region__bare';
  }
}

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function framework_preprocess_block(&$variables, $hook) {
  // Use a bare template for the page's main content.
  if ($variables['block_html_id'] == 'block-system-main') {
    $variables['theme_hook_suggestions'][] = 'block__bare';
  }
  $variables['title_attributes_array']['class'][] = 'block-title';
}

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function framework_process_block(&$variables, $hook) {
  // Drupal 7 should use a $title variable instead of $block->subject.
  $variables['title'] = $variables['block']->subject;
}

/**
 * Changes the search form to use the "search" input element of HTML5.
 */
function framework_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}


function op_preprocess_page(&$vars, $hook)
{
    if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
      $tid = arg(2);
      $vname = taxonomy_vocabulary_load(taxonomy_term_load($tid)->vid)->machine_name;
      $vars['theme_hook_suggestions'][] = 'page__vocabulary__'.$vname;
    }

    $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
}

function op_preprocess_search_result(&$variables) {
  // Add node object to result, so we can display imagefield images in results.
  $n = node_load($variables['result']['node']->entity_id);
  $n && ($variables['node'] = $n);
}

// function op_theme() {
//   $items = array();  
//   $items['user_login'] = array(
//     'render element' => 'form',
//     'path' => drupal_get_path('theme', 'op') . '',
//     'template' => 'page--user--login',
//     'preprocess functions' => array(
//        'op_preprocess_user_login'
//     ),
//   );

//   $items['user_pass'] = array(
//     'render element' => 'form',
//     'path' => drupal_get_path('theme', 'op') . '',
//     'template' => 'page--user--password',
//     'preprocess functions' => array(
//        'op_preprocess_user_pass'
//     ),
//   );

//   $items['user_register_form'] = array(
//     'render element' => 'form',
//     'path' => drupal_get_path('theme', 'op'),
//     'template' => 'page--user--register',
//     'preprocess functions' => array(
//       'op_preprocess_user_register_form'
//     ),
//   );

//   return $items;
// }


