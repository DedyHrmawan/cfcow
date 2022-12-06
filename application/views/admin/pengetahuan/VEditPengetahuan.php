<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <div class="card mb-5 mt-5  mb-xl-8">
                    <div class="card-body card-rounded bg-success py-3">
                        <h3>Petunjuk Pengisian Pakar !</h3>
                        <p>Silahkan pilih gejala yang sesuai dengan penyakit yang ada, dan berikan <b> nilai kepastian (MB & MB)</b> dengan cakupan sebagai berikut:
                        </p>
                        <br>
                        <div class="row">
                            <div class="col">
                                <p><b>1.0</b> (Pasti)</p>
                                <p><b>0.8</b> (Hampir Pasti)</p>
                                <p><b>0.6</b> (Kemungkinan Besar)</p>
                            </div>
                            <div class="col">
                                <p><b>0.4</b> (Mungkin)</p>
                                <p><b>0.2</b> (Hampir Mungkin)</p>
                                <p><b>0.0</b> (Tidak Tahu atau Tidak Yakin)</p>
                            </div>
                        </div>
                        <br>
                        <h6>CF(Pakar) = MB – MD</h6>
                        <p>MB : Ukuran kenaikan kepercayaan (measure of increased belief) MD : Ukuran kenaikan ketidakpercayaan (measure of increased disbelief)
                        </p>
                        <h6>Contoh: </h6>
                        <p> Jika kepercayaan <b>(MB)</b> anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.8 (Hampir Pasti) </b>
                            Dan ketidakpercayaan <b>(MD)</b> anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.2 (Hampir Mungkin)</b></p>
                        <p><b>Maka : </b>CF(Pakar) = MB – MD (0.8 - 0.2) = <b>0.6</b></p>
                        <p>Dimana nilai kepastian anda terhadap gejala Mencret keputih-putihan untuk penyakit Berak Kapur adalah <b>0.6 (Kemungkinan Besar) </b></p>
                    </div>
                </div>
                <br>
                <form action="<?= site_url('pengetahuan/edit') ?>" method="post">
                    <div class="form-group row mt-4">
                        <div class="col align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Penyakit</label>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-select" name="kode_penyakit" data-control="select2" data-placeholder="Silahkan Pilih Penyakit" required>
                                <option></option>
                                <?php
                                    foreach ($penyakit as $list) {
                                        $selected = '';
                                        if($list->kode_penyakit == $pengetahuan[0]->kode_penyakit){
                                            $selected = "selected";
                                        }
                                        echo '
                                                <option value="'.$list->kode_penyakit.'" '.$selected.'>'.$list->nama_penyakit.'</option>
                                            ';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">Gejala</label>
                        </div>
                        <div class="col-sm-10">
                            <select class="form-select" name="kode_gejala" data-control="select2" data-placeholder="Silahkan Pilih Gejala" required>
                                <option></option>
                                <?php
                                    foreach ($gejala as $list) {
                                        $selected = '';
                                        if($list->kode_gejala == $pengetahuan[0]->kode_gejala){
                                            $selected = "selected";
                                        }
                                        echo '
                                                <option value="'.$list->kode_gejala.'" '.$selected.'>'.$list->nama_gejala.'</option>
                                            ';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">MB</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="mb" class="form-control" value="<?= $pengetahuan[0]->mb ?>" required/>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col align-items-center mt-4">
                            <label for="exampleFormControlInput1" class="required form-label">MD</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="md" class="form-control" value="<?= $pengetahuan[0]->md ?>" required/>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <input type="hidden" name="kode_pengetahuan" value="<?= $pengetahuan[0]->kode_pengetahuan ?>">
                        <button type="submit" class="btn btn-primary me-3">Simpan</button>
                        <a href="javascript:window.history.go(-1);" type="button" class="btn btn-danger" >Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>