<?php get_header(); ?>
<section class="accueil">
  <?php
    $page = get_page_by_path('accueil');
    echo $page->post_content;
  ?>
</section>
<?php get_footer(); ?>