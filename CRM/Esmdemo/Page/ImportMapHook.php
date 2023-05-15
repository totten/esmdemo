<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_ImportMapHook extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('ImportMapHook'));

    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-import-map-hook.js');

    CRM_Esmdemo_Sources::show(['CRM/Esmdemo/Page/ImportMapHook.php', 'js/hello-import-map-hook.js', 'js/display-o-tron.js', 'packages/geometry-library-1.2.3/Rectangle.js', 'packages/geometry-library-1.2.3/Square.js']);
    parent::run();
  }

}
