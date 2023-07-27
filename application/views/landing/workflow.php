<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/title.php'); ?>
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php $this->load->view('partials/navbar.php'); ?>

    <!-- WORKFLOW-->
    <section class="project py-5" id="project">
        <div class="container">

            <div class="row">
                <div class="col-lg-11 text-center mx-auto col-12">

                    <div class="col-lg-8 mx-auto" style="padding-bottom: 10px;">
                    <h2>Workflow</h2>
                    </div>

                    <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow1.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow2.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow3.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow4.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow5.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow6.png" class="img-fluid" alt="project image">
                        </div>
                    </div>

                    <div class="item">
                        <div class="project-info">
                        <img src="<?= base_url() ?>assets/images/workflow/workflow7.png" class="img-fluid" alt="project image">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <?php $this->load->view('partials/footer.php')?>

    <!-- JS -->
    <?php $this->load->view('partials/vendor-js.php'); ?>

</body>
</html>