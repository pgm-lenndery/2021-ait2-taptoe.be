import { eventCallback, Api, Element } from './index.js'

document.addEventListener('keyup', (e) => {
    eventCallback('[data-search="listings"] input[name="search"]', async (target) => {
        const isEmpty = target.value == '' || target.value == ' ';
        const $searchResults = target.parentNode.closest('.search').querySelector('.search__results');
        
        if (!isEmpty) {
            const locations = await new Api(`http://localhost/AIT%202/2021-ait2-taptoe.be/api/locations.php?name=${target.value}`).JSON();
            showResults(await locations, $searchResults);
        } else showResults([], $searchResults);
    }, false)
})

const showResults = (data, container) => {
    let tempStr = '';
    data.forEach(l => {
        const card = new Element('a');
        card.class(['card', 'listing-card']);
        card.inner(l.location_name);
        card.return().href = `detail/?id=${l.location_id}`;
        tempStr += card.return().outerHTML;
    })
    container.innerHTML = tempStr;
}