import {
    node
} from 'cutleryjs';

const mapboxInit = () => {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVubmVydGRlcnljayIsImEiOiJjazN1N3ViZTMwOWRrM2VwaXpvY3I1a2MzIn0.UJjqfOdCRHzOPdP2j7lDmg';
    const map = new mapboxgl.Map({
        container: 'mapbox',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [4.07, 51.03],
        zoom: 8
    });
    
    map.addControl(new mapboxgl.NavigationControl());
    
    map.on('mousemove', ({lngLat}) => {
        const {lng, lat} = lngLat.wrap();
        node('[data-label="mapInfo"]').innerHTML = `lng: ${lng.toFixed(2)}, lat: ${lat.toFixed(2)}`;
            // e.point is the x, y coordinates of the mousemove event relative
            // to the top-left corner of the map
            // JSON.stringify(e.point) +
            // '<br />' +
            // e.lngLat is the longitude, latitude geographical position of the event
    });
}

export {
    mapboxInit
}