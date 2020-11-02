import {node, Element, eventCallback} from './index.js';

document.addEventListener('click', (e) => {      
    eventCallback(':not(.search__results)', () => {
        node('.search__results').innerHTML = '';
    }, false)
})