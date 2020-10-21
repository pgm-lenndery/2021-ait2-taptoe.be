const sass = require('node-sass');
const fs = require('fs')

const compileSass = () => {
    sass.render({
        file: './sass/main.scss',
        notify: false
    }, (err, result) => {
        if (err) throw err;
        fs.writeFile('./static/css/main.css', result.css, (err) => {
            if(!err){
              console.log('file written')
            }
        });
    });
}

compileSass();

// bs.init({
//     watch: true,
//     server: './docs',
//     notify: false
// });

// bs.watch('sass', (event, file) => {
//     if (event === 'change') {
//         bs.reload('*.css');
//         compileSass();
//     }
// });

// bs.watch("*.html").on("change", bs.reload);
// bs.watch().on("change", bs.reload);