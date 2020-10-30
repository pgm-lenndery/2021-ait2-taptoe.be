import { node, fetchAPI, eventCallback } from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import 'https://unpkg.com/feather-icons@4.28.0/dist/feather.min.js';
import { mapboxInit } from './mapbox.js';
import { pathCallback } from './routing.js'
import { sesamCollapse, sesam } from 'https://unpkg.com/sesam-collapse';
import {checkCurrentAnkers} from './utils.js';
// import { salvattoreInit } from './ui.js';

pathCallback('/', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
});
pathCallback('/detail', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
});
pathCallback('/listings', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
});
pathCallback('/account/locations', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit(false);
});

const $listViewSelector = node('[data-label="listingsView"] select');
if ($listViewSelector) $listViewSelector.on('change')(({target}) => {
     const value = target.value;
     
     sesam({
          target: 'listingsMapView',
          action: value == 'map' ? 'show' : 'hide' ,
     })
     
     sesam({
          target: 'listingsListView',
          action: value == 'list' ? 'show' : 'hide',
     })
})

// salvattoreInit();
checkCurrentAnkers();
sesamCollapse.initialize();
feather.replace();
