<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <form>
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Password Lama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Masukkan Password Lama" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Password Baru</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Masukan Password Baru" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-3 align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Masukkan Kembali Password Baru</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Masukan Password Baru" required/>
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