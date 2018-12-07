<?php

    get_header();

    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <article class="article container">
            <!-- article-body -->
            <div class="article--body">
                <!-- articl-container -->
                <div class="article--title">
                    <!-- article-title -->
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p class="article--info">
                        تاریخ : 
                    <span class="article--time"><?php the_date(); ?></span> |
                     در موضوع : 
                    <span class= "article--category"><?php
                        $categories = get_the_category();
                        $seperator = '، ';
                        $output = '';

                        if ($categories) {
                            foreach ($categories as $category) {
                                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator; 
                            }
                            echo trim($output, $seperator);
                        }
                    ?></span>
                    <hr>
                </div>
                <div class="article--content">
                    <!-- article-content -->
                    <p>
                        <div class="article--post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                    </div>
                    </p>
                    <?php the_content('<button class="more-link full-width">بیشتر بخوانید</button>'); ?>
                </div>
            </div>
        </article>

    <?php
    endwhile;

    else :
        echo '<p>هیچ پستی نیست :(</p>';

    endif;

    get_footer();

?>