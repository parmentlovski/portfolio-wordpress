<?php do_action('display_header', 'package_header'); ?>

<main class="container">
<section id="mentions">
<?php

$pagename = get_query_var('pagename');

$args = array(
    'pagename' => $pagename
);
$post_query = new WP_Query($args);

if ($post_query->have_posts()) :
    while ($post_query->have_posts()) : $post_query->the_post();

        ?>

        <div class="row">

            <?php the_content(); ?>

        </div>
<?php
    endwhile;
endif; ?>

</section>
</main>

<?php do_action('display_footer', 'package_footer'); ?>