<?php
/**
 * Template Name: Custom Book Archive
 */

get_header();
?>

<div class="ast-container">
    <h1 class="entry-title">Books Library</h1>

    <?php
    // Arguments for custom query
    $args = [
        'post_type' => 'book',
        'posts_per_page' => 12,
        'orderby' => 'date',
        'order' => 'DESC',
    ];

    $books_query = new WP_Query($args);
    ?>

    <?php if ( $books_query->have_posts() ) : ?>
        <div class="book-grid; display: flex;" >
            <?php while ( $books_query->have_posts() ) : $books_query->the_post(); ?>
                <div class="book-card" style="background: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 20px;">
                    <h2><?php the_title(); ?></h2>

                    <?php
                        $author = get_the_author();
                        $isbn = get_field('isbn');
                        $rating = get_field('rating');
                        $description = get_field('description');
                        $buy_link = get_field('buy_link');
                            $categories = get_the_category();
                        $genre_list = $genre_terms ? join(', ', wp_list_pluck($genre_terms, 'name')) : '—';
                    ?>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom: 10px;"><?php the_post_thumbnail('medium'); ?></div>
                    <?php endif; ?>

                    <p><strong>Author:</strong> <?= esc_html($author); ?></p>
                    <p><strong>Genre:</strong> <?= esc_html($genre_list); ?></p>
                    <p><strong>ISBN:</strong> <?= esc_html($isbn); ?></p>
                    <p><strong>Rating:</strong> <?= esc_html($rating); ?>/5</p>
                    <p><?= esc_html(wp_trim_words($description, 25)); ?></p>


                    <a href="<?php the_permalink(); ?>" class="ast-button">Buy Now</a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="pagination" style="margin-top: 2rem;">
            <?php
                echo paginate_links([
                    'total' => $books_query->max_num_pages
                ]);
            ?>
        </div>
    <?php else : ?>
        <p>No books found.</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>