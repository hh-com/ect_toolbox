<?php

/**
 * 
 * @package ect_toolbox
 * Copyright (C) 2015 Harald Huber
 * http://www.harald-huber.com
 *
 */

/* Create CE for Schema.org Data */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = "schemaOrgType";

$GLOBALS['TL_DCA']['tl_content']['palettes']['SchemaOrg'] = '{type_legend},type,headline;{schema_legend},schemaOrgType;{reference_legend:hide},schemaOrgItemRef;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_person'] =
('schemaOrg_name,schemaOrg_email,schemaOrg_url,schemaOrg_birthDate,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber;{schemaImage_legend:hide},schemaOrg_image,size;schemaOrg_htmlContainer;'
);
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_organization'] =
(	'schemaOrgTypeOfOrganisation,schemaOrgTypeOfOrganisationTxt,schemaOrg_name,schemaOrg_founder,schemaOrg_email,schemaOrg_url,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber,schemaOrg_taxID,schemaOrg_fbgericht,schemaOrg_vatID;{schemaImage_legend:hide},schemaOrg_image,size;schemaOrg_htmlContainer;'
);
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_single'] =
(	'schemaOrg_name,schemaOrg_birthDate,schemaOrg_founder,schemaOrg_email,schemaOrg_url,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber,schemaOrg_taxID,schemaOrg_fbgericht,schemaOrg_vatID;{schemaImage_legend:hide},schemaOrg_image, size;schemaOrg_htmlContainer;'
);

$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgType'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgType'],
	'exclude'                 => true,
	'default'                 => 'person',
	'inputType'               => 'select',
	'options'                 => array('person', 'organization', 'single'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOption'],
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_htmlContainer'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_htmlContainer'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>false, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
    'explanation'             => 'insertTags',
    'sql'                     => "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgTypeOfOrganisation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisation'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('Organization', 'LocalBusiness', 'NGO', 'Corporation', 'GovernmentOrganization', 'EducationalOrganization', 'SportsTeam', 'PerformingGroup'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationOption'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgTypeOfOrganisationTxt'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationTxt'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_name'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_founder'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_founder'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_url'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'decodeEntities'=>true,'multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_description'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_description'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>false, 'helpwizard'=>false, 'style'=>'height:66px', 'tl_class'=>'clr'),
	'sql'                     => "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_birthDate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_birthDate'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(10) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_postOfficeBoxNumber'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postOfficeBoxNumber'],
	'exclude'                 => true,
	'search'                  => true,
	'default'                  => array('PO Box','1234'),
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_streetAddress'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_streetAddress'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_postalCode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postalCode'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50', 'nospace'=>false,'multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressLocality'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressLocality'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressRegion'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressRegion'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressCountry'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressCountry'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_email'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_email'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_telephone'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_telephone'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_faxNumber'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_faxNumber'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_taxID'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_taxID'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_fbgericht'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_fbgericht'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_vatID'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_vatID'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
if(version_compare(VERSION, '3.2', '<'))
{
	$sql = "varchar(255) NOT NULL default ''";
}
else
{
	$sql = "binary(16) NULL";
}

$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_image'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_image'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>false, 'tl_class'=>'clr w50'),
	'sql'                     => $sql,
	'save_callback' => array
	(
		array('tl_content', 'storeFileMetaInformation')
	)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgItemRef'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgItemRef'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'long m12'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

 /* Icon Headline */
