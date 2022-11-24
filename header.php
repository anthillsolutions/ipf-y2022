<?php
  $slug = get_post_field( 'post_name', get_post() );
  $site_title = get_bloginfo( 'name' );
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php
     echo $site_title;
    ?>
  </title>
  <link rel="stylesheet" rel="preload" as="style" onload="this.rel = 'stylesheet'" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>">
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />
  <meta name="description" content="Profitez d'un service premium et sur mesure dans toute la Suisse romande pour garantir la sécurité et le confort de vous et de vos proches.
Bénéficiez des meilleurs partenaires, adaptés à vos besoins privés et entreprise, en restant informé(e) des nouveautés du marché.
Obtenez les tarifs les plus attractifs, délivrés par notre équipe de conseillers polyalents, dans une relation dynamique axée sur le côté humain." />
  <meta name="og:type" content="website">
  <meta name="og:title" content="<?php
     echo $site_title;
    ?>">
  <meta name="og:url" content="https://www.ipfconsulting.ch/">
  <meta name="og:image" content="<?php echo get_stylesheet_directory_uri().'/assets/LOGO-OK.png'; ?>">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri().'/favicon.png'; ?>">
  <script src="https://kit.fontawesome.com/bfcdb5dbe1.js" crossorigin="anonymous"></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
  <script src="<?php echo get_stylesheet_directory_uri().'/main.js'; ?>" defer></script>
  <noscript>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>">
  </noscript>
</head>

<body>
  <header>
    <a href="/" class="logo">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/LOGO-OK.png'; ?>">
    </a>
    <nav id="nav" class="hidden-smartphone">
      <ul>
        <li>
          <a href="/" class="<?php echo ($slug == 'telephone') ? 'active' : ''; ?>">
            Accueil
          </a>
        </li>
        <li>
          <a href="/activites" class="<?php echo ($slug == 'activites') ? 'active' : ''; ?>">
            Activités
          </a>
        </li>
        <li>
          <a href="/services" class="<?php echo ($slug == 'services') ? 'active' : ''; ?>">
            Services
          </a>
        </li>
        <li>
          <a href="/contact" class="<?php echo ($slug == 'contact') ? 'active' : ''; ?>">
            Contact
          </a>
        </li>
        <li>
          <a href="/advantages-card" class="<?php echo ($slug == 'advantages-card') ? 'active' : ''; ?>">
            Advantages card
          </a>
        </li>
        <li>
          <a href="/partenaires" class="<?php echo ($slug == 'partenaires') ? 'active' : ''; ?>">
            Partenaires
          </a>
        </li>
      </ul>
    </nav>
    <button id="open-button" onclick="openMenu()" class="hidden-desktop">
      <i class="fa-solid fa-bars fa-2xl"></i>
    </button>
    <button id="close-button" onclick="closeMenu()" class="hidden-smartphone hidden-desktop">
      <i class="fa-solid fa-xmark fa-2x"></i>
    </button>
  </header>