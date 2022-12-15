<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <h1 class="mt-2 mb-2">Keterangan</h1>
                <div class="separator"></div>
                <br>
                <div class="row g-5 g-xl-8" id="itemPost">
                    <?php
                    foreach ($list as $item) {
                        echo '
                            <div class="col-xl-4">
                                <div class="card card-xl-stretch bg-light mb-xl-8">
                                    <div class="d-flex flex-stack justify-content-center">
                                        <div class="bgi-no-repeat bgi-size-cover rounded">
                                            <img src="' . $item->gambar . '" class="card-rounded mw-100" style="max-height: 200px; min-height: 200px; max-width:250px; min-width:200px;" alt="" />
                                        </div>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="card-body pt-5">
                                        <div class="text-center w-100">
                                            <div class="mb-1 mb-xxl-1">
                                                <span class="btn btn-danger fw-bold">' . $item->nama_post . '</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex flex-center py-1 pb-5">
                                        <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                                            <a href="#" class="btn btn-info mdl_detail" onclick="detail(' . $item->kode_post . ')" data-bs-toggle="modal" data-bs-target="#mdl_detail"><i class="fonticon-view fs-2"></i>Detail</a>
                                        </div>
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="#" class="btn btn-primary mdl_saran" onclick="saran(' . $item->kode_post . ')" data-bs-toggle="modal" data-bs-target="#mdl_saran"><i class="fonticon-sun fs-2"></i>Saran</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdl_detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail <span id="detail_nama"></span></h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <span id="textDetail"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="mdl_saran">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Saran <span id="saran_nama"></span></h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('') ?>" method="post">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <span id="textSaran"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('depan/template/footer') ?>
<script>
    function detail(id) {
        $.ajax({
            url: "<?= site_url('keterangan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                kode_post: id
            },
            success: res => {
                $("#detail_nama").html(res[0].nama_post);
                $("#textDetail").html(res[0].det_post);
            }
        })
    }

    function saran(id) {
        $.ajax({
            url: "<?= site_url('keterangan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                kode_post: id
            },
            success: res => {
                $("#saran_nama").html(res[0].nama_post);
                $("#textSaran").html(res[0].srn_post);
            }
        })
    }
</script>