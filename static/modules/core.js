import { node, fetchAPI, eventCallback } from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import 'https://unpkg.com/feather-icons@4.28.0/dist/feather.min.js';
import { mapboxInit } from './mapbox.js';
import { pathCallback } from './routing.js'
import { sesamCollapse, sesam } from 'https://unpkg.com/sesam-collapse';

pathCallback('/', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
});
pathCallback('/detail', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
});
pathCallback('/listings', 'AIT%202/2021-ait2-taptoe.be')((path) => {
     mapboxInit();
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

// document.addEventListener('click', () => {
     // eventCallback('*:not([data-sesam-trigger="topNav"]):not([data-label="topNav"])', () => {
     //      sesam({
     //           target: 'topNav',
     //           action: 'hide'
     //      })
     // }, false)
// })

sesamCollapse.initialize();
feather.replace();
