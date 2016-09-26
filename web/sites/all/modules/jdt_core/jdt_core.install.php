<?php

function ena_modules($name) {
	$enable = module_enable($name);
	if (!$enable){
		throw new Exception('Unresolved dependencies', 1);
	}

}

/**
 * Implements hook_update().
 *
 * Enables 11 modules, and disabled 3
 *
 */
function jdt_core_update_1() {
  ena_modules('views');
  ena_modules('features');
  ena_modules('strongarm');
  ena_modules('context');
  ena_modules('pathauto');
  ena_modules('diff');
  ena_modules('libraries');
  ena_modules('jquery_update');
  ena_modules('devel');
  ena_modules('module_filter');
  ena_modules('admin_menu');

  module_disable('toolbar');
  module_disable('shortcut');
  module_disable('overlay');
} 