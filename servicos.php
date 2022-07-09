<!DOCTYPE html>
<html lang="pt_BR">

<?php include('./components/head.php') ?>
<?php include('geral.php') ?>

<body>

  <?php include('./components/header.php') ?>

  <main>

    <section class="section" id="services">
      <div class="container grid">
        <header>
          <h2 class="title">Serviços</h2>
          <p class="subtitle">
            Com mais de 5 anos no mercado, a <strong><?= $nomeSite ?></strong>
            tem profissionais de alta qualidade e um ótimo serviço de atendimento ao
            cliente.
          </p>
        </header>
        <div class="cards grid">
          <div class="card">
            <i class="icon-shower"></i>
            <h3 class="title">Banho</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              distinctio neque blanditiis, dolorem aperiam nulla explicabo
              asperiores
            </p>
          </div>
          <div class="card">
            <i class="icon-scissors"></i>
            <h3 class="title">Tosa</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              distinctio neque blanditiis, dolorem aperiam nulla explicabo
              asperiores
            </p>
          </div>
          <div class="card">
            <i class="icon-veterinary"></i>
            <h3 class="title">Veterinário</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              distinctio neque blanditiis, dolorem aperiam nulla explicabo
              asperiores
            </p>
          </div>
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