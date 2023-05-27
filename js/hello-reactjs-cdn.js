const React = await import('https://unpkg.com/@esm-bundle/react@17.0.2-fix.1/esm/react.production.min.js');
const ReactDOM = await import ('https://unpkg.com/@esm-bundle/react-dom@17.0.2-fix.0/esm/react-dom.resolved.production.min.js');

// const React = await import('https://esm.sh/react@17.0.2');
// const ReactDOM = await import('https://esm.sh/react-dom@17.0.2');

// const React = await import('https://esm.run/react@17.0.2');
// const ReactDOM = await import('https://esm.run/react-dom@17.0.2');

function HelloWorld() {
  return React.createElement('h1', null, 'Hello world (via ReactJS-CDN)')
}

const root = document.getElementById('root');
ReactDOM.render(HelloWorld(), root);
