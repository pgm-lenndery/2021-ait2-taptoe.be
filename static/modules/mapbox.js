import {
    node,
    updateClipboard,
    Element,
    Api
} from './index.js';
import dataFinal from '../../data/data-final.js';
import {pathCallback} from '../../static/modules/routing.js';
import {orgConvert} from '../../static/modules/data.js'

let interactive = true, center = [4.07, 51.03], zoom = 9;
// center = [3.725509513348925, 51.05405769065996];
// zoom = 11;

pathCallback('/detail')(() => {
    interactive = false;
    center = [3.7382124552357254, 51.1259941281501];
    zoom = 16;
})

mapboxgl.accessToken = 'pk.eyJ1IjoibGVubmVydGRlcnljayIsImEiOiJjazN1N3ViZTMwOWRrM2VwaXpvY3I1a2MzIn0.UJjqfOdCRHzOPdP2j7lDmg';

let mapHoverPosition = 0;
const mapboxInit = async (addMarkers = true) => {    
    const map = new mapboxgl.Map({
        container: 'mapbox',
        // style: 'mapbox://styles/mapbox/streets-v11',
        style: 'mapbox://styles/lennertderyck/ckg6w850l502e19olpjp7v1gg',
        center: center,
        zoom: zoom,
        interactive: interactive
    });
    
    map.addControl(new mapboxgl.NavigationControl());
    map.on('click', ({lngLat}) => {
        const {lng, lat} = lngLat.wrap();
        mapHoverPosition = lngLat.wrap();
        console.log(mapHoverPosition);
        // node('[data-label="mapInfo"]').innerHTML = `lng: ${lng.toFixed(2)}, lat: ${lat.toFixed(2)}`;
    });
    
    if (addMarkers) {
        const locationData = await new Api('http://localhost/AIT%202/2021-ait2-taptoe.be/api/locations.php').JSON();
        console.log(locationData);
        
        (await locationData).setMarkersFromArray(map);
    }
    
}

const getLocations = (data) => {
    // return dataParsedZip.filter(loc => loc.location?.zip >= 9000 && loc.location?.zip <= 9080)
    return data.filter(loc => loc.location?.positie)
}

Array.prototype.setMarkersFromArray = function(box) {
    this.forEach(org => {
        console.log(org);
        const popup = new mapboxgl.Popup({ offset: -13 }).setHTML(`
            <a class="listing-card" href="detail/?id=${org.location_id}">
                <small class="d-block listing__type">${orgConvert(org.organisation) || 'onbekend'}</small>
                <h5 class="listing__name">${org.location_name}</h5>
                <p class="listing__location">${org.address_city}</p>
            </a>
            <div class="mapbox__marker"></div>
        `);
        
        const el = new Element('div');
        el.class(['mapbox__marker']);
        
        new mapboxgl.Marker(el.return())
            .setLngLat([org.address_long, org.address_lat])
            .setPopup(popup) // sets a popup on this marker
            .addTo(box);
    })
}

Array.prototype.createList = function(wrapper) {
    this.forEach(item => {
        const card = new Element('a');
        card.inner(`
        
        `)
    })
}

const getNearbyGroups = (positon = mapHoverPosition) => {
    getLocations(dataFinal)
}

export {
    mapboxInit
}