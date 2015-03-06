<?php

/**
 * 
 * @package ect_toolbox
 * Copyright (C) 2015 Harald Huber
 * http://www.easy-contao-themes.com
 *
*/

/**
 * Include font-awesome.css in Frontend and Backend
 * !!!!!!!!!! move this to class file !!!!!!!!!!!!!
 */
$GLOBALS['TL_CSS'][] = 'system/modules/ect_toolbox/assets/lib/fontawesome/css/font-awesome.min.css';
$GLOBALS['TL_CSS'][] = 'system/modules/ect_toolbox/assets/lib/fontawesome/css/font-awesome-social.min.css';

/**
 * Widget
 */
$GLOBALS['BE_FFL']['iconSelect'] = 'IconSelect';

/**
 * Content Elements
 */
$GLOBALS['TL_CTE']['contentElements']['IconHeadlineText'] = 'ContentIconHeadlineText';
$GLOBALS['TL_CTE']['contentElements']['SchemaOrg'] = 'ContentSchemaOrg';
$GLOBALS['TL_CTE']['contentElements']['ECTStripline'] = 'ContentECTStripline';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['ect']['ectheader'] = 'ModuleECTHeader';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('HooksECT', 'prepareContentElements');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('HooksECT', 'preparePage');
#$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('HooksECT', 'myParseFrontendTemplate');
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('HooksECT', 'myParseFrontendTemplate');
?>