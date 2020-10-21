import {node, Element, eventCallback} from 'https://unpkg.com/cutleryjs/dist/js/index.js'


document.addEventListener('keyup', (e) => {
    eventCallback('[data-label="locationSearch]', (target) => {
        e.preventDefault();
        console.log(target.value);
    }, false)
})