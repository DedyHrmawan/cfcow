<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <h1 class="mt-2 mb-2">Riwayat Konsultasi</h1>
                <div class="separator"></div>
                <br>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-xl-stretch bg-light mb-xl-8">
                            <div class="card-body pt-5">
                                <table class="table rounded table-rounded table-striped table-row-gray-300 align-middle gs-0 gy-3" id="tabelRiwayat">
                                    <thead class="">
                                        <tr class="fw-bolder fs-5 text-dark border-bottom border-gray-200">
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-start">Penyakit</th>
                                            <th class="text-center">Nilai CF</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-dark text-center text-hover-primary fs-6">
                                                1
                                            </td>
                                            <td class="text-dark text-center text-hover-primary fs-6">
                                                01 Jan 2022
                                            </td>
                                            <td class="text-dark text-hover-primary fs-6">
                                                Jembrana
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-secondary">0.648</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url('detailriwayat'); ?>" class="btn btn-sm fs-8 btn-primary bs-xs"><i class="fonticon-sun"></i>Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-xl-stretch bg-light mb-xl-8">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="donutChart" role="tabpanel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>
<script>
    var pieSimpleChart = {
        chart: {
            height: 350,
            type: 'donut',
            sparkline: {
                enabled: false,
            }
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'left',

        },
        series: [44, 55, 41, 17],
        labels: ["Penyakit 1", "Penyakit 1", "Penyakit 1", "Penyakit 1"],
    }

    var chart = new ApexCharts(document.querySelector("#donutChart"), pieSimpleChart);
    chart.render();
</script>
<script>
    $('#tabelRiwayat').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>