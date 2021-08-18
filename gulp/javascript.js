const {
    dest,
    src
} = require('gulp');
const eslint = require('gulp-eslint');

const buildJs = () => {
    return src('./blocks/**/*.js')
        .pipe(eslint())
        .pipe(eslint.format())
        .pipe(eslint.failAfterError());
}

export default buildJs;