# esmdemo

This is a CiviCRM extension with some simple examples of loading ECMAScript Modules (ESMs).

To view the demos, install the extension and navigate to `civicrm/esmdemo`.

## Part 1. Basic ESM Support

Basic ESM support allows you to load an ESM file. This resembles the [traditional loading of Javascript files](https://docs.civicrm.org/dev/en/latest/framework/resources/). Compare:

```diff
-Civi::resources()->addScriptFile('com.example.foo', 'my-script.js');
+Civi::resources()->addModuleFile('com.example.foo', 'my-script.js');
```

By switching from `addScriptFile()` to `addModuleFile()`, you gain the ability to `import` dependencies.

There are important limitations. With basic ESM support, the `import` must specify a *physical path*.
This limits you to scenarios where the physical path is easy to identify, such as:

* Importing dependencies from the same folder.
    ```js
    import ... from './my-other-module.js'
    ```
* Importing dependencies from a specific CDN.
    ```js
    import ... from 'https://unpkg.com/foo/my-other-module.js'
    ```

We have a few examples of these techniques.

* __Hello World: Relative Path__ (`civicrm/esmdemo/hello-relpath`)
    * This [page-controller](CRM/Esmdemo/Page/RelPath.php) loads the first file:
        ```php
        Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-relpath.js');
        ```
    * [hello-relpath.js](js/hello-relpath.js) imports the second file, [display-o-tron.js](js/display-o-tron.js).
        ```js
        import displayotron from './display-o-tron.js';
        ```
* __Hello World: VueJS CDN__ (`civicrm/esmdemo/hello-vuejs-cdn`)
    * This [page-controller](CRM/Esmdemo/Page/VueJSCDN.php) loads the first file and some static HTML.
        ```php
        Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-vuejs-cdn.js');
        CRM_Core_Region::instance('page-body')->addMarkup('<div id="app"><h2>{{ message }}</h2></div>');
        ```
    * [hello-vuejs-cdn.js](js/hello-vuejs-cdn.js) imports additional files from CDN.
        ```js
        import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
        ```
* __Hello World: ReactJS CDN__ (`civicrm/esmdemo/hello-reactjs-cdn`)
    * This [page-controller](CRM/Esmdemo/Page/ReactJSCDN.php) loads the first file and some static HTML.
        ```php
        Civi::resources()->addModuleFile(E::LONG_NAME, 'js/hello-reactjs-cdn.js');
        CRM_Core_Region::instance('page-body')->addMarkup('<div id="root"></div>');
        ```
    * [hello-reactjs-cdn.js](js/hello-reactjs-cdn.js) imports additional files from CDN.
        ```js
        const React = await import('https://unpkg.com/@esm-bundle/react@17.0.2-fix.1/esm/react.production.min.js');
        const ReactDOM = await import ('https://unpkg.com/@esm-bundle/react-dom@17.0.2-fix.0/esm/react-dom.resolved.production.min.js');
        ```

## Part 2. Import Map Support

If you want to share modules between different parts of the system (e.g. between `civicrm/js/*` and `my-extension/js/*`), then
the _basic_ support is not sufficient. You also need to support *logical paths* or *virtual paths* based on an *import map*.

__TODO__
