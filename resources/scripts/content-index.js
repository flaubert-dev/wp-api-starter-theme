// ============ 1

const bodyBlog    = document.querySelector( 'body.blog' );
const bodyArchive = document.querySelector( 'body.archive' );
const bodyCat     = document.querySelector( 'body.archive.category' );
const bodySearch  = document.querySelector( 'body.search-results' );
const bodyTC      = document.querySelector( 'body.page-template-template-custom' );

// ============ 2

if ( bodyBlog || ( bodyArchive && !bodyCat ) || bodySearch || !bodyTC ) {
  const body = document.querySelector( 'body' );

  body.addEventListener('click', ( event ) => {
    if ( event.target.matches( '#JS-content-index #JS-load-index a' ) ) {
      event.preventDefault();
  
      fetchLoad( event.target.href );
  
      window.history.pushState( null, null, event.target.href );
    }
  });

  // ============ 3

  async function fetchLoad( url ) {
    document.querySelector( '#JS-content-index' ).innerHTML   = 'Loading...';
    const fetchRequest                                        = await fetch( url );
    const html                                                = await fetchRequest.text();
  
    replaceContent( html );
  }

  // ============ 4

  function replaceContent( html ) {
    const newElement      = document.createElement( 'div' );
    newElement.innerHTML  = html;
    const oldContent      = document.querySelector( '#JS-content-index' );
    const newContent      = newElement.querySelector( '#JS-content-index' );
    oldContent.innerHTML  = newContent.innerHTML;
  }

  // ============ 5

  window.addEventListener('popstate', () => {
    fetchLoad( window.location.href );
  });
}
