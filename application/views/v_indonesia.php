<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Kasus Coronavirus di Indonesia</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
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

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
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

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
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

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <img src="assets/img/emoji/hospital.webp" class="rounded-circle mb-2" alt="Emoji Sembuh" style="width: 65%;">
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Dirawat</h4>
                            </div>
                            <div class="card-body">
                                <?php echo number_format($indo['update']['total']['jumlah_dirawat']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <h4>Informasi Kasus Coronavirus di Indonesia Perhari</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Tanggal</h6>
                                    <p class="mb-1">
                                        <?php echo date('d-m-Y', strtotime($indo['update']['penambahan']['tanggal'])); ?>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Positif</h6>
                                    <p class="mb-1">
                                        <?php echo number_format($indo['update']['penambahan']['jumlah_positif']); ?>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Sembuh</h6>
                                    <p class="mb-1">
                                        <?php echo number_format($indo['update']['penambahan']['jumlah_sembuh']); ?>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Meninggal</h6>
                                    <p class="mb-1"><?php echo number_format($indo['update']['penambahan']['jumlah_meninggal']); ?></p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Dirawat</h6>
                                    <p class="mb-1">
                                        <?php echo number_format($indo['update']['penambahan']['jumlah_dirawat']); ?>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0 pb-0">Update Terakhir</h6>
                                    <p class="mb-1" data-toggle="tooltip" title="Data akan diupdate paling lambat pukul 16:00 setiap harinya.">
                                        <?php echo date('d-m-Y H:i:s', strtotime($indo['update']['penambahan']['created'])); ?>
                                    </p>
                                </div>
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of card-body -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of col -->

                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-chart-line mr-2"></i>
                            <h4>Grafik Perkembangan Kasus Coronavirus di Indonesia</h4>
                            <form class="card-header-form">
                                <select id="selectChart" class="form-control">
                                    <option value="harian">Harian</option>
                                    <option value="kumulatif">Kumulatif</option>
                                </select>
                            </form>
                        </div>
                        <canvas id="chartHarian" height="400" class="p-3"></canvas>
                        <canvas id="chartKumulatif" height="400" class="p-3"></canvas>
                        <script>
                            var ctx = document.getElementById('chartHarian').getContext('2d');
                            var chartHarian = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [
                                        <?php foreach ($indo['update']['harian'] as $key => $value) {
                                            echo "'" . date('d-m-Y', strtotime($value['key_as_string'])) . "',";
                                        } ?>
                                    ],
                                    datasets: [{
                                            label: 'Positif',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_positif']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 205, 86)',
                                            ],
                                            borderColor: [
                                                'rgb(255, 205, 86)',
                                            ],
                                        },
                                        {
                                            label: 'Sembuh',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_sembuh']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(75, 192, 192)',
                                            ],
                                            borderColor: [
                                                'rgb(75, 192, 192)',
                                            ],
                                        },
                                        {
                                            label: 'Meninggal',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_meninggal']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)'
                                            ],
                                        },
                                        {
                                            label: 'Dirawat',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_dirawat']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(54, 162, 235)',
                                            ],
                                            borderColor: [
                                                'rgb(54, 162, 235)',
                                            ],
                                        },
                                    ]
                                },
                                options: {
                                    tooltips: {
                                        callbacks: {
                                            label: function(t, d) {
                                                var xLabel = d.datasets[t.datasetIndex].label;
                                                var yLabel = t.yLabel >= 1000 ? +t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") : +t.yLabel;
                                                return xLabel + ': ' + yLabel;
                                            }
                                        }
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                callback: function(value, index, values) {
                                                    if (parseInt(value) >= 1000) {
                                                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                                    } else {
                                                        return value;
                                                    }
                                                }
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>

                        <script>
                            var ctx = document.getElementById('chartKumulatif').getContext('2d');
                            var chartKumulatif = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [
                                        <?php foreach ($indo['update']['harian'] as $key => $value) {
                                            echo "'" . date('d-m-Y', strtotime($value['key_as_string'])) . "',";
                                        } ?>
                                    ],
                                    datasets: [{
                                            label: 'Positif',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_positif_kum']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 205, 86)',
                                            ],
                                            borderColor: [
                                                'rgb(255, 205, 86)',
                                            ],
                                        },
                                        {
                                            label: 'Sembuh',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_sembuh_kum']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(75, 192, 192)',
                                            ],
                                            borderColor: [
                                                'rgb(75, 192, 192)',
                                            ],
                                        },
                                        {
                                            label: 'Meninggal',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_meninggal_kum']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)'
                                            ],
                                        },
                                        {
                                            label: 'Dirawat',
                                            fill: false,
                                            data: [
                                                <?php foreach ($indo['update']['harian'] as $key => $value) {
                                                    echo "'" . $value['jumlah_dirawat_kum']['value'] . "',";
                                                } ?>
                                            ],
                                            backgroundColor: [
                                                'rgb(54, 162, 235)',
                                            ],
                                            borderColor: [
                                                'rgb(54, 162, 235)',
                                            ],
                                        },
                                    ]
                                },
                                options: {
                                    tooltips: {
                                        callbacks: {
                                            label: function(t, d) {
                                                var xLabel = d.datasets[t.datasetIndex].label;
                                                var yLabel = t.yLabel >= 1000 ? +t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") : +t.yLabel;
                                                return xLabel + ': ' + yLabel;
                                            }
                                        }
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                callback: function(value, index, values) {
                                                    if (parseInt(value) >= 1000) {
                                                        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                                    } else {
                                                        return value;
                                                    }
                                                }
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
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
                            <i class="fas fa-globe-asia mr-2"></i>
                            <h4>Peta Sebaran Kasus Coronavirus di Indonesia</h4>
                        </div>
                        <div class="card-body">
                            <div id="mapid" class="rounded" style="height: 500px;"></div>
                            <script>
                                var mymap = L.map('mapid').setView([-1.8414492, 117.3769812], 5);
                                // var mymap = L.map('mapid').setView([-2.320007, 118.197633], 5);

                                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                    maxZoom: 18,
                                    id: 'mapbox/dark-v10',
                                    tileSize: 512,
                                    zoomOffset: -1
                                }).addTo(mymap);

                                <?php foreach ($provinsi['list_data'] as $key => $value) { ?>
                                    L.circle([<?= $value['lokasi']['lat']  ?>, <?= $value['lokasi']['lon'] ?>], 55555, {
                                        color: 'red',
                                        fillColor: '#f03',
                                        fillOpacity: 0.5
                                    }).addTo(mymap).bindPopup("<b><?= $value['key'] ?></b> <table>" +
                                        "<tr>" +
                                        " <td>Positif</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['jumlah_kasus'])  ?></td>" +
                                        "</tr>" +
                                        "<tr>" +
                                        " <td>Sembuh</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['jumlah_sembuh']) ?></td> " +
                                        "</tr>" +
                                        "<tr>" +
                                        " <td>Meninggal</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['jumlah_meninggal']) ?></td>" +
                                        "</tr>" +
                                        " <tr>" +
                                        " <td>Dirawat</td>" +
                                        " <td>:</td>" +
                                        " <td><?= number_format($value['jumlah_dirawat']) ?></td>" +
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
                            <!-- end of table-responsive -->
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
    <!-- end of section -->
</div>
<!-- end of main-content -->