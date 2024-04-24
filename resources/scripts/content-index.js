// ============ Step 1

const body = document.querySelector( 'body' );

body.addEventListener('click', ( event ) => {
  if ( event.target.matches( '#JS-content-index #JS-load-index a' ) ) {
    event.preventDefault();

    fetchLoad( event.target.href );

    window.history.pushState( null, null, event.target.href );
  }
});

// ============ Step 2

async function fetchLoad( url ) {
  document.querySelector( '#JS-content-index' ).innerHTML   = 'Loading...';
  const fetchRequest                                        = await fetch( url );
  const html                                                = await fetchRequest.text();

  replaceContent( html );
}

// ============ Step 3

function replaceContent( html ) {
  const newElement      = document.createElement( 'div' );
  newElement.innerHTML  = html;
  const oldContent      = document.querySelector( '#JS-content-index' );
  const newContent      = newElement.querySelector( '#JS-content-index' );
  oldContent.innerHTML  = newContent.innerHTML;
}

// ============ Step 4

window.addEventListener('popstate', () => {
  fetchLoad( window.location.href );
});
