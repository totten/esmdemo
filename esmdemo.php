<?php

require_once 'esmdemo.civix.php';
// phpcs:disable
use CRM_Esmdemo_ExtensionUtil as E;
// phpcs:enable

function esmdemo_civicrm_esmImportMap(\Civi\Esm\ImportMap $importMap): void {
  $importMap->addPrefix('geolib/', E::LONG_NAME, 'packages/geometry-library-1.2.3/');
  // $importMap['imports']['geolib/'] = E::url('packages/geometry-library-1.2.3/');
  $importMap->addPrefix('preact/', E::LONG_NAME, 'node_modules/preact/');
  // $importMap['imports']['preact'] = 'https://esm.sh/preact';
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function esmdemo_civicrm_config(&$config): void {
  _esmdemo_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function esmdemo_civicrm_install(): void {
  _esmdemo_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function esmdemo_civicrm_enable(): void {
  _esmdemo_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function esmdemo_civicrm_preProcess($formName, &$form): void {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function esmdemo_civicrm_navigationMenu(&$menu): void {
//  _esmdemo_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _esmdemo_civix_navigationMenu($menu);
//}
