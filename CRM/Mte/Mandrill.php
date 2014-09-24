<?php
/*
 +--------------------------------------------------------------------------+
 | Copyright IT Bliss LLC (c) 2012-2013                                     |
 +--------------------------------------------------------------------------+
 | This program is free software: you can redistribute it and/or modify     |
 | it under the terms of the GNU Affero General Public License as published |
 | by the Free Software Foundation, either version 3 of the License, or     |
 | (at your option) any later version.                                      |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU Affero General Public License for more details.                      |
 |                                                                          |
 | You should have received a copy of the GNU Affero General Public License |
 | along with this program.  If not, see <http://www.gnu.org/licenses/>.    |
 +--------------------------------------------------------------------------+
*/

class CRM_Mte_Mandrill {

  CONST MANDRILL_SETTINGS = 'mandrill_settings';
  static $mandrillParams  = array('mandrill_subaccount', 'group_id', 'secret_code' );

  static function getSettings($name = NULL) {
    return CRM_Core_BAO_Setting::getItem(CRM_Mte_Mandrill::MANDRILL_SETTINGS, $name);
  }

  static function setSetting($value, $key) {
    return CRM_Core_BAO_Setting::setItem($value, CRM_Mte_Mandrill::MANDRILL_SETTINGS, $key);
  }

  static function generateSecretCode() {
    return substr(md5(rand()), 16);
  }

  static function getMandrillParams() {
    return CRM_Mte_Mandrill::$mandrillParams;
  }  
}
