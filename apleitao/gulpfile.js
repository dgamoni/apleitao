'use strict';

var gulp = require('gulp');

// load plugins
var $ = require('gulp-load-plugins')({pattern: '*'});
//var runSequence = require('run-sequence');

// paths to resources
var paths = {
  scss: 'assets/scss/**/*.scss',
  scripts: 'assets/scripts/**/*.js',
  plugins: [
    'bower_components/jquery/dist/jquery.min.js'
  ],
  images: 'assets/images/**/*',
  php: '**/*.php',
  css: '**/*.css',
  js: 'js/**/*.js'
}

// destinations for resources
var dest = {
  css: '',
  scripts: 'js',
  images: 'assets/images'
}

gulp.task('browserSync', function() {
  $.browserSync.init({
    proxy: 'apleitao.dev'
  });
})

// process scss file
gulp.task('styles', function () {
  return gulp.src(paths.scss)
  .pipe($.rubySass({
    style: 'compressed',
    precision: 10
  }))
  .pipe($.autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
  .pipe(gulp.dest(dest.css))
  .pipe($.browserSync.reload({
    stream: true
  }))
  .pipe($.size());
});

// perform jshint on javascript files
gulp.task('jshint', function () {
  return gulp.src(paths.scripts)
  .pipe($.jshint())
  .pipe($.jshint.reporter('jshint-stylish'))
  .pipe($.jshint.reporter('fail'))
  .pipe($.size());
});

// Combine the list of js files, concat, move, uglify, move
gulp.task('jsscripts', function(){
  return gulp.src(paths.scripts)
  .pipe($.concat('main.js'))
  .pipe(gulp.dest(dest.scripts))
  .pipe($.size())
  .pipe($.uglify())
  .pipe($.rename('main.min.js'))
  .pipe(gulp.dest(dest.scripts))
  .pipe($.size())
});

// Combine the list of plugins (uncompressed) used via bower, concat, move, uglify, move
gulp.task('jsplugins', function(){
  return gulp.src(paths.plugins)
  .pipe($.concat('plugins.js'))
  .pipe(gulp.dest(dest.scripts))
  .pipe($.size())
  .pipe($.uglify())
  .pipe($.rename('plugins.min.js'))
  .pipe(gulp.dest(dest.scripts))
  .pipe($.size())
});

// compress images
gulp.task('images', function () {
  return gulp.src(paths.images)
  .pipe($.cache($.imagemin({
    optimizationLevel: 3,
    progressive: true,
    interlaced: true
  })))
  .pipe(gulp.dest(dest.images))
  .pipe($.size());
});

// Watchers
gulp.task('watch', function() {
  gulp.watch(paths.scss, ['styles']);
  gulp.watch(paths.php, $.browserSync.reload);
  gulp.watch(paths.scripts, ['jshint', 'jsscripts'], $.browserSync.reload);
  gulp.watch(paths.plugins, ['jsplugins'], $.browserSync.reload);
  gulp.watch(paths.images, ['images'], $.browserSync.reload);
})

// Clean up dist and temporary
gulp.task('clean', function(){
  return gulp.src(['.tmp', 'dist'], { read: false }).pipe($.clean());
})

gulp.task('build', ['jshint', 'styles', 'jsscripts', 'jsplugins', 'images']);

gulp.task('default', ['clean'], function(){
  $.runSequence(['browserSync'], 'watch');
});
