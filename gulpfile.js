const { watch, parallel, series } = require( 'gulp' );
const browserSync                 = require( 'browser-sync' ).create();

function startBrowserSync() {
  browserSync.init({
    proxy: 'http://localhost/success', // Change to your local development URL
    open: true // true will automatically open the browser on port 3000
  });
}

function reload( done ) {
  browserSync.reload( { reloadDebounce: 10000 } );
  done();
}

function watchFiles() {
  watch(['*.php', './app/**/*.php', './config/*.php', './resources/**/*.{php,css,js}']).on('change', series( reload ));
}

exports.default = parallel( startBrowserSync, watchFiles );
