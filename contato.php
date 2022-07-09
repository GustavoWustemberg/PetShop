<!DOCTYPE html>
<html lang="pt_BR">

<?php include('./components/head.php') ?>
<?php include('geral.php') ?>

<body>

  <?php include('./components/header.php') ?>

  <main>
    <section class="section" id="contact">
      <div class="container grid">
        <div class="text">
          <h2 class="title">Entre em contato com a gente!</h2>
          <p>
            Entre em contato com a <?= $nomeSite ?>, e agende o seu horário.
          </p>
          <a href="https://api.whatsapp.com/send?phone=+55<?= $telefone2[0] . " " . $telefone2[1] ?>&text=Oi! Gostaria de agendar um horário" class="button" target="_blank"><i class="icon-whatsapp"></i> Entrar em contato</a>
        </div>

        <div class="links">
          <ul class="grid">
            <li><i class="icon-phone"></i><a href="tel:<?= $telefone1[0] . " " . $telefone1[1] ?>"><?= $telefone1[0] . " " . $telefone1[1] ?></a></li>
            <li><i class="icon-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=+55<?= $telefone2[0] . " " . $telefone2[1] ?>&text=Oi! Gostaria de agendar um horário" target="_blank"><?= $telefone2[0] . " " . $telefone2[1] ?></a></li>
            <li><i class="icon-map-pin"></i><a href="https://www.google.com/maps/search/<?= $endereco ?>" target="_blank"> <?= $endereco ?></a> </li>
            <li><i class="icon-mail"></i><a href="mailto:<?= $email ?>"><?= $email ?></a></li>
          </ul>
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