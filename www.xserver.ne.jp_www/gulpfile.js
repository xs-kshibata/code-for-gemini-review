//プロジェクト固有の設定
const portNum = '8001';
const vHost = 'localhost:'+ portNum;
const documentPath = './';

// gulpプラグインの読み込み
const gulp = require("gulp");

//Sass
// const sass = require('gulp-dart-sass');
const sass = require('gulp-sass')(require('sass'));
const sassUnicode = require('gulp-sass-unicode');
// const sassglob = require("gulp-sass-glob");
const sassglob = require("gulp-sass-glob-use-forward");

//Image
const imagemin = require("gulp-imagemin");
const pngquant = require("imagemin-pngquant");

//Lint
const htmlhint = require('gulp-htmlhint');
const eslint = require('gulp-eslint');

//Prettify
const prettify = require('gulp-html-beautify');
const uglify = require('gulp-uglify');

//Extra
const convertEncoding = require('gulp-convert-encoding'); // 文字コードを変換
const header = require('gulp-header'); //@charset宣言を先頭追加する為に使用
const replace = require('gulp-replace');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const rename = require("gulp-rename");
const notify = require("gulp-notify");
const del = require('del');
const browserSync = require('browser-sync').create();
const connectphp = require('gulp-connect-php');

const paths = {
    html: {
        src: documentPath + '**/*.+(htm|html)',
        dest: documentPath,
    },
    php: {
        src: documentPath + '**/*.+(php|tpl)',
        dest: documentPath,
    },
    styles: {
        src: documentPath + 'sass/**/*.scss',
        dest: documentPath + 'css',
        map: documentPath + 'css/maps',
    },
    scripts: {
        src: documentPath + 'js/**/*.js',
        dest: documentPath + 'js',
        map: documentPath + 'js/maps',
    },
    images: {
        src: documentPath + 'img/**/*.{jpg,jpeg,png,svg,gif}',
        dest: documentPath + 'img',
    }
};

// HTML整形
function html() {
    return gulp
        .src(paths.html.src, {since: gulp.lastRun(html)})
        .pipe(
            plumber({
                errorHandler: notify.onError('<%= error.message %>'),
            }),
        )
        .pipe(
            prettify({
                indent_char: ' ',
                indent_size: 4,
                unformatted: ['a', 'span', 'br'],
            }),
        )
        .pipe(gulp.dest(paths.html.dest));
}
function php() {
    return gulp
        .src(paths.php.src)
        .pipe(gulp.dest(paths.php.dest));
}

// Sassコンパイル(非圧縮)
function sassNoCompress() {
    return gulp
        .src(paths.styles.src)
        .pipe(
            plumber({
                errorHandler: notify.onError('<%= error.message %>'),
            }),
        )
        .pipe(sourcemaps.init())
        .pipe(sassglob())
        .pipe(
            sass({
                outputStyle: 'expanded',
            }),
        )
        .pipe(sassUnicode())
        .pipe(
            autoprefixer({
                overrideBrowserslist: ['last 2 versions', 'ie >= 11', 'Android >= 6'],
                grid: 'autoplace',
            })
        )
        .pipe(replace(/@charset ("|')(Shift_JIS|UTF-8)("|');/gi, ''))
        .pipe(header('@charset "EUC-JP";\n\n')) // @charset 宣言を追加
        .pipe(convertEncoding({ to: 'EUC-JP' })) // EUC-JPへ変換
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

// Sassコンパイル（圧縮）
function sassCompress() {
    return gulp
        .src(paths.styles.src)
        .pipe(
            plumber({
                errorHandler: notify.onError('<%= error.message %>'),
            }),
        )
        .pipe(sourcemaps.init())
        .pipe(sassglob())
        .pipe(
            sass({
                outputStyle: 'compressed',
            }),
        )
        .pipe(
            autoprefixer({
                overrideBrowserslist: ['last 2 versions', 'ie >= 11', 'Android >= 6'],
                grid: 'autoplace',
            })
        )
        .pipe(replace(/@charset ("|')(Shift_JIS|UTF-8)("|');/gi, ''))
        .pipe(header('@charset "EUC-JP";\n')) // @charset 宣言を追加
        .pipe(convertEncoding({ to: 'EUC-JP' })) // EUC-JPへ変換
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

// JSコンパイル
function scripts() {
    return gulp
        .src(paths.scripts.src, {sourcemaps: true})
        .pipe(
            plumber({
                errorHandler: notify.onError('<%= error.message %>'),
            }),
        )
        .pipe(uglify())
        // .pipe(
        //     rename({
        //         suffix: '.min',
        //     }),
        // )
        .pipe(gulp.dest(paths.scripts.dest));
}

// 画像最適化
const imageminOption = [
    pngquant({quality: [0.7, 0.85]}),
    imagemin.mozjpeg({quality: 85}),
    imagemin.gifsicle(),
    imagemin.optipng(),
    imagemin.svgo({removeViewBox: false,}),
];

function images() {
    return gulp
        .src(paths.images.src, {since: gulp.lastRun(images)})
        .pipe(imagemin(imageminOption))
        .pipe(gulp.dest(paths.images.dest));
}

// マップファイル除去
function cleanMapFiles() {
    return del([paths.styles.map, paths.scripts.map],{
        force:true,
    });
}

// ===Lint Tasks===
// HTML Lint
function htmlLint() {
    return gulp
        .src(paths.html.src)
        .pipe(htmlhint())
        .pipe(htmlhint.reporter());
}

// ESLint
function esLint() {
    return gulp
        .src(paths.scripts.src)
        .pipe(
            eslint({
                useEslintrc: false,
                fix: true,
            }),
        )
        .pipe(eslint.format())
        .pipe(eslint.failAfterError());
}


// ブラウザ更新&ウォッチタスク
const browserSyncOption = {
    reloadOnRestart: true
};

function browserSyncSet(done) {
    browserSync.init(browserSyncOption);
    done();
}
function connectSync(done){
    connectphp.server({
        base: documentPath,
        bin: 'C:/xampp/php/php.exe',
        ini: 'C:/xampp/php/php.ini',
        port:portNum,
        open:true,
        stdio:"ignore"
    },browserSyncSet(done));
    done();
}
function watchFiles(done) {
    const browserReload = () => {
        browserSync.reload();
        done();
    };
    gulp.watch(paths.styles.src).on('change', gulp.series(sassCompress));
    gulp.watch(paths.scripts.src).on('change', gulp.series(esLint));
    // gulp.watch(paths.images.src).on('change', gulp.series(images)); //全ファイル書き出し直しの為無効化
}

gulp.task('default', gulp.series(gulp.parallel(sassCompress,connectSync), gulp.series(watchFiles)));

gulp.task('clean', cleanMapFiles);
gulp.task('imagemin', images);
gulp.task('sass-no-compress', sassNoCompress);
gulp.task('sass-compress', sassCompress);
gulp.task('build', gulp.series(gulp.parallel(scripts, 'imagemin', 'sass-compress', html), 'clean'));
gulp.task('eslint', esLint);
gulp.task('html-lint', htmlLint);
gulp.task('test', gulp.series(esLint, htmlLint));