<?php get_header(); ?>

<div class="book-detail container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php
            $author = get_the_author();
            $isbn = get_field('isbn');
            $rating = get_field('rating');
            $description = get_the_content();
            $buy_link = get_field('buy_link');
            $categories = get_the_category();
        ?>

       <?php if ( has_post_thumbnail() ) : ?>
    <div class="book-cover">
        <?php the_post_thumbnail([200, 300]); ?>
    </div>
<?php endif; ?>

        <p><strong>Author:</strong> <?= esc_html($author); ?></p>
        <p><strong>Genre:</strong> <?= esc_html($genre_list); ?></p>
        <p><strong>ISBN:</strong> <?= esc_html($isbn); ?></p>
        <p><strong>Rating:</strong> <?= esc_html($rating); ?>/5</p>

      <div class="description">description: <?= wpautop($description); ?></div>


        <?php if ($buy_link) : ?>
            <p><a href="<?= esc_url($buy_link); ?>" class="ast-button" target="_blank">Buy Now</a></p>
        <?php endif; ?>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
