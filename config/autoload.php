<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentIconHeadlineText' => 'system/modules/ect_toobox/elements/ContentIconHeadlineText.php',
	'Contao\ContentSchemaOrg'        => 'system/modules/ect_toobox/elements/ContentSchemaOrg.php',
	'Contao\ContentECTStripline'     => 'system/modules/ect_toobox/elements/ContentECTStripline.php',

	// Classes
	'ModuleECTHeader'                => 'system/modules/ect_toobox/classes/ModuleECTHeader.php',
	'HooksECT'                       => 'system/modules/ect_toobox/classes/HooksECT.php',

	// Widgets
	'Contao\IconSelect'              => 'system/modules/ect_toobox/widgets/IconSelect.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_schemaorg'        => 'system/modules/ect_toobox/templates/elements',
	'ce_stripeline'       => 'system/modules/ect_toobox/templates/elements',
	'ce_iconheadlinetext' => 'system/modules/ect_toobox/templates/elements',
	'j_softNav'           => 'system/modules/ect_toobox/templates/jquery',
	'j_offCanvas'         => 'system/modules/ect_toobox/templates/jquery',
	'mod_ectheader'       => 'system/modules/ect_toobox/templates/modules',
));