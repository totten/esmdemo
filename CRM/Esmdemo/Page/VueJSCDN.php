<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_VueJSCDN extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('VueJS'));

    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-vuejs-cdn.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="app"><h2>{{ message }}</h2></div>');

    CRM_Esmdemo_Sources::show(['CRM/Esmdemo/Page/VueJSCDN.php', 'js/hello-vuejs-cdn.js']);
    parent::run();
  }

}
