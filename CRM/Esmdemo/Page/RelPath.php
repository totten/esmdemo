<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_RelPath extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('RelPath'));
    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-relpath.js');
    parent::run();
  }

}
