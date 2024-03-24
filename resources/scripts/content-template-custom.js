// ============ 1

const bodyTemplateCustom = document.querySelector( 'body.page-template-template-custom' );

if ( bodyTemplateCustom ) {

  // ============ 2

  async function contentTemplateCustom() {
    try {
      // === WP API PROMISE
      await wp.api.loadPromise;

      // === ARGS
      const args1 = {
        // Query collection of posts: readme.txt
        categories: contentCustom.idSection_1,
        // Query collection of posts: readme.txt
        per_page: contentCustom.ppSection_1,
        // (Posts) Query parameter: readme.txt
        _fields: 'title,excerpt,link,date,featured_media,_links',
        // (Posts) Query parameter: readme.txt
        _embed: 'author,wp:featuredmedia,wp:term',
        _wpnonce: contentCustom.nonce
      };

      const args2 = {
        // Query collection of posts: readme.txt
        categories: contentCustom.idSection_2,
        // Query collection of posts: readme.txt
        per_page: contentCustom.ppSection_2,
        // (Posts) Query parameter: readme.txt
        _fields: 'title,excerpt,link,date,featured_media,_links',
        // (Posts) Query parameter: readme.txt
        _embed: 'author,wp:featuredmedia,wp:term',
        _wpnonce: contentCustom.nonce
      };

      const args3 = {
        // Query collection of posts: readme.txt
        categories: contentCustom.idSection_3,
        // Query collection of posts: readme.txt
        per_page: contentCustom.ppSection_3,
        // (Posts) Query parameter: readme.txt
        _fields: 'title,excerpt,link,date,featured_media,_links',
        // (Posts) Query parameter: readme.txt
        _embed: 'author,wp:featuredmedia,wp:term',
        _wpnonce: contentCustom.nonce
      };

      // === WP API Collections
      const postsCollection = new wp.api.collections.Posts();

      // === WP API FETCH
      const postsFirst      = await postsCollection.fetch({ data: args1 });
      const postsSecond     = await postsCollection.fetch({ data: args2 });
      const postsThird      = await postsCollection.fetch({ data: args3 });

      // === LOOP CARDS
      if ( postsFirst.length && postsSecond.length && postsThird.length ) {
        cardDisplay( postsFirst, postsSecond, postsThird );
      }
    }

    catch ( error ) {
      console.log( error );
    }
  }

  // ============ 3

  function cardDisplay( postsFirst, postsSecond, postsThird ) {
    const contentFirst      = document.querySelector( '#JS-content-first' );
    const cardFirst         = document.querySelector( '#JS-content-first #JS-card-category' );
    contentFirst.innerHTML  = ""; // Clear content

    postsFirst.forEach(( post ) => {
      // === POST DATA
      const link       = post.link;
      const title      = post.title.rendered;
      const date       = new Date( post.date ).toLocaleDateString( 'pt-BR' );
      const excerpt    = post.excerpt.rendered;
      const authorName = post._embedded.author[0].name;
      const authorLink = post._embedded.author[0].link;
      const catName    = post._embedded['wp:term'][0][0].name;
      const catLink    = post._embedded['wp:term'][0][0].link;
      const mediaSrc   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].source_url : 'https://source.unsplash.com/random';
      const mediaAlt   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].alt_text : 'Alt none';

      // === CARDS CLONES
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

    const contentSecond     = document.querySelector( '#JS-content-second' );
    const cardSecond        = document.querySelector( '#JS-content-second #JS-card-category' );
    contentSecond.innerHTML = ""; // Clear content

    postsSecond.forEach(( post ) => {
      // === POST DATA
      const link       = post.link;
      const title      = post.title.rendered;
      const date       = new Date( post.date ).toLocaleDateString( 'pt-BR' );
      const excerpt    = post.excerpt.rendered;
      const authorName = post._embedded.author[0].name;
      const authorLink = post._embedded.author[0].link;
      const catName    = post._embedded['wp:term'][0][0].name;
      const catLink    = post._embedded['wp:term'][0][0].link;
      const mediaSrc   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].source_url : 'https://source.unsplash.com/random';
      const mediaAlt   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].alt_text : 'Alt none';

      // === CARDS CLONES
      const cardClone                                                     = cardSecond.cloneNode(true);
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

      contentSecond.appendChild( cardClone );
    });

    const contentThird      = document.querySelector( '#JS-content-third' );
    const cardThird         = document.querySelector( '#JS-content-third #JS-card-category' );
    contentThird.innerHTML  = ""; // Clear content

    postsThird.forEach(( post ) => {
      // === POST DATA
      const link       = post.link;
      const title      = post.title.rendered;
      const date       = new Date( post.date ).toLocaleDateString( 'pt-BR' );
      const excerpt    = post.excerpt.rendered;
      const authorName = post._embedded.author[0].name;
      const authorLink = post._embedded.author[0].link;
      const catName    = post._embedded['wp:term'][0][0].name;
      const catLink    = post._embedded['wp:term'][0][0].link;
      const mediaSrc   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].source_url : 'https://source.unsplash.com/random';
      const mediaAlt   
        = post.featured_media > 0 ? post._embedded['wp:featuredmedia'][0].alt_text : 'Alt none';

      // === CARDS CLONES
      const cardClone                                                     = cardThird.cloneNode(true);
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

      contentThird.appendChild( cardClone );
    });
  }

  // ============ 4

  contentTemplateCustom();
}
