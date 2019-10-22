<?php
/*-------------------------------------------------------+
| SYSTOPIA CIVICRM MODIFICATIONS FOR EKIR                |
| Copyright (C) 2019 SYSTOPIA                            |
| Author: B. Zschiedrich (zschiedrich@systopia.de)       |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/

/**
 * Class for handling the necessary hooks to remove the log out button(s) in CiviCRM.
 */
abstract class CRM_Mods_RemoveLogOut
{
    protected static function insertJavascript ()
    {
        Civi::resources()->addScriptFile(CRM_Mods_ExtensionUtil::LONG_NAME, '/js/removeLogOut.js');
    }

    /**
     * @param CRM_Core_Page $page
     */
    public static function onPageRunHook (&$page)
    {
        self::insertJavascript();
    }

    /**
     * @param string $formName
     * @param CRM_Core_Form $form
     */
    public static function onBuildFormHook ($formName, &$form)
    {
        self::insertJavascript();
    }
}
