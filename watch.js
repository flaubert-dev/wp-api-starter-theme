const chokidar  = require( 'chokidar' );
const WebSocket = require( 'ws' );
const wss       = new WebSocket.Server({ port: 8000 });

chokidar.watch(['**/*.php', '**/*.css', '**/*.js']).on('change', () => {
  wss.clients.forEach(client => {
    if (client.readyState === WebSocket.OPEN) {
      client.send('reload');
    }
  });
});

console.log( 'Watching...' );
