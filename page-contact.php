<?php get_header() ?>
<section class="contact">
  <?php
    $page = get_page_by_path('contact');
    echo do_shortcode($page->post_content);
  ?>
  <div id="contact-map" class="contact-map"></div>
</section>
<?php get_footer(); ?>