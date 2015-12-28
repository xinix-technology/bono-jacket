var path = require('path'),
    gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    replace = require('gulp-replace'),
    minifyCSS = require('gulp-minify-css'),
    gulpWatch = require('gulp-watch');

var js = [
        './www/vendor/modernizr/modernizr.js',
        './www/vendor/jquery/dist/jquery.min.js',
        './www/vendor/owl-carousel/owl-carousel/owl.carousel.min.js',
        './www/vendor/sketch/sketch/namecard/namecard.js',
        './www/vendor/jacket/js/tshirt/TableContext.js',
        './www/vendor/jacket/js/tshirt/MenuHighlighter.js',
        './www/vendor/naked-css/js/tshirt.min.js',
        './www/vendor/tshirt-popup/tshirt-popup.js',
        './www/vendor/jacket/js/tshirt.js',
        './www/js/jacket.js'
    ],
    jsie = [
        './www/vendor/html5shiv/dist/html5shiv.min.js',
        './www/vendor/respond/dest/respond.min.js'
    ],
    css = [
        './www/vendor/normalize-css/normalize.css',
        './www/vendor/animate-css/animate.css',
        './www/vendor/lato/css/lato.css',
        './www/vendor/jacket-awesome/dist/css/jacket-awesome.css',
        './www/vendor/naked-css/css/naked.min.css',
        './www/vendor/owl-carousel/owl-carousel/owl.carousel.css',
        './www/vendor/owl-carousel/owl-carousel/owl.theme.css',
        './www/vendor/owl-carousel/owl-carousel/owl.transitions.css',
        './www/vendor/tshirt-popup/tshirt-popup.css',
        './www/vendor/jacket-awesome/jacket-awesome.css',
        './www/vendor/sketch/sketch/namecard/namecard.css',
        './www/vendor/jacket/css/jacket.css',
        './www/css/jacket.css'
    ],
    font = [
        './www/vendor/lato/font/*/*',
    ],
    fonts = [
        './www/vendor/jacket-awesome/dist/fonts/*'
    ],
    img = [
        './www/vendor/jacket/img/*',
    ];

gulp.task('js', function() {
    gulp.src(js)
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./www/js/'));
    gulp.src(jsie)
        .pipe(concat('app.ie.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./www/js/'));
});

gulp.task('css', function() {
    gulp.src(css)
        .pipe(concat('app.min.css'))
        .pipe(minifyCSS({keepBreaks: false}))
        .pipe(gulp.dest('./www/css/'));
});

gulp.task('resources', function() {
    gulp.src(font)
        .pipe(gulp.dest('./www/font/'));
    gulp.src(fonts)
        .pipe(gulp.dest('./www/fonts/'));
    gulp.src(img)
        .pipe(gulp.dest('./www/img/'));
});

gulp.task('watch', function (){
  gulp.watch(js, ['js']);
  gulp.watch(jsie, ['js']);
  gulp.watch(css, ['css']);
  gulp.watch(img, ['img']);
});

gulp.task('default', ['js', 'css', 'resources', 'watch']);