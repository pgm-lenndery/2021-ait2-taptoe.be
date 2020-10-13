import { node, fetchAPI } from 'cutleryjs';
import feather from 'feather-icons';
import { mapboxInit } from './static/modules/mapbox';

if (node('#mapbox')) mapboxInit();

feather.replace();
