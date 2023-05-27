import { h, Component, render } from 'preact/dist/preact.module.js';

const app = h('h1', null, 'Hello world (via Preact)');
render(app, document.getElementById('root'));
