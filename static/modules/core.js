import { node, fetchAPI, eventCallback, Element } from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import 'https://unpkg.com/feather-icons@4.28.0/dist/feather.min.js';
import { mapboxInit, setManualPin } from './mapbox.js';
import { pathCallback } from './routing.js'
import { sesamCollapse, sesam } from 'https://unpkg.com/sesam-collapse';
import { checkCurrentAnkers, formSelectDefaultValue } from './utils.js';
import './search.js';

pathCallback('/', 'AIT%202/2021-ait2-taptoe.be')((path) => {
    mapboxInit();
});

pathCallback('/detail', 'AIT%202/2021-ait2-taptoe.be')((path) => {
    mapboxInit(false);
});

pathCallback('/listings', 'AIT%202/2021-ait2-taptoe.be')((path) => {
    mapboxInit();
});

pathCallback(['/account/locations/add', '/account/locations/edit'], 'AIT%202/2021-ait2-taptoe.be')(async (path) => {
    const url = new URL(window.location.href);
    const param = url.searchParams.get('id');
    const map = await mapboxInit(false);
    
    // if (param) setManualPin(await map)
     
    map.on('click', ({lngLat}) => {
        const {lng, lat} = lngLat.wrap();
        const prevMarker = node('.mapboxgl-canvas-container .mapbox__marker');
        const el = new Element('div');
        el.class(['mapbox__marker']);
        
        if (prevMarker) prevMarker.remove();
        
        new mapboxgl.Marker(el.return())
            .setLngLat([lng, lat])
            .addTo(map); 
            
        node('[data-form="registerLocation"] input[name="address_long"]').value = lng;
        node('[data-form="registerLocation"] input[name="address_lat"]').value = lat;
    });
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
formSelectDefaultValue();
