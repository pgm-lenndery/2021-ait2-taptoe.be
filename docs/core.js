import { node, fetchAPI } from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import 'https://unpkg.com/feather-icons@4.28.0/dist/feather.min.js';
import { mapboxInit } from './static/modules/mapbox.js';
import {pathCallback} from '../static/modules/routing.js'
import {sesamCollapse} from 'https://unpkg.com/sesam-collapse';

pathCallback('/')((path) => {
     console.log('mapbox')
     mapboxInit();
});
pathCallback('/detail')((path) => {
     console.log('mapbox')
     mapboxInit();
});
pathCallback('/listings')((path) => {
     console.log('mapbox')
     mapboxInit();
});

sesamCollapse.initialize();
feather.replace();
