const {src,dest,series, parallel, watch} = require ('gulp');
const del = require ('del');
const babel= require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


async function clean(cb){
    await del('./style.css');
    await del('./build/all.js');
    cb();
}

function css(cb){
    
    
    src('./sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    .pipe(dest('./'));
    cb();
}


function js(cb){
    src('./js/**/*.js')
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(concat('all.js'))
    .pipe(dest('./build'));
    cb();
}

function server(cb){
    browserSync.init(
        
        {
        notify: false,
        open: false,
        proxy: "localhost/wordpress"

        
        });
    cb();
}

function watcher(cb){
    watch('./js/**/*.js').on('change',series(js, css));
    watch('./sass/**/*.scss').on('change',series(js, css));
    cb();
}

exports.default = series(clean, parallel(js,css), watcher, server);