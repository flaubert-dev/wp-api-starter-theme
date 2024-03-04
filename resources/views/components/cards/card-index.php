<article id="JS-card-index" class="card card--index">
  <a class="thumbnail" href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
      
      <?php the_post_thumbnail(); ?>

    <?php else : ?>

      <img width="640" 
           height="200" 
           src="https://source.unsplash.com/random"      
           class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
           alt="Alt none" decoding="async" fetchpriority="high">

    <?php endif; ?>
  </a>

  <section class="card__content">
    <a class="title" href="<?php the_permalink(); ?>">
      <h2>
        <?php the_title(); ?>
      </h2>
    </a>

    <time class="time">
      <?php the_date(); ?>
    </time>

    <div class="category">
      <?php the_category( ', ' ); ?>
    </div>

    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>

    <div class="author">
      <?php the_author_posts_link(); ?>
    </div>
  </section>
</article>
