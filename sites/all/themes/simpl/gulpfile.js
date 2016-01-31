var gulp = require('gulp'),
    gutil = require('gulp-util'),
    livereload = require('gulp-livereload'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    react = require('gulp-react'),
    compass = require('gulp-compass');

gulp.task('compass', function() {
  return gulp.src(['./scss/*.scss'])
  .pipe(compass({
    // Gulp-compass options and paths
    config_file: './config.rb',
    css: 'css',
    sass: 'scss',
    require: ['susy']
  }))
  .on('error', gutil.log)
  .pipe(gulp.dest('./css/'))
  .pipe(livereload());
});

// JS concat, strip debugging and minify
gulp.task('scripts', function() {
    return gulp.src(['./src/js/jquery-1.8.0.min.js', './src/scripts/*.js', './src/js/vod.js',
        './src/js/jquery.waypoints.min.js',
        './src/js/pushy.min.js', './src/js/main.js'
    ])
        .pipe(react())
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js/'));
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(['scss/*.scss', 'src/**/*.js'], ['compass', 'scripts']);
});

gulp.task('watch-compass', function() {
    livereload.listen();
    gulp.watch(['scss/*.scss'], ['compass']);
});

gulp.task('default', function() {
    gulp.run(['compass', 'scripts', 'watch']);
});
