const salvattoreInit = () => {
    salvattore.rescanMediaQueries();
    const salvattoreGrids = document.querySelectorAll('.salvatore-grid');
    salvattoreGrids.forEach(grid => {
        const cards = grid.querySelectorAll('.salvatore-grid-item');
        try {
            cards.forEach(card => {card.remove()});
            salvattore.registerGrid(grid);
            salvattore.appendElements(grid, cards);
        } catch (err) {status.log(err)};
    })
}

export {
    salvattoreInit
}