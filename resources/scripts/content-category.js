// ============ 1

async function contentCategory() {
  try {
    // === WP API PROMISE
    await wp.api.loadPromise;

    // === ARGS
    const args = {
      // Query collection of posts: readme.txt
      categories: category.id, 
      // Query collection of posts: readme.txt
      per_page  : category.perPage, 
      // (Posts) Query parameter: readme.txt
      _fields: 'title,excerpt,link,date,featured_media,_links',
      // (Posts) Query parameter: readme.txt
      _embed: 'author,wp:featuredmedia,wp:term',
      _wpnonce  : category.nonce
    };

    // === WP API FETCH
    const postsCollection = new wp.api.collections.Posts();
    const posts           = await postsCollection.fetch({ data: args });

    // === LOOP CARDS
    if ( posts.length ) {
      cardDisplay( posts );
    }

    // === PAGINATION
    if ( postsCollection.hasMore() ) {
      pagination( postsCollection );
    }
  }

  catch ( error ) {
    console.log( error );
  }
}

// ============ 2

function cardDisplay( posts ) {
  const content           = document.querySelector('#JS-content-category');
  const card              = document.querySelector('#JS-content-category #JS-card-category');
  content.innerHTML       = ""; // Clear content

  posts.forEach(( post ) => {
    // === POST DATA
    const link       = post.link;
    const mediaSrc   = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].source_url : '';
    const mediaAlt   = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].alt_text : '';
    const title      = post.title.rendered;
    const date       = new Date(post.date).toLocaleDateString('pt-BR');
    const excerpt    = post.excerpt.rendered;
    const authorName = post._embedded.author[0].name;
    const authorLink = post._embedded.author[0].link;
    const catName    = post._embedded['wp:term'][0][0].name;
    const catLink    = post._embedded['wp:term'][0][0].link;

    // === CARDS CLONES
    const cardClone 
      = card.cloneNode( true );

    cardClone.childNodes[1].href
      = link ? link : '#';

    cardClone.childNodes[1].childNodes[1].src
      = mediaSrc ? mediaSrc : 'https://source.unsplash.com/random';

    cardClone.childNodes[1].childNodes[1].alt
      = mediaAlt ? mediaAlt : 'Alt none';

    cardClone.childNodes[3].childNodes[1].firstElementChild.textContent
      = title ? title : 'title none';

    cardClone.childNodes[3].childNodes[1].href
      = link ? link : '#';

    cardClone.childNodes[3].childNodes[3].textContent
      = date ? date : 'data none';

    cardClone.childNodes[3].childNodes[7].innerHTML
      = excerpt ? excerpt : 'excerpt none';

    cardClone.childNodes[3].childNodes[9].textContent
      = authorName ? authorName : 'autor none';

    cardClone.childNodes[3].childNodes[9].href
      = authorLink ? authorLink : '#';
    
    cardClone.childNodes[3].childNodes[5].textContent 
      = catName ? catName : 'category none';

    cardClone.childNodes[3].childNodes[5].href 
      = catLink  ? catLink  : '#';

    content.appendChild( cardClone );
  });
}

// ============ 3

function pagination( postsCollection ) {
  const btnLoadMore          = document.querySelector( '#JS-load-category' );
  btnLoadMore.style.opacity  = 'block';

  btnLoadMore.addEventListener('click', async () => {
    const nextPosts = await postsCollection.more();

    cardDisplay( nextPosts );

    if ( postsCollection.hasMore() === false ) {
      btnLoadMore.remove();
    }
  });
}

// ============ 4

contentCategory();
