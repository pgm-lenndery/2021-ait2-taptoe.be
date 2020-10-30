import {node, Element, eventCallback} from './index.js'

document.addEventListener('keyup', (e) => {
    eventCallback('[data-label="locationSearch]', (target) => {
        e.preventDefault();
        console.log(target.value);
    }, false)
})

document.addEventListener('click', (e) => {
    eventCallback('a', () => {
        e.preventDefault();
        console.log('tab');
    }, false)
})