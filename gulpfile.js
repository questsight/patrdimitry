'use strict';

var gulp = require('gulp'),
  autoprefixer = require('gulp-autoprefixer'),
  csso = require('gulp-csso'),
  concat = require('gulp-concat'),
  debug = require('gulp-debug'),
  del = require('del'),
  ftp = require('vinyl-ftp'),
  gutil = require('gulp-util'),
  imagemin = require('gulp-imagemin'),
  plumber = require('gulp-plumber'),
  pngquant = require('imagemin-pngquant'),
  pug = require('gulp-pug'),
  rename = require('gulp-rename'),
  stylus = require('gulp-stylus'),
  uglify = require('gulp-uglify');

var browserSync = require('browser-sync').create(),
  reload = browserSync.reload;

var paths = {
  clean: {
    app: [
      './app/*.html',
      './app/libs',
      './app/assets/css',
      './app/assets/js'
    ],
    dist: [
      './wp/assets',
      './wp/libs'
    ]
  },
  watch: {
    html: './app/pug/**/*.pug',
    php: './wp/**/*.php',
    css: [
      './app/common.blocks/**/*.styl',
      './app/theme.blocks/**/*.styl',
      './app/config/**/*.styl'
    ],
    js: [
      './app/common.blocks/**/*.js',
      './app/theme.blocks/**/*.js'
    ],
    img: './wp/assets/images/**/*.*'
  },
  app: {
    html: {
      src: './app/pug/pages/*.pug',
      dest: './app'
    },
    common: {
      css: {
        src: [
          './app/config/fonts.styl',
          './app/config/vars.styl',
          './app/config/reset.styl',
          './app/config/mixins.styl',
          './app/common.blocks/**/*.styl',
          './app/theme.blocks/**/*.styl'
        ],
        dest: './app/assets/css'
      },
      js: {
        src: [
          './app/common.blocks/**/*.js',
          './app/theme.blocks/**/*.js'
        ],
        dest: './app/assets/js'
      }
    },
    vendor: {
      css: {
        src: [
          './app/vendor/bootstrap/dist/css/bootstrap.min.css',
          './app/vendor/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css',
          './app/vendor/owl.carousel/dist/assets/owl.carousel.min.css',
          './app/vendor/owl.carousel/dist/assets/owl.theme.default.min.css',
          './app/vendor/animate.css/animate.min.css'
        ],
        dest: './app/libs/css'
      },
      js: {
        src: [
          './app/vendor/bootstrap/dist/js/bootstrap.min.js',
          './app/vendor/parallax.js/parallax.min.js',
          './app/vendor/owl.carousel/dist/owl.carousel.min.js',
          './app/vendor/wow/dist/wow.min.js'
        ],
        dest: './app/libs/js'
      },
      webfonts: {
        src: './app/vendor/font-awesome/web-fonts-with-css/webfonts/*.*',
        dest: './app/libs/webfonts'
      },
      fonts: {
        src: './app/vendor/bootstrap/dist/fonts/*.*',
        dest: './app/libs/fonts'
      },
      jquery: {
        src: './app/vendor/jquery/dist/jquery.min.js',
        dest: './app/libs/js'
      }
    }
  },
  img: {
    src: './app/assets/images/**/*.*',
    dest: './wp/assets/images'
  },
  dist: {
    css: {
      src: './app/assets/css/common.min.css',
      dest: './wp/assets/css'
    },
    js: {
      src: './app/assets/js/common.min.js',
      dest: './wp/assets/js'
    },
    webfonts: {
      src: './app/assets/webfonts/**/*.*',
      dest: './wp/assets/webfonts'
    },
    fonts: {
      src: './app/assets/fonts/**/*.*',
      dest: './wp/assets/fonts'
    },
    libs: {
      src: ['./app/libs/**/*.*', '!./app/libs/js/jquery.min.js'],
      dest: './wp/libs'
    },
    license: {
      src: [
        './app/vendor/**/LICENSE',
        './app/vendor/**/LICENSE-MIT',
        './app/vendor/**/LICENSE.txt'
      ],
      dest: './wp/libs/license'
    }
  }
}

