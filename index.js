const sass = require('node-sass');
const fs = require('fs')
const nodemon = require('nodemon');

nodemon({
    script: 'index.js',
    ignore: ["static/css/main.css"],
});

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

nodemon.on('restart', function (files) {
    compileSass();
});