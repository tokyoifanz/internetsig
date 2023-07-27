<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/title.php'); ?>
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php $this->load->view('partials/navbar.php'); ?>


    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Teams</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span></span>
                             </div>
                             <div class="timeline-info">
                                <h3><span>Dian Rizky Rahmadan</span><small>20.85.0112</small></h3>
                                <p>WebGIS maker</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Ivan Ardiansyah</span><small>20.85.0113</small></h3>
                                <p>Data Processing TWI</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Siti Meliani<small>20.85.0121</small></h3>
                                <p>Data Analysis</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span></span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Tasliha Hilmina<small>20.85.0123</small></h3>
                                <p>Data Analysis</p>
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