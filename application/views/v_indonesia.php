<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Kasus Coronavirus di Indonesia</h1>
            <!-- <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Layout</a></div>
                            <div class="breadcrumb-item">Top Navigation</div>
                        </div> -->
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
                                <?php echo $indo['0']['positif'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <img src="assets/img/emoji/happy-ipM.png" class="rounded-circle mb-2" alt="Emoji Sembuh" style="width: 65%;">
                            <!-- <i class="far fa-user"></i> -->
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Sembuh</h4>
                            </div>
                            <div class="card-body">
                                <?php echo $indo['0']['sembuh'] ?>
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
                                <?php echo $indo['0']['meninggal'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-globe-asia mr-2"></i>
                            <h4>Pemetaan Kasus Coronavirus di Indonesia</h4>
                            <!-- <div class="card-header-action">
                                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-primary" href="#"><i class="fas fa-plus"></i></a>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <div id="mapid" class="rounded" style="height: 500px;"></div>
                            <script>
                                var mymap = L.map('mapid').setView([-2.320007, 118.197633], 5);

                                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                    id: 'mapbox/dark-v10',

                                }).addTo(mymap);

                                <?php foreach ($pnasional['features'] as $key => $value) { ?>
                                    L.marker([<?= $value['geometry']['y']  ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
                                        .bindPopup("<table> <tr> <td> <b>Provinsi</b> </td> <td>:</td> <td> <b><?= $value['attributes']['Provinsi'] ?></b> </td> </tr>" +
                                            "<tr> <td>Positif</td> <td>:</td> <td><?= number_format($value['attributes']['Kasus_Posi'])  ?></td> </tr>" +
                                            "<tr> <td>Sembuh</td> <td>:</td> <td><?= number_format($value['attributes']['Kasus_Semb']) ?></td> </tr>" +
                                            "<tr> <td>Meninggal</td> <td>:</td> <td><?= number_format($value['attributes']['Kasus_Meni']) ?></td> </tr> </table>"
                                        );
                                <?php } ?>
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <i class="fas fa-table mr-2"></i>
                            <h4>Daftar Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($provinsi as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['attributes']['Provinsi'] ?></td>
                                                <td><?= number_format($value['attributes']['Kasus_Posi']) ?></td>
                                                <td><?= number_format($value['attributes']['Kasus_Semb']) ?></td>
                                                <td><?= number_format($value['attributes']['Kasus_Meni']) ?></td>
                                            </tr>
                                        <?php  }  ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- end of card-body -->
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of section-body -->
    </section>
</div>