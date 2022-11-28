<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <div class="card mb-5 mt-5  mb-xl-8">
                    <div class="row mt-1 align-items-center">
                        <div class="col-md-auto">
                            <h1>Hasil Diagnosis</h1>
                        </div>
                        <div class="col-md-auto">
                            <a href="#" class="btn btn-sm btn-primary">
                                <span class="svg-icon svg-icon-white svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor" />
                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor" />
                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor" />
                                    </svg>
                                </span>Cetak</a>
                        </div>
                    </div>
                    <br>
                    <div class="separator"></div>
                </div>
                <table class="table rounded table-rounded table-striped table-row-gray-300 align-middle gs-0 gy-3" id="tabelDetailRiwayat">
                    <thead class="bg-secondary">
                        <tr class="fw-bolder fs-5 text-dark border-bottom border-gray-200">
                            <th class="text-center">No</th>
                            <th class="text-center">Kode</th>
                            <th class="text-start">Gejala yang Dialami (Keluhan)</th>
                            <th class="text-center">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-dark text-center text-hover-primary fs-6">
                                1
                            </td>
                            <td class="text-dark text-center text-hover-primary fs-6">
                                G001
                            </td>
                            <td class="text-dark text-hover-primary fs-6">
                                Nafsu Makan Berkurang
                            </td>
                            <td class="text-end col-3">
                                <span class="badge badge-primary">Kemungkinan Besar</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-dark text-center text-hover-primary fs-6">
                                1
                            </td>
                            <td class="text-dark text-center text-hover-primary fs-6">
                                G001
                            </td>
                            <td class="text-dark text-hover-primary fs-6">
                                Nafsu Makan Berkurang
                            </td>
                            <td class="text-end col-3">
                                <span class="badge badge-primary">Kemungkinan Besar</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row pt-15">
                    <div class="col-sm-12">
                        <div class="card card-xl-stretch bg-light mb-xl-8">
                            <div class="card-body pt-5">
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        <h1>Hasil Diagnosa</h1>
                                        <p>Jenis Penyakit yang Diderita</p>
                                        <span class="badge fs-1 badge-light-primary">PMK / 0.65 % (0.6480)</span>
                                    </div>
                                    <div class="col-md-4 justify-content-end">
                                        <img src="<?= base_url(); ?>assets/media/illustrations/sigma-1/1.png" alt="Image Hasil Diagnosa" class="img-thumbnail" style="min-width: 250px; max-width: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Detail</h3>
                    </div>
                    <div class="card-body">
                        <p>Penyakit Lymphoid Leukosis termasuk kelompok Leukosis Komplex Disease. Penyakit ini banyak menyerang ayam di Indonesia.</p>
                    </div>
                </div>
                <div class="card shadow-sm mt-10">
                    <div class="card-header">
                        <h3 class="card-title">Saran</h3>
                    </div>
                    <div class="card-body">
                        <p>Tidak ada obat. Segera disingkirkan atau dimusnakan.</p>
                    </div>
                </div>
                <div class="card shadow-sm mt-10">
                    <div class="card-header">
                        <h3 class="card-title">Kemungkinan Lain</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center me-15">
                            <span class="bullet bullet-dot bg-secondary h-15px w-15px me-5"></span> Batuk Darah (Infectious Laryngo Tracheitis) / 0.6 % (0.6000)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>
<script>
    $('#tabelDetailRiwayat').dataTable({
        "searching": false,
        "paging": false,
        "ordering": false,
        "info": false,
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