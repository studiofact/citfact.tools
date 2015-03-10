<?php

/*
 * This file is part of the Studio Fact package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$menuList = array(
	'parent_menu' => 'global_menu_citfact',
	'section' => 'testsection',
	'sort' => 100,
	'text' => 'Тестовая секция',
	'title' => 'Тестовый title',
	//'url' => 'citfact_test.php?lang=ru', // комментим, если это родительский пункт без собственной страницы
	'icon' => 'fileman_sticker_icon',
	'page_icon' => 'fileman_sticker_icon_sections',
	'items_id' => 'menu_testsection',
	'more_url' => Array(
		0 => 'cifact_test.php.php'
	),

	'items' => Array(
		0 => Array(
			'text' => 'Тестовая субсекция',
			'title' => 'Тестовый subtitle',
			'url' => 'citfact_tools.php?lang=ru',
			'icon' => 'fileman_sticker_icon',
			'page_icon' => 'fileman_sticker_icon_sections',
			'items_id' => 'menu_testsubsection',
			'items' => Array(
				0 => Array(
					'text' => 'Тестовая субсубсекция',
					'title' => 'Тестовый subsubtitle',
					'url' => 'citfact_subsubtest.php?lang=ru',
					'icon' => 'fileman_sticker_icon',
					'page_icon' => 'fileman_sticker_icon_sections',
					'items_id' => 'menu_testsubsubsection',
				)
			)
		)
	)
);

return isset($menuList) ? $menuList : array();
