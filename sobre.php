<?php
$title = 'Sobre Nós';
include('./components/head.php');
include('geral.php');
?>

<body>

  <?php include('./components/header.php') ?>

  <main>
    <!-- ABOUT -->
    <section class="section" id="about">
      <div class="container grid">
        <div class="image">
          <img src="assets/images/sobre.jpg" alt="3 mulheres sorrindo" />
        </div>
        <div class="text">
          <h2 class="title">Sobre nós</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Necessitatibus deleniti perferendis vel molestiae soluta, quaerat
            beatae dicta ducimus praesentium architecto harum dolorum
            distinctio illo earum assumenda itaque. Omnis, quam repellat.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
            illum ratione impedit quae eum quis adipisci asperiores, est
            doloribus distinctio excepturi minima eius dolore! Perferendis
            laborum illo aspernatur repellendus ipsum.
          </p>
          <br />
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
            exercitationem, illum sapiente quasi hic iusto odio maiores esse
            quaerat quis necessitatibus at odit, dolores dicta, officia ab
            quos. Provident, quae.
          </p>
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