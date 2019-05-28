<?php
    get_header();
    the_post();
    // Helper::show_all_super_globals();
    // Helper::show_super_global_post();
    // Helper::show_super_global_get();
    // Helper::show_super_global_server();
    // Helper::show_super_global_files();
?>
<main role="main" class="container pt-1">
    <div class="row">
        <div class="col-12 pt-4">
            <div class="">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
