<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Page_Listing extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('ESM Demos'));

    $u = function($p) {
      return CRM_Utils_System::url($p, '', FALSE, FALSE, FALSE);
    };

    $esmdemos = [
      [
        'name' => 'Hello World - RelPath',
        'url' => $u('civicrm/esmdemo/hello-relpath'),
      ],
      [
        'name' => 'Hello World - VueJS CDN',
        'url' => $u('civicrm/esmdemo/hello-vuejs-cdn')
      ],
      [
        'name' => 'Hello World - ReactJS CDN',
        'url' => $u('civicrm/esmdemo/hello-reactjs-cdn')
      ],
    ];

    $this->assign('esmdemos', $esmdemos);
    parent::run();
  }

}
