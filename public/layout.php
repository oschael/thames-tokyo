<?php
if (!isset($title)) $title = "Thames & Tokyo";
if (!isset($section)) $section = "";
if (!isset($content)) $content = "";
if (!isset($pageScripts)) $pageScripts = "";
?>

<!DOCTYPE html>
  
  <html lang="en">
  
  <head>
      <?php include __DIR__ . '/partials/head.php'; ?>
  </head>
  
  <body>

    <?php include __DIR__ . '/partials/nav.php'; ?>

    <main>
        <?= $content ?>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://unpkg.com/splitting@1.0.6/dist/splitting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <?= $pageScripts ?>

    <script src="/assets/js/main.js" defer></script>

  </body>
</html>