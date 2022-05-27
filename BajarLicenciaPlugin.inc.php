<?php

/**
 * @file bajarLicenciaPlugin.inc.php
 *
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class bajarLicenciaPlugin
 * @brief Plugin class for Bajar Licencia plugin.
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class BajarLicenciaPlugin extends GenericPlugin {

	public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path);
 		if ($success && $this->getEnabled()) {
			HookRegistry::register('TemplateResource::getFilename', array($this, '_overridePluginTemplates'));
		}		
		return $success;
  	}

	/**
	 * Provide a name for this plugin
	 * @return string
	 */
	function getDisplayName() {
		return 'Módulo para Bajar Licencia';
	}

	/**
	 * Provide a description for this plugin
	 * @return String
	 */
	function getDescription() {
		return 'Complementario a CP Plugin (BC). Ver #10542';
	}
}
?>
