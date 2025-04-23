<?php get_header(); ?>

<div class="book-archive">
    <h1>Books</h1>
    
    <?php if ( have_posts() ) : ?>
        <div class="book-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="book-item">
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_post_thumbnail('medium'); ?></div>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">View Details</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No books found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
