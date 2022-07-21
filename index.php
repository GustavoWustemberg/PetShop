<?php
$title = 'Home';

?>
<?php include('./components/head.php') ?>
<?php include('geral.php') ?>

<body>

  <?php include('./components/header.php') ?>

  <main>
    <!-- HOME -->
    <section class="section" id="home">
      <div class="container grid">
        <div class="image">
          <img src="./assets/images/apresentacao.jpg" alt="Cachorro tomando banho" title="Cachorro tomando banho" />
        </div>
        <div class="text">
          <h2 class="title"><?= $slogan ?></h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, repudiandae incidunt! Sapient.
          </p>
          <a class="button" href="contato.php">Agendar um horário</a>
        </div>
      </div>
    </section>

  </main>

  <?php include('./components/footer.php') ?>

  <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

  <!-- swiper -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- scrollreveal -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- main.js -->
  <script src="js/script.js"></script>
</body>

</html>