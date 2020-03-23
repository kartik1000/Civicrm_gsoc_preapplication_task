<?php
use CRM_Hellocivicrm_ExtensionUtil as E;

class CRM_Hellocivicrm_Page_CiviHomePage extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('CiviHomePage'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    parent::run();
  }

}
