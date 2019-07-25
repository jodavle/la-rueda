const gulp = require('gulp');
const sass = require('gulp-sass');
const groupmq = require('gulp-group-css-media-queries');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const imagemin = require('gulp-imagemin');

// ... variables
var autoprefixerOptions = {
      browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

sass.compiler = require('node-sass');

gulp.task('styles', () => {
    return gulp.src('src/scss/style.scss')
        .pipe(sass())
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(groupmq())
        .pipe(cssnano({
  discardComments: false,
}
	))
        .pipe(gulp.dest('./'))
});


gulp.task('js', () => {
    return gulp.src(['src/javascript/anime.min.js','src/javascript/banner.js','src/javascript/scroll.js','src/javascript/custom.js','node_modules/@fortawesome/fontawesome-free/js/all.js'], {sourcemap:true})
        .pipe(concat('main.min.js'))
        //.pipe(uglify())
        .pipe(gulp.dest('./dist/javascript/'))
});

gulp.task('image', () => {
    return gulp.src('./src/images/*')
            .pipe(imagemin())
            .pipe(gulp.dest('./dist/images/'))
});

gulp.task('watch', () => {
    gulp.watch('src/scss/*.scss', gulp.series('styles'));
    gulp.watch('src/images/*', gulp.series('image'));
    gulp.watch('src/javascript/*.js', gulp.series('js'));
});

gulp.task('default', gulp.parallel('styles', 'js', 'image', 'watch'));
