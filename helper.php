<?php defined( '_JEXEC' ) or die( 'Restricted access' );

class ModPageHeadingHelper {

	public $params;
	public $module;

	function __construct(&$params,&$module) {

		$this->params =& $params;
		$this->module =& $module;
	}

	public function display() {

		require JModuleHelper::getLayoutPath('mod_pageheading',$this->params->get('layout', 'default'));
	}
}
