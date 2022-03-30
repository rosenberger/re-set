const { src, dest, series } = require('gulp');
const svgSprite = require('gulp-svg-sprite');
const gulpGzip = require('gulp-gzip');
const gulpClean = require('gulp-clean');

// Basic configuration example
const svgspriteConfig = {
    mode: {
      symbol: {
          inline: false,
          dest: '',
          sprite: 'sprite.svg'
      }
    }
};

function buildSvg() {
  return src('svg/*.svg')
    .pipe(svgSprite(svgspriteConfig))
    .pipe(dest('www/svg'))
}

function gzipSvg() {
    return src('www/svg/*.svg').pipe(gulpGzip({append: true})).pipe(dest('www/svg'));
}

function cleanSvg() {
    return src('www/svg/*.svg.gz', {read: false}).pipe(gulpClean())
}

exports.buildsvg = series(cleanSvg, buildSvg, gzipSvg);
