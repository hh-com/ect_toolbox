<?php

/**
 * 
 * @package ect_toolbox
 * Copyright (C) 2015 Harald Huber
 * http://www.easy-contao-themes.com
 *
*/

class HooksECT extends Frontend
{
   
    public function prepareContentElements(ContentModel $objModel, $strBuffer, $objElement)
    {
        /* opening and closing for element row*/
        $rowopen = "";
        $rowclose = "";

        /* 
         * Add css-class for responsive design
         */
        if (TL_MODE != 'BE' && strlen ($strBuffer) != 0 )
        {
            
            /*
            * 
            * Add DIV row 
            */
            #echo "<pre>";
            #var_dump($objModel);
            #var_dump($objElement);
            if (strpos ( $objModel->responsiveRow, 'rowopen' ) !== FALSE )
            {
                $rowopen = "<div class='row'>";
                $position = "first";
            }
            if (strpos ( $objModel->responsiveRow, 'rowclose' ) !== FALSE )
            {   
                #var_dump($objModel->id ." - ".$objModel->responsiveRow);
                $rowclose = "</div>";
                $position = "last";
            }
            
            /*
            * 
            * Add responsive classes
            */
            $cElement = "";
            $addClass = " ";
            $columns  = array(1 => 'one',2 => 'two',3 => 'three',4 => 'four',5 => 'five',6 => 'six',7 => 'seven',8 => 'eight',9 => 'nine',10 => 'ten',11 => 'eleven',12 => 'twelve');
                    
            # Line at the Bottom
            if ($objModel->addBottonLine == 1)
            {
                    $addClass .= "btmLine ";
            }
            # Add a Border
            if ($objModel->addBorder == 1)
            {
                    $addClass .= "bb ";
            }
            # Force a new Row
            if ($objModel->forceNewRow == 1)
            {
                    $addClass .= "new_row ";
            }
            if($objModel->selectContentWidth != "100" )
            {
                    $cElement = " ".$columns[$objModel->selectContentWidth]." columns ".$addClass."";
            }
            else
            {
                    $cElement = $addClass; # wMod - Class for no - DIV Elements... .mod_article > div, .mod_article > .wMod
            }



            # Insert Elements
            if (    $objModel->type == NULL || # e.g. Insert Element Form
                    $objModel->type == "module" || 
                    $objModel->type == "article" || 
                    $objModel->type == "form" || 
                    $objModel->type == "alias" || 
                    $objModel->type == "teaser" || 
                    $objModel->type == "comments" ||
                    $objModel->type == "code" 
                )
            {		
                    $strBuffer = substr_replace($strBuffer, " wMod ".$cElement, (strpos ($strBuffer, "class=")+7), 0 );	
            } 
            else
            {
                    $objElement->Template->class = $objElement->Template->class.$cElement.$position;
                    $strBuffer = $objElement->Template->parse();
            }
  
        }
        
        /* 
         * Get $objElement from parent if cteAlias
         */
        if ( $objModel->cteAlias != 0)
        {
            $objModel = $this->checkRecursive($objModel->cteAlias, $objModel->id);
            $strClass = \ContentElement::findClass($objModel->type);                 
            $objElement = new $strClass($objModel, "main");
            $objElement->generate();
        }
        
        /* 
         * Add css-class for FontAwesome to ContentElement List
         */
        if ($objModel->type == "list" && $objModel->iconShow == 1)
        {
            foreach ($objElement->Template->items AS $key => $listItem)
            {
                $temp[$key] = $listItem;
                $temp[$key]['class'] = $temp[$key]['class']." fIcon fas_".$objModel->id;
            }

            /* Include Icon CSS */
            $iconCss = 
            '
            <style>
            li.fas_'.$objModel->id.':before {
                content: "\\'.$objModel->iconSelect.'";
                padding-right: 7px;
            }
            </style>
            ';

            #$GLOBALS['TL_CSS'][] = 'system/modules/ect_toolbox/assets/css/fontIcon.css'; 

            if(TL_MODE == 'BE')
                    $GLOBALS['TL_MOOTOOLS'][] = $iconCss;
            else
                    $GLOBALS['TL_HEAD'][] = $iconCss;  

            $objElement->Template->items = $temp;
            $objElement->Template->class = $objElement->Template->class." ficon_list";

            $strBuffer = $objElement->Template->parse();
        }
        
        
        /* 
         * Add css-classes to backend
         */
        if (TL_MODE == 'BE')
        {
            $backendIcon = "";			
            # Line at the Bottom
            if ($objModel->addBottonLine == 1)
            {
                    $backendIcon .= " <span class='fa fa-underline' title='".$GLOBALS['TL_LANG']['tl_content']['addBottonLine'][1]."'></span>";
            }
            # Add a Border
            if ($objModel->addBorder == 1)
            {
                    $backendIcon .= " <span class='fa fa-square-o' title='".$GLOBALS['TL_LANG']['tl_content']['addBorder'][1]."'></span>";
            }
            # Force a new Row
            if ($objModel->forceNewRow == 1)
            {
                    $backendIcon .= " <span class='fa fa-paragraph' title='".$GLOBALS['TL_LANG']['tl_content']['forceNewRow'][1]."'></span>";
            }
            if ($objModel->selectContentWidth != 0 && \Input::get('do') == 'article')
            {
                    $GLOBALS['TL_MOOTOOLS'][] = "<style>.tl_content.indent .selectContentWidth,.tl_content.wrapper_stop .selectContentWidth,.tl_content .selectContentWidth:nth-child(2n+0){display: none;}</style> ";
                    $strBuffer =  "<div class='selectContentWidth' style=' border: 1px solid #ddd; width: 99,6%; margin-bottom: 0px; position:relative;'>
                    <div style='background-color: #f8f8f8; float: left; border-right: 1px solid #ddd; width: ".((100/12)*$objModel->selectContentWidth)."%;'>Element-Breite: <b>".$objModel->selectContentWidth." Columns</b></div>
                    <div class='' style='position: absolute; right: 0; top: 0; font-size: 105%; cursor:help;'>
                            ".$backendIcon."
                    </div>
                    <div class='clear'></div>
                    </div>
                    ".$strBuffer;
            }
        }
        
        return $rowopen.$strBuffer.$rowclose;
    }
    
