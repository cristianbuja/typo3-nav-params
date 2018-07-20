<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/tslib/class.tslib_menu.php']['filterMenuPages']['nav_params'] = \CristianBuja\NavParams\Hooks\MenuFilterPagesHook::class;