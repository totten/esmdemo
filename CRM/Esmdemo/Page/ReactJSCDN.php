<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_ReactJSCDN extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('ReactJS'));

    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-reactjs-cdn.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="root"></div>');

    CRM_Esmdemo_Sources::show(['CRM/Esmdemo/Page/ReactJSCDN.php', 'js/hello-reactjs-cdn.js']);
    parent::run();
  }

}
