<?php
    get_header();
    the_post();
?>
<main role="main" class="container pt-1">
    <h1>
        <?php the_title(); ?>
    </h1>
    <div class="">
        <?php the_content(); ?>
    </div>
</main>
<?php get_footer(); ?>
