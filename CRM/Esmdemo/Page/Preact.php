<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_Preact extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('Preact NPM'));

    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-preact-npm.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="root"></div>');

    CRM_Esmdemo_Sources::show([
      ['package.json' => 'https://github.com/totten/esmdemo/blob/3bb719c2b8c83830b4f1a137076937a448b0ac7b/package.json#L17'],
      ['esmdemo_civicrm_esmImportMap()' => 'https://github.com/totten/esmdemo/blob/632b77f6bba1c135bc4db47db9dd0eed02cc536d/esmdemo.php#L10'],
      'js/hello-preact-npm.js',
      'CRM/Esmdemo/Page/Preact.php',
    ]);
    parent::run();
  }

}
