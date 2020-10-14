import { node, fetchAPI } from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import 'https://unpkg.com/feather-icons@4.28.0/dist/feather.min.js';
import { mapboxInit } from './static/modules/mapbox.js';
import {pathCallback} from '../static/modules/routing.js'

pathCallback('/')((path) => {
     mapboxInit();
});

feather.replace();
