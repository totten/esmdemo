# esmdemo

This is a CiviCRM extension with some simple examples of loading ECMAScript Modules (ESMs).

## Part 1. Basic ESM Support

Basic ESM support allows you to load a module. This resembles the [traditional loading of Javascript files](https://docs.civicrm.org/dev/en/latest/framework/resources/):

```php
Civi::resources()->addScriptFile('com.example.foo', 'my-script.js');
Civi::resources()->addModuleFile('com.example.foo', 'my-module.js');
```

By switching from `addScriptFile()` to `addModuleFile()`, you gain the ability to `import` dependencies.

However, basic ESM support only works with *physical paths*. This limits the utility to a few specific scenarios:

* __The dependencies are physically stored in the same folder.__ In this case, use a relative path like `./my-other-module.js`.
* __The dependencies are distributed via CDN.__ In this case, use an absolute URL like `https://unpkg.com/foo/my-other-module.js`.

We have a few examples of these techniques.

### Hello World: Relative Path (`civicrm/esmdemo/hello-relpath`)

1. This [page-controller](CRM/Esmdemo/Page/RelPath.php) loads the module [hello-relpath.js](js/hello-relpath.js).
    ```php
    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-relpath.js');
    ```
2. [hello-relpath.js](js/hello-relpath.js) imports [display-o-tron.js](js/display-o-tron.js) via local path.
    ```js
    import displayotron from './display-o-tron.js';
    ```
3. When you open `civicrm/esmdemo/hello-relpath`, it will display "Hello world".

### Hello World: VueJS CDN (`civicrm/esmdemo/hello-vuejs-cdn`)

1. This [page-controller](CRM/Esmdemo/Page/VueJSCDN.php) loads the module [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) and an HTML snippet.
    ```php
    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-vuejs-cdn.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="app"><h2>{{ message }}</h2></div>');
    ```
2. [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) imports VueJS from CDN.
    ```js
    import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
    ```
3. When you open `civicrm/esmdemo/hello-vuejs-cdn`, it will display "Hello world".

### Hello World: ReactJS CDN (`civicrm/esmdemo/hello-reactjs-cdn`)

1. This [page-controller](CRM/Esmdemo/Page/ReactJSCDN.php) loads the module [hello-reactjs-cdn.js](js/hello-reactjs-cdn.js) and an HTML snippet.
    ```php
    Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-reactjs-cdn.js');
    CRM_Core_Region::instance('page-body')->addMarkup('<div id="root"></div>');
    ```
2. [hello-reactjs-cdn.js](js/hello-reactjs-cdn.js) imports ReactJS from CDN.
    ```js
    const React = await import('https://unpkg.com/@esm-bundle/react@17.0.2-fix.1/esm/react.production.min.js');
    const ReactDOM = await import ('https://unpkg.com/@esm-bundle/react-dom@17.0.2-fix.0/esm/react-dom.resolved.production.min.js');
    ```
3. When you open `civicrm/esmdemo/hello-reactjs-cdn`, it will display "Hello world".

## Part 2. Import Map Support

If you want to share modules between different parts of the system (e.g. between `civicrm/js/*` and `my-extension/js/*`), then
the _basic_ support is not sufficient. You also need to support *logical paths* or *virtual paths* based on an *import map*.

__TODO__
