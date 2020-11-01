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

const formSelectDefaultValue = () => {
    const $selects = node('select[value]', true)
    $selects.forEach(s => {
        const value = s.getAttribute('value')
        const opt = s.querySelector(`option[value="${value}"]`);
        opt.setAttribute('selected', '');
    })
}

// console.log(node(`a[href]`));
// console.log(`${baseURI()}account`);
// console.log(baseURI());

export {
    checkCurrentAnkers,
    formSelectDefaultValue
}
