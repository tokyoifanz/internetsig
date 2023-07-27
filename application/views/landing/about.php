<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/title.php'); ?>
    <?php $this->load->view('partials/vendor-css.php'); ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php $this->load->view('partials/navbar.php'); ?>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about" style="padding: 0px;">



    <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
      <div class="about-text">

        <h1 class="animated animated-text" style="font-size: 4em; margin-bottom:0px">
          <span class="mr-2">WebGIS for Disaster Analysis</span><br>
          <div class="animated-info">
            <span class="animated-item">Topographic</span>
            <span class="animated-item">Wetness</span>
            <span class="animated-item">Index</span>
          </div>
        </h1>


        <p style="font-size: 18px; text-align: center">WebGIS For Disaster Analysis is a GIS website designed to display flood inundation in the Semarang area, specifically in the Garang Watershed. On this WebGIS, users can visualize areas prone to flood inundation within the Garang Watershed.
        </p>
        <p style="font-size: 18px; text-align: center;">
          Based on the gentle slope characteristics of the Garang Watershed, which are predominantly flat (0-8% gradient), the region is prone to the risk of flood inundation. Additionally, the Garang Watershed is located along the northern coast of Java.
        </p>
        <p style="font-size: 18px; text-align: center">
          Through the utilization of the WebGIS For Disaster Analysis, the community can access valuable information, enabling them to be more aware of the potential flood inundation in the Garang Watershed and reduce the associated risks and impacts.
        </p>
        <p style="font-size: 18px; text-align: center">
          By providing improved access to information, this WebGIS empowers individuals to take necessary measures in mitigating the effects of flood inundation. This includes developing emergency response plans, enhancing spatial planning strategies, and implementing early warning systems.
        </p>
        <p style="font-size: 18px; text-align: center">
          The utilization of technology, such as WebGIS, in disaster analysis plays a crucial role in assisting communities and governments in addressing disaster risks. With accurate and easily accessible information, effective mitigation and response measures can be implemented to safeguard communities and minimize the impact of disasters.
        </p>

      </div>
    </div>


    </section>

    <!-- FOOTER -->
    <?php $this->load->view('partials/footer.php')?>

     <!-- JS -->
     <?php $this->load->view('partials/vendor-js.php'); ?>
</body>
</html>