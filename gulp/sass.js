const {
    dest,
    src
} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const pxtorem = require('postcss-pxtorem');
const sortMediaQueries = require('postcss-sort-media-queries');
const gulpStylelint = require('gulp-stylelint');
const uniqueSelectors = require('postcss-unique-selectors');
const stylelint = require('stylelint');

const autoprefixerOptions = {
    expand: true,
    flatten: true,
};

const pxToRemOptions = {
    propWhiteList: [
        'font',
        'font-size',
        'line-height',
        'letter-spacing',
        'margin',
        'margin-top',
        'margin-right',
        'margin-bottom',
        'margin-left',
        'padding',
        'padding-top',
        'padding-right',
        'padding-bottom',
        'padding-left'
    ]
};

const sortMediaQueriesOptions = {
    sort: 'mobile-first'
}

const stylelintOptions = {
	configBasedir: './'
}

const buildStyles = () => {
    return src('./blocks/**/*.scss')
        .pipe(
            sass().on('error', sass.logError)
        )
        .pipe(
            sourcemaps.init()
        )
        .pipe(postcss([
            autoprefixer(autoprefixerOptions),
            pxtorem(pxToRemOptions),
            sortMediaQueries(sortMediaQueriesOptions),
            uniqueSelectors()
        ]))
		.pipe(
            sourcemaps.write('.')
        )
        .pipe(
            dest('./blocks/')
        );
}

export default buildStyles;