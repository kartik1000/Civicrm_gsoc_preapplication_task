<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
return array (
  0 => 
  array (
    'name' => 'CRM_Hellocivicrm_Form_Report_ExtensionReport',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'ExtensionReport',
      'description' => 'ExtensionReport (com.example.hellocivicrm)',
      'class_name' => 'CRM_Hellocivicrm_Form_Report_ExtensionReport',
      'report_url' => 'com.example.hellocivicrm/extensionreport',
      'component' => 'CiviMember',
    ),
  ),
);
