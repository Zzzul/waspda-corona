<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Kasus Coronavirus di Indonesia</h1>
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
                                <?php echo number_format($indo['update']['total']['jumlah_positif']); ?>
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
                                <?php echo number_format($indo['update']['total']['jumlah_sembuh']); ?>
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
                                <?php echo number_format($indo['update']['total']['jumlah_meninggal']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <h4>Informasi Kasus Coronavirus di Indonesia Hari Ini</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <h6>Tanggal</h6>
                                    <?php echo date('d-m-Y', strtotime($indo['update']['penambahan']['tanggal'])); ?>
                                </div>
                                <div class="col-md-2">
                                    <h6>Positif</h6>
                                    <?php echo number_format($indo['update']['penambahan']['jumlah_positif']); ?>
                                </div>
                                <div class="col-md-2">
                                    <h6>Sembuh</h6>
                                    <?php echo number_format($indo['update']['penambahan']['jumlah_sembuh']); ?>
                                </div>
                                <div class="col-md-2">
                                    <h6>Meninggal</h6>
                                    <?php echo number_format($indo['update']['penambahan']['jumlah_meninggal']); ?>
                                </div>
                                <div class="col-md-2">
                                    <h6>Terakhir Diupdate</h6>
                                    <?php echo date('d-m-Y H:i:s', strtotime($indo['update']['penambahan']['created'])); ?>
                                </div>
                            </div>
                            <!-- end of row -->
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <i class="fas fa-globe-asia mr-2"></i>
                            <h4>Pemetaan Kasus Coronavirus di Indonesia</h4>
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

                                <?php foreach ($provinsi['list_data'] as $key => $value) { ?>
                                    L.marker([<?= $value['lokasi']['lat']  ?>, <?= $value['lokasi']['lon'] ?>]).addTo(mymap)
                                        .bindPopup("<table> <tr> <td> <b>Provinsi</b> </td> <td>:</td> <td> <b><?= ucwords($value['key']) ?></b> </td> </tr>" +
                                            "<tr> <td>Positif</td> <td>:</td> <td><?= number_format($value['jumlah_kasus'])  ?></td> </tr>" +
                                            "<tr> <td>Sembuh</td> <td>:</td> <td><?= number_format($value['jumlah_sembuh']) ?></td> </tr>" +
                                            "<tr> <td>Meninggal</td> <td>:</td> <td><?= number_format($value['jumlah_meninggal']) ?></td> </tr> <tr> <td>Dirawat</td> <td>:</td> <td><?= number_format($value['jumlah_dirawat']) ?></td>  </tr> </table>"
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
                                            <th>Jumlah Dirawat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($provinsi['list_data'] as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= ucwords($value['key']) ?></td>
                                                <td><?= number_format($value['jumlah_kasus']) ?></td>
                                                <td><?= number_format($value['jumlah_sembuh']) ?></td>
                                                <td><?= number_format($value['jumlah_meninggal']) ?></td>
                                                <td><?= number_format($value['jumlah_dirawat']) ?></td>
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
                                            <th>Jumlah Dirawat</th>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <i class="fas fa-hospital mr-2"></i>
                            <h4>Daftar Rumah Sakit Rujukan Coronavirus di Indonesia</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="table-rs">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Rumah Sakit</th>
                                            <th>Provinsi</th>
                                            <th>Kota</th>
                                            <th>Telepon</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($rumah_sakit as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['name'] ?></td>
                                                <td><?= $value['province'] ?></td>
                                                <td><?= $value['region'] ?></td>
                                                <td><?= $value['phone'] ?></td>
                                                <td><?= $value['address'] ?></td>
                                            </tr>
                                        <?php  }  ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Rumah Sakit</th>
                                            <th>Provinsi</th>
                                            <th>Kota</th>
                                            <th>Telepon</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- end of table-responive -->
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
</div>
<!-- end of main-content -->