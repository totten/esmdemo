import displayotron from './display-o-tron.js';
import Square from 'geolib/Square.js';

CRM.$(function() {
  var myShape = new Square(2.5);

  displayotron(
    "<h2>Hello world (via local <em>display-o-tron.js</em>)</h2>" +
    `A square surface (<code>${myShape.width} furlongs</code> wide) has an area of <code>${myShape.getArea()} fur<sup>2</sup></code>.`
  );
});
