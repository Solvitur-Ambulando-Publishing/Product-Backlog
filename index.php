<?php get_header(); ?>
<!------- LOAD THE CONTENT ------>
<div class="rfd-content-container">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php rfd_display_comic(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>