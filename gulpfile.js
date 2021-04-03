const {src,dest,series, parallel, watch} = require ('gulp');
const del = require ('del');
const babel= require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');


const reload = browserSync.reload;




async function clean(cb){
    await del('./style.css');
    await del('./build/all.js');
    cb();
}

function css(cb){
    
    
    src('./sass/style.scss')
    .pipe(sourcemaps.init())
    
    .pipe(sass().on('error', sass.logError))
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    
    .pipe(sourcemaps.write())
    .pipe(dest('./'));
    cb();
}


function js(cb){
    
    src(['./js/**/*.js','./node_modules/bootstrap/dist/js/bootstrap.js', './node_modules/@popperjs/core/dist/umd/popper.js'])
    .pipe(plumber())
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(concat('all.js'))
    .pipe(dest('./build'));
    cb();
}



async function server(cb){
    browserSync.init(
        
        {
        //open: false,
        proxy:"localhost/wordpress" 
        });
    cb();
}

function watcher(cb){
    watch('./js/**/*.js').on('change',series(js, css));
    watch('./sass/**/*.scss').on('change',series(js, css));
    watch("./style.css").on('change', browserSync.reload);
    cb();
}


exports.default = series(clean, parallel(js,css), watcher, server);