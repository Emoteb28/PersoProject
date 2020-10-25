/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const message = require('./message')
// any CSS you import will output into a single css file (app.scss in this case)
//import './styles/app.scss';
require('../styles/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';
global.$ = $;

import 'bootstrap'; // adds functions to jQuery


console.log(message('Isaac'));
