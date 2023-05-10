const React = await import('https://unpkg.com/@esm-bundle/react@17.0.2-fix.1/esm/react.production.min.js');
const ReactDOM = await import ('https://unpkg.com/@esm-bundle/react-dom@17.0.2-fix.0/esm/react-dom.resolved.production.min.js');

function HelloWorld() {
  return React.createElement('h1', null, 'Hello world via ReactJS')
}

const root = document.getElementById('root');
ReactDOM.render(HelloWorld(), root);
