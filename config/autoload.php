<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Ect_contentelements
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentIconHeadlineText' => 'system/modules/ect_contentelements/elements/ContentIconHeadlineText.php',
	'Contao\ContentSchemaOrg'        => 'system/modules/ect_contentelements/elements/ContentSchemaOrg.php',
	'Contao\ContentECTStripline'     => 'system/modules/ect_contentelements/elements/ContentECTStripline.php',

	// Classes
	'ModuleECTHeader'                => 'system/modules/ect_contentelements/classes/ModuleECTHeader.php',
	'XtndElements'                   => 'system/modules/ect_contentelements/classes/XtndElements.php',

	// Widgets
	'Contao\IconSelect'              => 'system/modules/ect_contentelements/widgets/IconSelect.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_schemaorg'        => 'system/modules/ect_contentelements/templates/elements',
	'ce_stripeline'       => 'system/modules/ect_contentelements/templates/elements',
	'ce_iconheadlinetext' => 'system/modules/ect_contentelements/templates/elements',
	'mod_ectheader'       => 'system/modules/ect_contentelements/templates/modules',
));
