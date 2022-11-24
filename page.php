<?php 
get_header();
$page = get_post();
?>
<section class="<?php echo $page->post_name; ?>">
<?php
echo $page->post_content;
?>
</section>
<?php get_footer(); ?>