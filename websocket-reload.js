const ws = new WebSocket( 'ws://localhost:8000' );

ws.onmessage = ( message ) => {
  if ( message.data === 'reload' ) {
    window.location.reload();
  }
};
