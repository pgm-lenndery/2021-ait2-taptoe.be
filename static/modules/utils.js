import { node } from './index.js';

const ankerSelection = (ankers) => {
    ankers.forEach(el => checkAnker(el));
}

const docLoc = decodeURI(window.location.origin + window.location.pathname);
const docPath = decodeURI(window.location.pathname);

const checkAnker = (el) => {
    const anker = `${decodeURI(el.href)}/`;
    if (docLoc == anker) el.classList.add('anker--current');
}

const checkCurrentAnkers = () => {
    // [href=*""] -> select?
    ankerSelection(node('a', true));
}

const baseURI = () => {
    const $base = node('base');
    if ($base) return decodeURI($base.href);
    else return ''
}

// console.log(node(`a[href]`));
// console.log(`${baseURI()}account`);
// console.log(baseURI());

export {
    checkCurrentAnkers
}
