// const getZipByName = (name) => {
//     const city = zipCodes.find(zip => zip.city.toLowerCase() == name.toLowerCase());
//     return city || null
// }

// const editedData = []
// dataParsed.default.map((loc, index) => {
//     fetch('https://api.allorigins.win/get?url=https://groepsadmin.scoutsengidsenvlaanderen.be/groepsadmin/rest-ga/groep/' + loc.code)
//     .then(res => res.json())
//     .then(dat => {
//         const details = JSON.parse(dat.contents)
//         if (details.adressen[0] && loc.location) loc.location = details.adressen[0];
//         editedData.push(loc);
//         if (index == (dataParsed.default.length - 1)) {
//             const win = window.open('', '');
//             win.document.body.innerHTML = JSON.stringify(editedData);
//         }
//     }).catch(err => {return null});
    
// })

// console.log(getZipByName('Gent'));

const orgConvert = (name) => {
    return {
        'sgv': 'scouts',
        'lsc': 'scouts',
        'ksa': 'ksa',
        'chr': 'chiro',
        'fos': 'scouts',
        'prv': 'privé',
    }[name]
}

export {
    orgConvert
}