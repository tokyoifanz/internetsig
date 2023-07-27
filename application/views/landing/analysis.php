<!DOCTYPE html>
<html>

<head> <!-- untuk meta description, keywords, dan author bisa gantu dan di sesuaikan tapi yang meta charset sama viewport jangan di ganti -->

  <!-- TITLE -->
  <?php $this->load->view('partials/title.php') ?>

  <!-- MAPCSS -->
  <?php $this->load->view('partials/map-css.php') ?>

  <!-- MAPJS -->
  <?php $this->load->view('partials/map-js.php') ?>

  <!-- json -->
  <script src="<?= base_url() ?>assets/map/layer/PL.js"></script>
  <script src="<?= base_url() ?>assets/map/layer/titik.js"></script>
  <script src="<?= base_url() ?>assets/map/layer/twi_1.png"></script>

  <!-- CSS -->
  <?php $this->load->view('partials/vendor-css.php'); ?>
  <!-- JS -->
  <?php $this->load->view('partials/vendor-js.php'); ?>

  <style>
    table,
    th,
    td {
      border: 1px white;
      padding-left: 10px;
      padding-right: 10px;
    }
  </style>

</head>

<body>
  <!-- NAVBAR -->
  <?php $this->load->view('partials/navbar.php'); ?>

  <!-- SIDEBAR -->
  <div id="sidebar" class="leaflet-sidebar collapsed">
    <!-- Nav tabs -->
    <div class="leaflet-sidebar-tabs">
      <ul role="tablist">
        <li>
          <a href="#profile" role="tab"><i class="fa fa-book fa-fw"></i></a>
        </li>
      </ul>
    </div>

    <!-- Tab panes -->
    <div class="leaflet-sidebar-content">

      <div class="leaflet-sidebar-pane" id="profile">
        <h1 class="leaflet-sidebar-header">
          Legenda<span class="leaflet-sidebar-close"><i class="fa fa-caret-right"></i></span>
        </h1>
        <h2 style="padding-top: 12px;">
          Keterangan:
        </h2>
        <p class="lorem">
          Nilai Indeks TWI yang semakin "Tinggi" mengindikasikan bahwa daerah tersebut berpotensi terjadi bencana Banjir Genangan.
        </p>
        <div class="table-responsive">

          <table class="table table-borderless" style="padding: 0px">
            <tr>
              <td rowspan="5" style="width: 25%;">
                <img src="<?= base_url(); ?>assets/map/legenda/range.png" alt="">
              </td>
              <td class="align-middle" style="font-size: 18px; font-weight: bold">
                <span class="font-14 fw-bold">Tinggi</span><br>
                <span>15,19</span>
              </td>
            </tr>
            <tr>
              <td class="align-middle">
                <span class="font-14 fw-bold"></span><br>
                <span></span>
              </td>
            </tr>
            <tr>
              <td class="align-middle">
                <span class="font-14 fw-bold"></span><br>
                <span></span>
              </td>
            </tr>
            <tr>
              <td class="align-middle">
                <span class="font-14 fw-bold"></span><br>
                <span></span>
              </td>
            </tr>
            <tr>
              <td class="align-middle" style="font-size: 18px; font-weight: bold">
                <span class="font-14 fw-bold">Rendah</span><br>
                <span>3,61</span>
              </td>
            </tr>
          </table>
        </div>
      </div>

    </div>
  </div>




  <div id="map"> <!-- ini id="map" bisa di ganti dengan nama yang di inginkan -->
    <script>
      // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
      var map = L.map('map').setView([-7.08, 110.36], 11);

      // PILIHAN BASEMAP YANG AKAN DITAMPILKAN
      var baseLayers = {
        'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
        'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
      };




      // MENAMPILKAN SKALA
      L.control.scale({
        imperial: false
      }).addTo(map);

      // ------------------- VECTOR ----------------------------
      // REQUEST BALI ADMINISTRASI
      // REQUEST TWI
      var TWI = "<?= base_url() ?>assets/map/layer/twi_1.png",
        imageBounds = [
          [-7.1969, 110.4336],
          [-6.9455, 110.308]
        ];
      L.imageOverlay(TWI, imageBounds).addTo(map);


      //FUNCTION FILLCOLOR
      function getColor(d) {
        return d == 'Hutan Lahan Kering Sekunder' ? '#800026' :
          d == 'Tanah Terbuka' ? '#BD0026' :
          d == 'Hutan Tanaman' ? '#E31A1C' :
          d == 'Perkebunan' ? '#FC4E2A' :
          d == 'Pemukiman' ? '#FD8D3C' :
          d == 'Pertanian Lahan Kering Campur' ? '#FEB24C' :
          d == 'Sawah' ? '#FED976' : '#FFEDA0';
      }

      function style(feature) {
        return {
          weight: 1,
          opacity: 1,
          color: 'white',
          dashArray: '0',
          fillOpacity: 1,
          fillColor: getColor(feature.properties.Legenda)
        };
      }

      var tes = L.geoJSON(poly, {
        onEachFeature: function(feature, layer) {
          layer.bindPopup(feature.properties.Legenda)
        },
        style: style,
      }).addTo(map);

      //ICON
      var MyIcon = L.icon({
        iconUrl: '<?= base_url() ?>assets/images/pngegg.png',
        iconSize: [25, 25], // size of the icon
      });

      //POINT
      var layerGroup = L.geoJSON(titik, {
        onEachFeature: function(feature, layer) {
          layer.bindPopup(
            '<table>' +
            '<tr style="text-align:center;">' +
            '<th colspan="2">' + 'Informasi ' + '</th>' +
            '</tr>' +
            '<tr>' +
            '<td>' + '<li>' + 'Kelurahan:' + '</li>' + '</td>' +
            '<td>' + feature.properties.Kelurahan + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' + '<li>' + 'Kelas Kerentanan:' + '</li>' + '</td>' +
            '<td>' + feature.properties.Kelas_Kere + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' + '<li>' + 'Elevasi:' + '</li>' + '</td>' +
            '<td>' + feature.properties.Elevasi + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' + '<li>' + 'TWI:' + '</li>' + '</td>' +
            '<td>' + feature.properties.TWI + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' + '<li>' + 'Penggunaan Lahan:' + '</li>' + '</td>' +
            '<td>' + feature.properties.PL + '</td>' +
            '</tr>' +
            '</table>');
        },
        pointToLayer: function(feature, latlng) {
          return L.marker(latlng, {
            icon: MyIcon
          });
        }
      }).addTo(map);


      var sidebar = L.control
        .sidebar({
          container: "sidebar",
          position: "right"
        })
        .addTo(map);

      // menambahkan tools defautl extent
      L.control.defaultExtent().addTo(map);

      // membuat pilihan untuk menampilkan layer
      var overlays = {
        "PROVINSI BALI": {
          "TWI": TWI,
          "Penggunaan Lahan": tes
        }
      };
      var options = {
        exclusiveGroups: ["PROVINSI BALI"]
      };

      // MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
      L.control.layers(baseLayers, overlays).addTo(map);
    </script>
  </div>
</body>

</html>