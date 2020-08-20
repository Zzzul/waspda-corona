<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Kasus Coronavirus di Seluruh Dunia</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <img src="assets/img/emoji/sad-u6e.png" class="rounded-circle mb-2" alt="Emoji Sembuh" style="width: 65%;">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Positif</h4>
                            </div>
                            <div class="card-body">
                                <?php echo $tpositif['value'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <img src="assets/img/emoji/happy-ipM.png" class="rounded-circle mb-2" alt="Emoji Sembuh" style="width: 65%;">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Sembuh</h4>
                            </div>
                            <div class="card-body">
                                <?php echo $tsembuh['value'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <img src="assets/img/emoji/emoji-LWx.png" class="rounded-circle mb-2" alt="Emoji Sembuh" style="width: 65%;">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Meninggal</h4>
                            </div>
                            <div class="card-body">
                                <?php echo $tmeninggal['value'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-globe-asia mr-2"></i>
                            <h4>Pemetaan Kasus Coronavirus di Seluruh Dunia</h4>
                        </div>
                        <div class="card-body">
                            <div id="mapid" class="rounded" style="height: 500px;"></div>
                            <script>
                                var mymap = L.map('mapid').setView([27.3846827, 70.4278625], 3);

                                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                    maxZoom: 18,
                                    id: 'mapbox/dark-v10',
                                    tileSize: 512,
                                    zoomOffset: -1
                                }).addTo(mymap);

                                <?php foreach ($global as $key => $value) { ?>
                                    L.circle([<?= $value['attributes']['Lat']  ?>, <?= $value['attributes']['Long_'] ?>], 99999, {
                                        color: 'red',
                                        fillColor: '#f03',
                                        fillOpacity: 0.5
                                    }).addTo(mymap).bindPopup("<b><?= $value['attributes']['Country_Region'] ?></b> <table>" +
                                        "<tr>" +
                                        " <td>Positif</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['attributes']['Confirmed'])  ?></td>" +
                                        "</tr>" +
                                        "<tr>" +
                                        " <td>Sembuh</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['attributes']['Recovered']) ?></td> " +
                                        "</tr>" +
                                        "<tr>" +
                                        " <td>Meninggal</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['attributes']['Deaths']) ?></td>" +
                                        "</tr>" +
                                        " <tr>" +
                                        " <td>Dirawat</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['attributes']['Active']) ?></td>" +
                                        "</tr>" +
                                        "</table>"
                                    );
                                <?php } ?>
                            </script>
                        </div>
                        <!-- end of card-body -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table mr-2"></i>
                            <h4>Daftar Kasus Coronavirus di Seluruh Dunia</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Negara</td>
                                            <td>Positif</td>
                                            <td>Sembuh</td>
                                            <td>Meninggal</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($global as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['attributes']['Country_Region'] ?></td>
                                                <td><?= number_format($value['attributes']['Confirmed']) ?></td>
                                                <td><?= number_format($value['attributes']['Recovered']) ?></td>
                                                <td><?= number_format($value['attributes']['Deaths']) ?></td>
                                                <!-- <td><?= number_format($value['attributes']['OBJECTID']) ?></td> -->
                                            </tr>
                                        <?php  }  ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end of table-responsive -->
                        </div>
                        <!-- end of card-body -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of section-body -->
    </section>
    <!-- end of section -->
</div>
<!-- end of main-content -->