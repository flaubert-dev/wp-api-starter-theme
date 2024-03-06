// ============ 1

async function contentTemplateCustom() {
  try {
    // === WP API PROMISE
    await wp.api.loadPromise;

    // === ARGS
    const args1 = {
      // Query collection of posts: readme.txt
      categories: contentCustom.id,
      // Query collection of posts: readme.txt
      per_page  : contentCustom.perPage,
      // (Posts) Query parameter: readme.txt
      _fields: 'title,excerpt,link,date,featured_media,_links',
      // (Posts) Query parameter: readme.txt
      _embed: 'author,wp:featuredmedia,wp:term',
      _wpnonce  : contentCustom.nonce
    };

    const args2 = {
      // Query collection of posts: readme.txt
      categories: 32, // <-<-<-<-<-<-<- Tests (alpha version!)
      // Query collection of posts: readme.txt
      per_page: contentCustom.perPage,
      // (Posts) Query parameter: readme.txt
      _fields: 'title,excerpt,link,date,featured_media,_links',
      // (Posts) Query parameter: readme.txt
      _embed: 'author,wp:featuredmedia,wp:term',
      _wpnonce: contentCustom.nonce
    };

    const args3 = {
      // Query collection of posts: readme.txt
      categories: 41, // <-<-<-<-<-<-<- Tests (alpha version!)
      // Query collection of posts: readme.txt
      per_page: contentCustom.perPage,
      // (Posts) Query parameter: readme.txt
      _fields: 'title,excerpt,link,date,featured_media,_links',
      // (Posts) Query parameter: readme.txt
      _embed: 'author,wp:featuredmedia,wp:term',
      _wpnonce: contentCustom.nonce
    };

    // === WP API Collections
    const postsCollection = new wp.api.collections.Posts();

    // === WP API FETCH
    const postsFirst  = await postsCollection.fetch({ data: args1 });
    const postsSecond = await postsCollection.fetch({ data: args2 });
    const postsThird  = await postsCollection.fetch({ data: args3 });

    // === LOOP CARDS
    if ( postsFirst.length && postsSecond.length && postsThird.length ) {
      cardDisplay( postsFirst, postsSecond, postsThird );
    }
  }

  catch ( error ) {
    console.log( error );
  }
}

// ============ 2

function cardDisplay( postsFirst, postsSecond, postsThird ) {
  const contentFirst = document.querySelector('#JS-content-first');
  const cardFirst = document.querySelector('#JS-content-first #JS-card-category');
  contentFirst.innerHTML = ""; // Clear content

  postsFirst.forEach((post) => {
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
      = cardFirst.cloneNode(true);

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
      = authorName ? authorName : 'author none';

    cardClone.childNodes[3].childNodes[9].href
      = authorLink ? authorLink : '#';

    cardClone.childNodes[3].childNodes[5].textContent 
      = catName ? catName : 'category none';

    cardClone.childNodes[3].childNodes[5].href 
      = catLink  ? catLink  : '#';
      
    contentFirst.appendChild(cardClone);
  });

  const contentSecond = document.querySelector('#JS-content-second');
  const cardSecond = document.querySelector('#JS-content-second #JS-card-category');
  contentSecond.innerHTML = ""; // Clear content

  postsSecond.forEach((post) => {
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
      = cardSecond.cloneNode(true);

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
      = authorName ? authorName : 'author none';

    cardClone.childNodes[3].childNodes[9].href
      = authorLink ? authorLink : '#';
      
    cardClone.childNodes[3].childNodes[5].textContent 
      = catName ? catName : 'category none';

    cardClone.childNodes[3].childNodes[5].href 
      = catLink  ? catLink  : '#';

    contentSecond.appendChild(cardClone);
  });

  const contentThird = document.querySelector('#JS-content-third');
  const cardThird = document.querySelector('#JS-content-third #JS-card-category');
  contentThird.innerHTML = ""; // Clear content

  postsThird.forEach((post) => {
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
      = cardThird.cloneNode(true);

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
      = authorName ? authorName : 'author none';

    cardClone.childNodes[3].childNodes[9].href
      = authorLink ? authorLink : '#';

    cardClone.childNodes[3].childNodes[5].textContent 
      = catName ? catName : 'category none';

    cardClone.childNodes[3].childNodes[5].href 
      = catLink  ? catLink  : '#';

    contentThird.appendChild(cardClone);
  });
}

// ============ 3

contentTemplateCustom();
