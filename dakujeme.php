<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ďakujeme - AutoServis Pro</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php require __DIR__ . '/zaciatok_konca/header.php'; ?>
  <main>
    <!-- Banner s textom (Page header) -->
    <!-- nadpisy (Headings) -->
    <section class="page-header page-header-blue">
      <div class="container">
        <h1>Ďakujeme</h1>
        <p>Vašu správu sme úspešne prijali. Čoskoro sa vám ozveme.</p>
        <!-- Tlačidlo s preklikom (styled link) -->
        <a href="index.php" class="btn btn-white">Späť na domov</a>
      </div>
    </section>

    <!--DAKUJEME -->
    <section class="container thankyou-section">
      <div class="thankyou-box">
        <div class="success-icon">✓</div>
        <h2>Správa odoslaná</h2>
        <p class="thankyou-text">Ďakujeme, že ste nás kontaktovali. Skoro sa vám ozveme s odpoveďou.</p>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/zaciatok_konca/footer.php'; ?>
<?php require __DIR__ . '/zaciatok_konca/skripty.php'; ?>
</body>
</html>