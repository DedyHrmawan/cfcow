<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">    
        <?php
			if ($this->session->flashdata('success_password')) {
				echo '
				<div class="card mb-5 mt-n10 mb-xl-8">
                    <div class="card-body card-rounded py-3">
                        <div class="alert alert-success d-flex align-items-center p-5">
                            <div class="d-flex flex-column">
                                <span>' . $this->session->flashdata('success_password') . '</span>
                            </div>
                        </div>
                    </div>
                </div>
				';
			}else if($this->session->flashdata('error_password')){
				echo '
				<div class="card mb-5 mt-n10 mb-xl-8">
                    <div class="card-body card-rounded py-3">
                        <div class="alert alert-danger d-flex align-items-center p-5">
                            <div class="d-flex flex-column">
                                <span>' . $this->session->flashdata('error_password') . '</span>
                            </div>
                        </div>
                    </div>
                </div>
				';
			}
        ?>
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <form action="<?= site_url('updatePassword') ?>" method="post">
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Password Lama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" name="password_lama" class="form-control" placeholder="Masukkan Password Lama" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Password Baru</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" name="password_baru1" class="form-control" placeholder="Masukan Password Baru" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Kembali Password Baru</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" name="password_baru2" class="form-control" placeholder="Masukan Password Baru" required/>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-primary me-3">Simpan</button>
                        <a href="javascript:window.history.go(-1);" type="button" class="btn btn-danger" >Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>