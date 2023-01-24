<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class=" mb-5 mt-n10">
            <div class=" py-3">
                <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/cow-full-2.png" class="h-125px logo" style="display: block; margin-left:auto ; margin-right:auto ; " />
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 mx-auto">
                    <form class="form w-100" id="kt_sign_in_form" action="<?= site_url('login/auth') ?>" method="post">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Login</h1>
                        </div>
                        <?php
                            if ($this->session->flashdata('error_login')) {
                                echo '
                                <div class="card mb-5 mt-n10 mb-xl-8">
                                    <div class="card-body card-rounded py-3">
                                        <div class="alert alert-danger d-flex align-items-center p-5">
                                            <div class="d-flex flex-column">
                                                <span>' . $this->session->flashdata('error_login') . '</span>
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
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Login</span>
                            </button>
                        </div>
                        <div class="separator"></div>
                        <div class="row mt-4">
                                <div class="col text-start fs-6">
                                    <a href="<?= site_url('daftaruser'); ?>" class="link-primary fw-bolder">Daftar Sebagai User</a>
                                </div>
                                <!-- <div class="col text-end fs-6">
                                    <a href="<?= site_url('daftar'); ?>" class="link-primary fw-bolder">Daftar Sebagai Pakar</a>
                                </div> -->
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>