# esmdemo

This extension has some simple examples of using ECMAScript Modules in CiviCRM.

## Part 1. Basic ESM Support

In these examples, we load one ES module -- and it recursively loads another ES module.

The _basic_ examples only work with *physical paths*. Physical paths in a few scenarios:

* The dependencies are physically stored in the same folder. (In this case, use a relative path like `./my-other-module.js`.)
* The dependencies are distributed via CDN. (In this case, use an absolute URL like `https://unpkg.com/foo/my-other-module.js`.)

However, basic support is not suitable for sharing modules between different parts of the system (e.g. between `civicrm/js/*` and `my-extension/js/*`).
For this, we need "_Part 2. Import Map Support_".

### Hello World: Relative Path (`civicrm/esmdemo/hello-relpath`)

1. This [page-controller](CRM/Esmdemo/Page/RelPath.php) loads the file [hello-relpath.js](js/hello-relpath.js).
2. [hello-relpath.js](js/hello-relpath.js) imports [display-o-tron.js](js/display-o-tron.js). Note the use of a relative file-path.
   This is a dummy widget.
3. When you open the page, you will see a "Hello world" message rendered with support from the helper.

### Hello World: VueJS CDN (`civicrm/esmdemo/hello-vuejs-cdn`)

1. This [page-controller](CRM/Esmdemo/Page/VueJSCDN.php) loads the [HTML template](templates/CRM/Esmdemo/Page/VueJS.tpl) and the module [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js).
2. [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) imports VueJS from CDN.
3. When you open the page, you will see a "Hello world" message rendered by VueJS.

### Hello World: VueJS CDN (`civicrm/esmdemo/hello-vuejs-cdn`)

1. This [page-controller](CRM/Esmdemo/Page/VueJSCDN.php) loads the [HTML template](templates/CRM/Esmdemo/Page/VueJS.tpl) and the module [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js).
2. [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) imports VueJS from CDN.
3. When you open the page, you will see a "Hello world" message rendered by VueJS.

## Part 2. Import Map Support

TODO
