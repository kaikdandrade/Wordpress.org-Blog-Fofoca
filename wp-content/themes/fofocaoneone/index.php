<?php get_header(); ?>

<main>
    <section>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );
        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) :
                $recent_posts->the_post();
        ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div>
                    <p>Em <?php echo the_date(); ?> por <?php the_author_posts_link(); ?>.</p>
                </div>
                <div>
                    <p><?php the_excerpt(); ?></p>
                    <p>Categorias: <?php the_category(', '); ?></p>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <aside>
        <h3>Categorias</h3>
        <ul>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) :
                $category_link = get_category_link($category->term_id);
                $post_count = $category->count;
            ?>
                <li>
                    <a href="<?php echo $category_link ?>"><?php echo $category->name ?></a>
                    <sup><?php echo $post_count ?></sup>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
    </aside>
</main>

<?php get_footer(); ?>