gulp.task('serve', function () {
  browserSync.init({server: './app'});
  gulp.watch(paths.watch.html, gulp.series('html'));
  gulp.watch(paths.watch.css, gulp.series('cssCommon'));
  gulp.watch(paths.watch.js, gulp.series('jsCommon'));
  gulp.watch(paths.watch.php).on('change', reload);
});

gulp.task('html', function () {
  return gulp.src(paths.app.html.src)
    .pipe(plumber())
    .pipe(pug({pretty: true}))
    .pipe(gulp.dest(paths.app.html.dest))
    .pipe(browserSync.stream());
});

gulp.task('cssCommon', function () {
  return gulp.src(paths.app.common.css.src)
    .pipe(plumber())
    .pipe(concat('common.styl'))
    .pipe(stylus())
    .pipe(autoprefixer())
    .pipe(rename({suffix: '.min'}))
    .pipe(csso())
    .pipe(gulp.dest(paths.app.common.css.dest))
    .pipe(browserSync.stream());
});

gulp.task('jsCommon', function () {
  return gulp.src(paths.app.common.js.src)
    .pipe(plumber())
    .pipe(concat('common.js'))
    .pipe(gulp.dest(paths.app.common.js.dest))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest(paths.app.common.js.dest))
    .pipe(browserSync.stream());
});

gulp.task('cssVendor', function () {
  return gulp.src(paths.app.vendor.css.src)
    .pipe(concat('vendor.min.css'))
    .pipe(csso())
    .pipe(gulp.dest(paths.app.vendor.css.dest));
});

gulp.task('jsVendor', function () {
  return gulp.src(paths.app.vendor.js.src)
    .pipe(concat('vendor.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(paths.app.vendor.js.dest));
});

gulp.task('webFontsVendor', function () {
  return gulp.src(paths.app.vendor.webfonts.src)
    .pipe(gulp.dest(paths.app.vendor.webfonts.dest));
});

gulp.task('fontsVendor', function () {
  return gulp.src(paths.app.vendor.fonts.src)
    .pipe(gulp.dest(paths.app.vendor.fonts.dest));
});

gulp.task( 'jquery', function () {
  return gulp.src( paths.app.vendor.jquery.src )
    .pipe( gulp.dest( paths.app.vendor.jquery.dest ) );
});

gulp.task('cleanApp', function () {
  return del(paths.clean.app);
});

gulp.task('cleanDist', function () {
  return del(paths.clean.dist);
});

gulp.task('img', function () {
  return gulp.src(paths.img.src)
    .pipe(imagemin({use: [pngquant()]}))
    .pipe(gulp.dest(paths.img.dest));
});

gulp.task('license', function() {
  return gulp.src(paths.dist.license.src)
    .pipe(gulp.dest(paths.dist.license.dest));
});

gulp.task('dist', function () {
  var cssDist = gulp.src(paths.dist.css.src)
    .pipe(gulp.dest(paths.dist.css.dest));
  var jsDist = gulp.src(paths.dist.js.src)
    .pipe(gulp.dest(paths.dist.js.dest));
  var webFontsDist = gulp.src(paths.dist.webfonts.src)
    .pipe(gulp.dest(paths.dist.webfonts.dest));
  var fontsDist = gulp.src(paths.dist.fonts.src)
    .pipe(gulp.dest(paths.dist.fonts.dest));
  var libsDist = gulp.src(paths.dist.libs.src)
    .pipe(gulp.dest(paths.dist.libs.dest));
  return cssDist, jsDist, fontsDist, libsDist;
});

gulp.task('build', gulp.parallel('html', 'cssCommon', 'jsCommon'));

gulp.task('libs', gulp.parallel('cssVendor', 'jsVendor', 'webFontsVendor', 'fontsVendor', 'jquery'));

gulp.task('default', gulp.series('cleanApp', 'build', 'libs', 'serve'));

gulp.task('public', gulp.series('cleanDist', 'img', 'license', 'dist'));
