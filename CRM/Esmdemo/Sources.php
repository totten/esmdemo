<?php
use CRM_Esmdemo_ExtensionUtil as E;

class CRM_Esmdemo_Sources {

  const VIEWER = 'https://github.com/totten/esmdemo/blob/master/';

  public static function show(array $files) {
    $fileLinks = array_map(
      function ($file) {
        if (is_string($file)) {
          return sprintf('<a href="%s" target="_blank">%s</a>', htmlentities(static::VIEWER . $file), htmlentities($file));
        }
        elseif (is_array($file)) {
          foreach ($file as $fileName => $fileUrl) {
            return sprintf('<a href="%s" target="_blank">%s</a>', htmlentities($fileUrl), htmlentities($fileName));
          }
        }
      },
      $files
    );
    $markup = sprintf('<br/><hr/><div><em>%s</em>: %s</div>', E::ts('Sources'), implode(', ', $fileLinks));

    CRM_Core_Region::instance('page-body')->addMarkup($markup, 100);
  }

}
