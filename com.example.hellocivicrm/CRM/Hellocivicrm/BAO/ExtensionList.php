<?php
use CRM_Hellocivicrm_ExtensionUtil as E;

class CRM_Hellocivicrm_BAO_ExtensionList extends CRM_Hellocivicrm_DAO_ExtensionList {

  /**
   * Create a new ExtensionList based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Hellocivicrm_DAO_ExtensionList|NULL
   *
  public static function create($params) {
    $className = 'CRM_Hellocivicrm_DAO_ExtensionList';
    $entityName = 'ExtensionList';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
