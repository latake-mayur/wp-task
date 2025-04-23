<?php
/**
 * Plugin Name: Book Submission Plugin
 * Description: A plugin to submit books and list them on the frontend.
 * Version: 1.0
 * Author: Mayur
 */

// Book Submission Form Shortcode
function book_submission_form_shortcode() {
    ob_start();
    ?>
    <form id="bookSubmissionForm">
        <input type="text" name="title" placeholder="Book Title" required><br>
        <input type="text" name="author" placeholder="Author" required><br>
        <input type="text" name="isbn" placeholder="ISBN"><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <select name="genre">
            <?php
            $genres = get_terms('category', ['hide_empty' => false]);
            foreach ($genres as $genre) {
                echo "<option value='{$genre->term_id}'>{$genre->name}</option>";
            }
            ?>
        </select><br>
        <input type="url" name="buy_link" placeholder="Buy Link"><br>
        <input type="number" name="rating" placeholder="Rating (1-5)" min="1" max="5"><br>
        <input type="file" name="cover_image" id="cover_image"><br>
        <button type="submit">Submit Book</button>
    </form>
    <div id="book-submission-response"></div>
    <?php
    return ob_get_clean();
}
add_shortcode('submit_book_form', 'book_submission_form_shortcode');

// Book List Shortcode
function book_list_shortcode($atts) {
    $args = [
        'post_type' => 'book',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ];
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        echo '<div class="book-list">';
        while ($query->have_posts()) {
            $query->the_post();
            $author = get_post_meta(get_the_ID(), 'author', true);
            $description = get_post_meta(get_the_ID(), 'description', true);
            $buy_link = get_post_meta(get_the_ID(), 'buy_link', true);
            echo '<div class="book">';
            the_post_thumbnail('thumbnail');
            echo '<h3>' . get_the_title() . '</h3>';
            echo '<p><strong>Author:</strong> ' . esc_html($author) . '</p>';
            echo '<p>' . wpautop($description) . '</p>';
            echo '<a href="' . esc_url($buy_link) . '" target="_blank">Buy Now</a>';
            echo '</div>';
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo 'No books found.';
    }
    return ob_get_clean();
}
add_shortcode('book_list', 'book_list_shortcode');
