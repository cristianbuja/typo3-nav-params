<?php

namespace Intera\NavParams\Hooks;

/**
 * This file is part of the "nav_params" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
use TYPO3\CMS\Frontend\ContentObject\Menu\AbstractMenuFilterPagesHookInterface;
use TYPO3\CMS\Frontend\ContentObject\Menu\AbstractMenuContentObject;
use TYPO3\CMS\Frontend\Page\PageRepository;

/**
 * Userfunc to get alternative label
 *
 */
class MenuFilterPagesHook implements AbstractMenuFilterPagesHookInterface
{

    /**
     * Checks if a page is OK to include in the final menu item array.
     *
     * @param array $data Array of menu items
     * @param array $banUidArray Array of page uids which are to be excluded
     * @param bool $spacer If set, then the page is a spacer.
     * @param \TYPO3\CMS\Frontend\ContentObject\Menu\AbstractMenuContentObject $obj The menu object
     * @return bool Returns TRUE if the page can be safely included.
     */
    public function processFilter(array &$data, array $banUidArray, $spacer, AbstractMenuContentObject $obj)
    {
        if ($data['doktype'] == PageRepository::DOKTYPE_SHORTCUT && !empty($data['nav_params'])) {
            $data['_ADD_GETVARS'] .= $data['nav_params'];
        }
        return true;
    }
}
