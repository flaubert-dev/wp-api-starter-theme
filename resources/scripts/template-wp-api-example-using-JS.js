'use strict';

// ============ Step 1

async function templateWpApiExampleUsingJS() {
  try {
    await wp.api.loadPromise; // === WP API PROMISE

    const args1 = { // === ARGS
      categories: objExample.catID_1, // Query collection of posts: readme.txt
      per_page: objExample.perPage_1, // Query collection of posts: readme.txt
      _fields: 'title,excerpt,link,date,featured_media,_links', // (Posts) Query parameter: readme.txt
      _embed: 'author,wp:featuredmedia,wp:term', // (Posts) Query parameter: readme.txt
      _wpnonce: objExample.nonce
    };

    const postsCollection = new wp.api.collections.Posts();                // === WP API Collections
    const postsFirst      = await postsCollection.fetch({ data: args1 });  // === WP API FETCH
    
    if ( postsFirst.length > 0 ) { // === LOOP CARDS
      cardDisplay( postsFirst );
    }

    else {
      const contentFirst = document.querySelector( '#JS-content-first' );
      contentFirst.remove();
    }
  }

  catch ( error ) {
    const contentFirst = document.querySelector( '#JS-content-first' );
    contentFirst.remove();
    console.warn( `${error} Check if all custom fields are populated or selected in the template: WP API Example JS` );
  }
}

// ============ Step 2

function cardDisplay( postsFirst ) {
  const contentFirst      = document.querySelector( '#JS-content-first' );
  const cardFirst         = document.querySelector( '#JS-content-first #JS-card-category' );
  contentFirst.innerHTML  = ""; // Clear content

  postsFirst.forEach(( post ) => { // === POST DATA
    const link       = post.link;
    const title      = post.title.rendered;
    const date       = new Date( post.date ).toLocaleDateString( 'pt-BR' );
    const excerpt    = post.excerpt.rendered;
    const authorName = post._embedded.author[0].name;
    const authorLink = post._embedded.author[0].link;
    const catName    = post._embedded['wp:term'][0][0].name;
    const catLink    = post._embedded['wp:term'][0][0].link;
    const mediaSrc   
      = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].source_url : 'https://placehold.jp/400x200.png';
    const mediaAlt   
      = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].alt_text : 'Alt none';

    const cardClone                                                     = cardFirst.cloneNode(true);
    cardClone.childNodes[1].href                                        = link ?? '#';
    cardClone.childNodes[1].childNodes[1].src                           = mediaSrc;
    cardClone.childNodes[1].childNodes[1].alt                           = mediaAlt;
    cardClone.childNodes[3].childNodes[1].firstElementChild.textContent = title ?? 'title none';
    cardClone.childNodes[3].childNodes[1].href                          = link ?? '#';
    cardClone.childNodes[3].childNodes[3].textContent                   = date ?? 'data none';
    cardClone.childNodes[3].childNodes[7].innerHTML                     = excerpt ?? 'excerpt none';
    cardClone.childNodes[3].childNodes[9].textContent                   = authorName ?? 'none';
    cardClone.childNodes[3].childNodes[9].href                          = authorLink ?? '#';
    cardClone.childNodes[3].childNodes[5].textContent                   = catName ?? 'category none';
    cardClone.childNodes[3].childNodes[5].href                          = catLink ?? '#';
      
    contentFirst.appendChild( cardClone );
  });
}

// ============ Step 3

templateWpApiExampleUsingJS();
