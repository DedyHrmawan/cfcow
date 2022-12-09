<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Bantuan Penggunaan Sistem Pakar</h3>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_pakar">Bantuan Pakar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_user">Bantuan Pengguna</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab_pakar" role="tabpanel">
                        <div class="text-center">
                            <h1 class="mt-10 mb-5">Hubungi Admin</h1>
                            <p class="px-10 my-10 fs-5">Silahkan hubungi admin dengan mengklik tombol kontak admin. Jika butuh bantuan silahkan kirim pesan apa yang menjadi kendala.
                                <br>
                                Email yang terdaftar sebagai pakar akan di tindak lanjuti.
                            </p>
                            <button href="#" class="btn btn-light-dark" data-bs-toggle="modal" data-bs-target="#mdl_kontak">
                                <span class="svg-icon svg-icon-white svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                Kontak Admin</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_user" role="tabpanel">
                        <!--begin::Accordion-->
                        <div class="accordion" id="parent_accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="menu">
                                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#menu_body" aria-expanded="true" aria-controls="menu_body">
                                        Cara mengakses Menu #1
                                    </button>
                                </h2>
                                <div id="menu_body" class="accordion-collapse collapse show" aria-labelledby="menu" data-bs-parent="#parent_accordion">
                                    <div class="accordion-body">
                                        ...
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="diagnosa">
                                    <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#diagnosa_body" aria-expanded="false" aria-controls="diagnosa_body">
                                        Cara Melakukan Diagnosa #2
                                    </button>
                                </h2>
                                <div id="diagnosa_body" class="accordion-collapse collapse" aria-labelledby="diagnosa" data-bs-parent="#parent_accordion">
                                    <div class="accordion-body">
                                        ...
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="keterangan">
                                    <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#keterangan_body" aria-expanded="false" aria-controls="keterangan_body">
                                        Cara Membaca di Menu Keterangan #3
                                    </button>
                                </h2>
                                <div id="keterangan_body" class="accordion-collapse collapse" aria-labelledby="keterangan" data-bs-parent="#parent_accordion">
                                    <div class="accordion-body">
                                        ...
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="riwayat">
                                    <button class="accordion-button fs-4 fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#riwayat_body" aria-expanded="false" aria-controls="riwayat_body">
                                        Cara Melihat Riwayat Konsultasi #4
                                    </button>
                                </h2>
                                <div id="riwayat_body" class="accordion-collapse collapse" aria-labelledby="riwayat" data-bs-parent="#parent_accordion">
                                    <div class="accordion-body">
                                        ...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Accordion-->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="mdl_kontak">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kontak Kami</h5>
            </div>
            <div class="modal-body">
                <a href="mailto:mohammadalkausar@gmail.com" class="mb-6">
                    <img src="assets/media/logos/gmail.png" class="h-20px me-2" alt="" />
                    <span class="text-dark opacity-50 fw-bolder text-hover-primary fs-5 mb-6">mohammadalkausar@gmail.com</span>
                </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('depan/template/footer') ?>