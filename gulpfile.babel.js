const {
	parallel,
    series,
    watch
} = require('gulp'),
sass = require('./gulp/sass'),
javascript = require('./gulp/javascript'),
livereload = require('gulp-livereload');


const watchJs = () => {
    watch(
        ['./blocks/**/*.js'],
        { ignoreInitial: false },
        series(javascript.default)
    );
}

const watchSass = () => {
	livereload.listen();
    watch(
        ['./blocks/**/*.scss'],
        { ignoreInitial: false },
        series(sass.default)
    );
}

export default(
    parallel(
        watchJs,
        watchSass
    )
)