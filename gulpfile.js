const { watch, series, parallel } = require( 'gulp' );
const browserSync                 = require( 'browser-sync' ).create();
const exec                        = require( 'child_process' ).exec;

// Tarefa para iniciar o BrowserSync
function startBrowserSync() {
  browserSync.init({
    proxy: 'http://localhost/success', // Endereço local do seu WP
    open: true // Evita abrir automaticamente o navegador
  });
}

// Tarefa para iniciar o watch do tailwind
function startTailwind() {
  exec( './tailwindcss -i ./resources/styles/input.css -o ./style.css --watch' );
}

// Tarefa para assistir a mudanças nos arquivos
function watchFiles() {
  watch(['**/*.php', './resources/**/*.{css,js}'], browserSync.reload);
}

// Tarefa principal que executa tudo em paralelo
exports.default = series( startTailwind, parallel( startBrowserSync, watchFiles ) );
