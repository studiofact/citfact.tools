<?php

/*
 * This file is part of the Studio Fact package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//define('IBLOCK_CATALOG', 2);

use Bitrix\Main\Loader;

Loader::includeModule('iblock');
Loader::IncludeModule('highloadblock');

Loader::registerAutoLoadClasses('citfact.tools', array(
    'Citfact\Tools' => 'lib/tools.php',
));

class CitfactToolsEventsHandler
{
    public function OnBuildGlobalMenuHandler(&$aGlobalMenu, &$aModuleMenu)
    {
        /** @global CMain $APPLICATION */
        global $APPLICATION;
        $APPLICATION->SetAdditionalCSS('/bitrix/themes/.default/citfact_tools.css');
        $aGlobalMenu['global_menu_citfact'] = array(
            'menu_id' => 'citfact',
            'page_icon' => 'citfact_title_icon',
            'index_icon' => 'citfact_page_icon',
            'text' => 'Студия «Факт»',
            'title' => 'Студия «Факт»',
            //'url' => '#',
            'sort' => '70',
            'items_id' => 'global_menu_citfact',
            'help_section' => 'citfact',
            'items' => array()
        );

		//echo "<pre style=\"display:none;\">"; print_r($aGlobalMenu); echo "</pre>";
		//echo "<pre style=\"display:none;\">"; print_r($aModuleMenu); echo "</pre>";
    }
}