    /*
     * Add body class and insert css for width
     */
    public function preparePage(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
         /*
          * 1cl
          * 2cll
          * 2clr
          * 3cl
          */
        #echo "<pre>";
        #var_dump($objLayout);
        $fullWidth = $this->getSizeArray ($objLayout->width);
        
        if ( $objLayout->cols == "2cll")
        {
            /* add body class sidebarLeft */
            $objPage->cssClass = "sidebarLeft";
            
            $widthLeft = $this->getSizeArray ($objLayout->widthLeft);
            $columnSize = $fullWidth['value'] - $widthLeft['value'];
            
        }
        elseif ( $objLayout->cols == "2clr")
        {
            /* add body class sidebarRight */
            $objPage->cssClass = "sidebarRight";
            
            $widthRight = $this->getSizeArray ($objLayout->widthRight);
            $columnSize = $fullWidth['value'] - $widthRight['value'];
            
        }
        else
        {
            /* add body class sidebarRight */
            $objPage->cssClass = "noSidebar";
            $columnSize = $fullWidth['value'];
        }
        /*
        $GLOBALS['TL_HEAD'][] = '<style>'
                . '#wrapper #header .inside, #wrapper #container, #wrapper #footer .inside{max-width:'.$fullWidth['value'].$fullWidth['unit'].'}'
                . '#wrapper #container{max-width: '.$fullWidth['value'].$fullWidth['unit'].' }'
                . '.sidebarLeft #wrapper #container,.sidebarRight #wrapper #container {max-width:'.$columnSize.$fullWidth['unit'].'}</style>';
          */
    }
    
    public function myParseFrontendTemplate($strContent, $strTemplate)
    {
        echo "<pre>";
        var_dump($strContent);
        
        $thing =  json_encode(array
		(
			'content'	=> $varContent,
			'token'		=> REQUEST_TOKEN
		));
        
        $this->outputAjax($thing);
     
    }
    
    /****** functions ******/
    
     /* 
     * Get deserialized size values
     */
    private function getSizeArray($value)
    {
        return deserialize($value);
    }
    
    /* 
     * Get $objElement from parent if cteAlias
     */
    private function checkRecursive($cteAlias, $cteId)
    {
        $cteId;
        $objRow = \ContentModel::findByPk($cteAlias);
        
        if ($objRow->cteAlias == 0)
           return $objRow;

        $cteId = $objRow->cteAlias;
        $this->checkRecursive($objRow->cteAlias, $objRow->id);

        return \ContentModel::findByPk($cteId);  
    }
    
}
?>