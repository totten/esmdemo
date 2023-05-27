<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_Preact extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('Preact NPM'));

    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-preact-npm.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="root"></div>');

    CRM_Esmdemo_Sources::show(['CRM/Esmdemo/Page/Preact.php', 'js/hello-preact-npm.js', 'package.json']);
    parent::run();
  }

}
