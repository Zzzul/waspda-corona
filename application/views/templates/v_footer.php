            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div>Template (STISLA) By
                    <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    <div class="bullet"></div>
                    Created By
                    <a href="#">Mohammad Zulfahmi</a>
                </div>
            </footer>
            </div>
            </div>

            <!-- General JS Scripts -->
            <script src="assets/modules/jquery.min.js"></script>
            <script src="assets/modules/popper.js"></script>
            <script src="assets/modules/tooltip.js"></script>
            <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="assets/modules/moment.min.js"></script>
            <script src="assets/js/stisla.js"></script>

            <!-- JS Libraies -->
            <script src="assets/modules/datatables/datatables.min.js"></script>
            <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
            <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
            <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

            <!-- Page Specific JS File -->
            <script src="assets/js/page/modules-datatables.js"></script>

            <!-- Template JS File -->
            <script src="assets/js/scripts.js"></script>
            <script src="assets/js/custom.js"></script>


            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable({
                        // "responsive": true,
                        oLanguage: {
                            "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
                            "sProcessing": "Sedang memproses...",
                            "sLengthMenu": "Tampilkan _MENU_ entri",
                            "sZeroRecords": "Tidak ditemukan data yang sesuai",
                            "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                            "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                            "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                            "sInfoPostFix": "",
                            "sSearch": "Cari:",
                            "sUrl": "",
                            "oPaginate": {
                                "sFirst": "Pertama",
                                "sPrevious": "Sebelumnya",
                                "sNext": "Selanjutnya",
                                "sLast": "Terakhir"
                            }
                        },
                        "columnDefs": [{
                            "targets": [0],
                            "width": "1%",
                            "orderable": false,
                        }]
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('#table-rs').DataTable({
                        // "responsive": true,
                        oLanguage: {
                            "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
                            "sProcessing": "Sedang memproses...",
                            "sLengthMenu": "Tampilkan _MENU_ entri",
                            "sZeroRecords": "Tidak ditemukan data yang sesuai",
                            "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                            "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                            "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                            "sInfoPostFix": "",
                            "sSearch": "Cari:",
                            "sUrl": "",
                            "oPaginate": {
                                "sFirst": "Pertama",
                                "sPrevious": "Sebelumnya",
                                "sNext": "Selanjutnya",
                                "sLast": "Terakhir"
                            }
                        }
                    });
                });
            </script>
            </body>

            </html>