<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class=" mb-5 mt-n10">
            <div class=" py-3">
                <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/cow-full-2.png" class="h-125px logo" style="display: block; margin-left:auto ; margin-right:auto ; " />
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 mx-auto">
                    <form class="form w-100" action="<?= site_url('daftaruser/store') ?>" method="post" enctype="multipart/form-data">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Daftar User</h1>
                            <div class="text-gray-400 fw-bold fs-4">Sudah mempunyai akun ?
                                <a href="<?= site_url('login'); ?>" class="link-primary fw-bolder">Klik Disini</a>
                            </div>
                        </div>
                        <?php
                            if ($this->session->flashdata('success_register')) {
                                echo '
                                <div class="card mb-5 mt-n10 mb-xl-8">
                                    <div class="card-body card-rounded py-3">
                                        <div class="alert alert-success d-flex align-items-center p-5">
                                            <div class="d-flex flex-column">
                                                <span>' . $this->session->flashdata('success_register') . '</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }else if($this->session->flashdata('failed_register')){
                                echo '
                                <div class="card mb-5 mt-n10 mb-xl-8">
                                    <div class="card-body card-rounded py-3">
                                        <div class="alert alert-danger d-flex align-items-center p-5">
                                            <div class="d-flex flex-column">
                                                <span>' . $this->session->flashdata('failed_register') . '</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bolder text-dark">Username</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username" placeholder="Masukan Username" autocomplete="off" required />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label required fw-bolder text-dark fs-6 mb-0">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" placeholder="Masukan Password" autocomplete="off" required />
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 required fw-bolder text-dark">Nama Lengkap</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="nama" placeholder="Masukan Nama Lengkap" autocomplete="off" required />
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 required fw-bolder text-dark">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" placeholder="Masukan Email" autocomplete="off" required />
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 required fw-bolder text-dark">Lokasi Peternakan</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="peternakan" placeholder="Masukan Lokasi Peternakan" autocomplete="off" required />
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Daftar</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>