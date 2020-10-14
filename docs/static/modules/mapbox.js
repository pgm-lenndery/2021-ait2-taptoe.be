import {
    node,
    updateClipboard,
    Element
} from 'https://unpkg.com/cutleryjs@3.5.5/dist/js/index.js';
import dataFinal from '../../data/data-final.js';

mapboxgl.accessToken = 'pk.eyJ1IjoibGVubmVydGRlcnljayIsImEiOiJjazN1N3ViZTMwOWRrM2VwaXpvY3I1a2MzIn0.UJjqfOdCRHzOPdP2j7lDmg';

const map = new mapboxgl.Map({
    container: 'mapbox',
    // style: 'mapbox://styles/mapbox/streets-v11',
    style: 'mapbox://styles/lennertderyck/ckg6w850l502e19olpjp7v1gg',
    center: [4.07, 51.03],
    zoom: 9
});

let mapHoverPosition = 0;
const mapboxInit = () => {    
    map.addControl(new mapboxgl.NavigationControl());
    map.on('mousemove', ({lngLat}) => {
        const {lng, lat} = lngLat.wrap();
        mapHoverPosition = lngLat.wrap();
        // node('[data-label="mapInfo"]').innerHTML = `lng: ${lng.toFixed(2)}, lat: ${lat.toFixed(2)}`;
    });
    getLocations(dataFinal).setMarkersFromArray(map);
}


const getLocations = (data) => {
    // return dataParsedZip.filter(loc => loc.location?.zip >= 9000 && loc.location?.zip <= 9080)
    return data.filter(loc => loc.location?.positie)
}

Array.prototype.setMarkersFromArray = function(box) {
    this.forEach(org => {
        const popup = new mapboxgl.Popup({ offset: -13 }).setHTML(`
            <a class="listing-card" href="/listings/${org.location.id}">
                <small class="d-block listing__type">${org.type}</small>
                <h5 class="listing__name">${org.name}</h5>
                <p class="listing__location">${org.location.gemeente}</p>
            </a>
            <div class="mapbox__marker"></div>
        `);
        
        const el = new Element('div');
        el.class(['mapbox__marker']);
        
        const {latitude, longitude} = org.location.positie;
        new mapboxgl.Marker(el.return())
            .setLngLat([longitude, latitude])
            .setPopup(popup) // sets a popup on this marker
            .addTo(box);
    })
}

const getNearbyGroups = (positon = mapHoverPosition) => {
    getLocations(dataFinal)
}

export {
    mapboxInit
}