<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_Listing extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('ESM Demos'));

    $esmdemos = [
      [
        'name' => 'Hello World: Relative Path',
        'route' => 'civicrm/esmdemo/hello-relpath',
      ],
      [
        'name' => 'Hello World: VueJS CDN',
        'route' => 'civicrm/esmdemo/hello-vuejs-cdn',
      ],
      [
        'name' => 'Hello World: ReactJS CDN',
        'route' => 'civicrm/esmdemo/hello-reactjs-cdn',
      ],
    ];

    $this->assign('esmdemos', $esmdemos);
    parent::run();
  }

}
