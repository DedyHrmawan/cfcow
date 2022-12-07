<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class=" mb-5 mt-n10">
            <div class=" py-3">
                <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/cow-full-2.png" class="h-125px logo" style="display: block; margin-left:auto ; margin-right:auto ; " />
                <div class="w-lg-450px bg-body rounded shadow-sm p-10 mx-auto">
                    <form class="form w-100" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="<?= site_url('login/auth') ?>" method="post">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Login Pakar</h1>
                            <div class="text-gray-400 fw-bold fs-4">Ingin mendaftar ?
                                <a href="https://forms.gle/48dDjHVNPQsS5Bbb9" target="_blank" class="link-primary fw-bolder">Ajukan Permohonan</a>
                            </div>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username" placeholder="Masukan Username" autocomplete="off" required/>
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" placeholder="Masukan Password" autocomplete="off" required/>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Login</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>