$GLOBALS['TL_DCA']['tl_content']['palettes']['IconHeadlineText'] = '{type_legend},type,headline;{icon_legend},iconSelect,floating,centerIcon,iconSize,iconRotate;{link_legend},url,target;{text_legend},text;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['iconSelect'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconSelect'],
	'exclude'                 => true,
	'inputType'               => 'iconSelect',
	'sql'                     => "varchar(56) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['centerIcon'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['centerIcon'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['iconSize'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconSize'],
	'default'                 => 100,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(200,150,100,80,60),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '100'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['iconRotate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconRotate'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

 /* Separator / Stripline */
$GLOBALS['TL_DCA']['tl_content']['palettes']['ECTStripline'] = '{type_legend},type;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['floating']['load_callback'][] = array('tl_content_ect_ext', 'changeLangText');
$GLOBALS['TL_DCA']['tl_content']['fields']['text']['load_callback'][] = array('tl_content_ect_ext', 'removeTextMandatory');
$GLOBALS['TL_DCA']['tl_content']['fields']['url']['load_callback'][] = array('tl_content_ect_ext', 'removeTextMandatory');

/* Add FontIcon to Contentelement List*/
$GLOBALS['TL_DCA']['tl_content']['palettes']['list'] = str_replace('listitems;', 'listitems;{icon_legend},iconShow,iconSelect;', $GLOBALS['TL_DCA']['tl_content']['palettes']['list']);

$GLOBALS['TL_DCA']['tl_content']['fields']['iconShow'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconShow'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

/* Add Responsive Features */
if (Input::get('do') == 'article')
foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key=>$value)
{
	// don't add {contentWidth_legend},selectContentWidth,addBorder,addBottonLine,forceNewRow; to the __selector__, sliderStop, html...
	if (
                $key != '__selector__' && 
                $key != 'sliderStop' && 
                $key != 'accordionStop' && 
               # $key != 'html' && 
                $key != 'ECTStripline')
	{
		$GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(',type', ',type;{contentWidth_legend},selectContentWidth,addBorder,addBottonLine,forceNewRow;', $GLOBALS['TL_DCA']['tl_content']['palettes'][$key]);
	}
}
			
$GLOBALS['TL_DCA']['tl_content']['fields']['selectContentWidth'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['selectContentWidth'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(12,11,10,9,8,7,6,5,4,3,2,1), 
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['selectContentWidthOption'],
	'eval'                    => array('mandatory' => true, 'helpwizard' => true),
        'explanation'             => 'selectContentWidthExplanation',
	'sql'                     => "smallint(5) unsigned NOT NULL default '12'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['addBorder'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addBorder'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['addBottonLine'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addBottonLine'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['forceNewRow'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['forceNewRow'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

/* 
 * Hidden field for element ROW
 * This field contains either row_start or row_end
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('tl_content_ect_ext','addRowClass');
# rebuild addRow on drag/drop and cut
$GLOBALS['TL_DCA']['tl_content']['config']['oncut_callback'][] = array('tl_content_ect_ext','addRowClass');
# rebuild addRow when delete element
$GLOBALS['TL_DCA']['tl_content']['config']['ondelete_callback'][] = array('tl_content_ect_ext','addRowClass');

$GLOBALS['TL_DCA']['tl_content']['list']['operations']['toggle']['button_callback'] = array('tl_content_ect_ext','toggleIcon');

$GLOBALS['TL_DCA']['tl_content']['fields']['responsiveRow'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['responsiveRow'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>''),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

class tl_content_ect_ext extends tl_content
{	
    
    
	#public function changeLangText4Schema($varValue, DataContainer $dc)
	#{
	#	return $varValue;
	#}
    
        public function addRowClass(DataContainer $dc)
	{
             # $dc->activeRecord->pid doesnt work with drag & drop
            $article = $this->Database->prepare("SELECT pid FROM tl_content WHERE id=?")
                              ->limit(1)
                              ->execute(\Input::get('id'));
            
            $this->prepareStartAndStopRow($article->pid);
        }
        /*
         * prepare to add row for width of 100%
         */
        public function prepareStartAndStopRow($pid)
	{
                   
            $this->log('addRowClass called.. '.$pid, __METHOD__, TL_ERROR);
            $arrElements = array();
            $objContents = Contao\ContentModel::findPublishedByPidAndTable($pid, 'tl_article', array('order')); 

            if ($objContents !== null)  
            {
#var_dump($objContents);
                /*
                 * For a better overview we use several arrays
                 * 
                 * Generate simple Array with all CTE's from current article
                 * $objContents->prev cause allowed memory size error
                 */
                while ($objContents->next()) 
                {
                    $arrElements[] = array(
                       'id' => $objContents->id,
                       'type' => $objContents->type,
                       'selectContentWidth' => (int)$objContents->selectContentWidth,
                       'responsiveRow' => "", /* must be clear */
                       'forceNewRow' => $objContents->forceNewRow
                    );     
                }
                
                /* open first and close last cte - sometimes twice at last element */
                #$arrElements[count($arrElements)-1]['responsiveRow'] = " rowclose";

                /* 
                 * remove all elements inside a wrapper and the wrapper_end (for better calculation)
                 */
                foreach ($arrElements AS $key => $value)
                {
                    if ( strpos ( $value['type'], 'Stop' ) !== FALSE )
                    {
                       $isInsideWrapper = false;
                       $value['openerID'] = $openerID;
                       $arrWithoutInner[] = $value; 
                       continue;
                    }

                    if ( $isInsideWrapper)
                        continue;
                    
                    if ( (strpos ( $value['type'], 'Start' ) !== FALSE ) )
                    {
                        $isInsideWrapper = true;
                        $openerID = $value['id'];
                        $setEndWidth = $value['selectContentWidth'];
                    }
                    $arrWithoutInner[] = $value; 
                    $arrWithoutInnerAndStopElements[] = $value; 
                }
                
                # var_dump($arrWithoutInnerAndStopElements);
                /*
                 * Calculate row-Start and row-End
                 * ( wrapper-end is not included in calculation ($arrWithoutInnerElementsWithoutEnd) )
                 */
                $widthUntil = 0; 
                foreach ($arrWithoutInnerAndStopElements AS $key => $value)
                {
                    # start a row
                    if( $widthUntil == 0 )
                    {
                            $value['responsiveRow'] .= " rowopen ";
                    }
                    
                    # count all widths in current row
                    $widthUntil += $value['selectContentWidth'];
                    $value['widthUntil'] = $widthUntil;


                    # close the row widthUntil to width or foreNewRow
                    if  (
                            $widthUntil >= 12
                            || ( $widthUntil+ $arrWithoutInnerAndStopElements[$key+1]['selectContentWidth'] > 12 )
                            || $arrWithoutInnerAndStopElements[$key+1]['forceNewRow'] == 1
                        )
                    {
                            $widthUntil = 0;
                            $value['responsiveRow'] .= " rowclose ";
                    }

                    $arrElementsPrepared[$value['id']] = $value;
                }
   
                /*
                 * Add responsiveRow to elements and prepare wrapper_end
                 */
                foreach ($arrWithoutInner AS $key => $value)
                {
                  
                    $value['responsiveRow'] = $arrElementsPrepared[$value['id']]['responsiveRow'];
                     
                    if ( strpos ( $value['type'], 'Start' ) !== FALSE )
                    {
                        /* 
                         * if a wrapper_start element contains rowclose
                         * remove it an add it at wrapper_stop (openerID)
                         */
                         if ( strpos ( $value['responsiveRow'], 'rowclose' ) !== FALSE )
                         {
                            $value['responsiveRow'] = str_replace ('rowclose', '', $value['responsiveRow']);
                            $openerID = $value['id'];
                         }
                    }
                    
                     if ( strpos ( $value['type'], 'Stop' ) !== FALSE )
                    {
                        # add rowclose if this wrapper_stop has a openerID 
                        if ($openerID == $value['openerID'])
                           $value['responsiveRow'] .= " rowclose ";
                    }
                   $lastElementId = $value['id'];
                   $arrElementsFinished[$value['id']] = $value;
                }
                
            
                $arrElementsFinished[$lastElementId]['responsiveRow'] .= "rowclose";
                
                #echo "<pre>";
                #var_dump($arrElementsFinished);
                /* set pointer to first object */          
                $objContents->reset();
                while ($objContents->next()) 
                {
                   # var_dump($objContents->id . ' -- ' . $arrElementsFinished[$objContents->id]['responsiveRow']);
                    $objContents->responsiveRow = $arrElementsFinished[$objContents->id]['responsiveRow'];
                    $objContents->save();
                }
            }
            
            return $varValue;

	}
        /*
         * Arrange start and stop row new after change visibility
         */
        public function toggleVisibility( $intId, $blnVisible, DataContainer $dc=null )
        {
            $article = $this->Database->prepare("SELECT pid FROM tl_content WHERE id=?")
                             ->limit(1)
                             ->execute($intId);
            parent::toggleVisibility( $intId, $blnVisible, $dc );
            
            $this->prepareStartAndStopRow($article->pid);
        }
         
        /**
         * Change label and description
         */
	public function changeLangText($varValue, DataContainer $dc)
	{
		if($dc->activeRecord->type == "IconHeadlineText")
		{
			$GLOBALS['TL_DCA']['tl_content']['fields']['floating']['label'] = $GLOBALS['TL_LANG']['tl_content']['iconFloating'];
		}
		return $varValue;
	}
        
         /**
         * Set mandatory to false
         */
	public function removeTextMandatory($varValue, DataContainer $dc)
	{
		if($dc->activeRecord->type == "IconHeadlineText")
		{
			$GLOBALS['TL_DCA']['tl_content']['fields']['url']['eval']['mandatory'] = false;
			$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['mandatory'] = false;
		}
		return $varValue;
	}
}
?>