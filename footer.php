<footer class="gradient">
  <div class="container">
    <section>
      <h4>Adresse</h4>
      <?php
        $page = get_page_by_path('adresse', OBJECT, 'post');
        echo $page->post_content;
      ?>
    </section>

    <section>
      <h4>Téléphone</h4>
      <?php
        $page = get_page_by_path('telephone', OBJECT, 'post');
        echo $page->post_content;
      ?>
    </section>

    <section>
      <h4>Informations juridiques</h4>
      <a href="/mentions-legales">Mentions légales</a>
    </section>

    <section class="logo">
      <a href="/">
          <img src="<?php echo get_stylesheet_directory_uri().'/assets/LOGO-OK_BLANC.png'; ?>">
      </a>
    </section>
  </div>
</footer>

<div class="top" id="top" onclick="goToTop()">
  <i class="fa-solid fa-chevron-up"></i>
</div>