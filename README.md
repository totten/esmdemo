# esmdemo

This extension has some simple examples of using ECMAScript Modules in CiviCRM.

## RelPath (`civicrm/esmdemo/relpath`)

1. This [page-controller](CRM/Esmdemo/Page/RelPath.php) loads the file [hello-world.js](js/hello-world.js).
2. [hello-world.js](js/hello-world.js) imports [importotron.js](js/importotron.js). Note the use of a relative file-path.
   This is a dummy widget.
3. When you open the page, you will see a "Hello world" message rendered with support from the helper.

## Hello World: VueJS CDN (`civicrm/esmdemo/hello-vuejs-cdn`)

1. This [page-controller](CRM/Esmdemo/Page/VueJSCDN.php) loads the [HTML template](templates/CRM/Esmdemo/Page/VueJS.tpl) and the module [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js).
2. [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) imports VueJS from CDN.
3. When you open the page, you will see a "Hello world" message rendered by VueJS.

<!--
## ImportMap (`civicrm/esmdemo/importmap`)

1. This page loads an import-map, where the logical path `esmdemo/*` corresponds to the folder `./js` in this extension.
2. This page adds some dynamic ESM code which uses `import` to load from the logical path `esmdemo/*`.
-->
