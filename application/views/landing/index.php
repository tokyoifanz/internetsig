<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/title.php'); ?>
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>
    
<body style="background-image: url('<?= base_url() ?>assets/images/layout_2.jpg'); background-size: cover;">

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about" style="padding-top: 150px;">
      <div class="container">
        <div class="row">

          <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
            <div class="about-text">
              <h1 class="animated animated-text" style="font-size: 4em; margin-bottom:0px">
                <span class="mr-2">WebGIS for Disaster<br>Analysis</span><br>
                <div class="animated-info">
                  <span class="animated-item">Topographic</span>
                  <span class="animated-item">Wetness</span>
                  <span class="animated-item">Index</span>
                </div>
              </h1>

              <p style="font-size: 18px;">Melayani informasi serta edukasi terkait <br><i>Analisis Topographic Wetness Index</i> (TWI)</p>

              <div class="custom-btn-group mt-4">
                <a href="<?= base_url('landing/about'); ?>" class="btn custom-btn custom-btn-bg custom-btn-link">Selengkapnya</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- JS -->
    <?php $this->load->view('partials/vendor-js.php'); ?>


</body>
</html>