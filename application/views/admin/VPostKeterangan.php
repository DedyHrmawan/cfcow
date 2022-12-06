<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Data Postingan</span>
                </h3>
                <div class="card-toolbar">
                    <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#mdl_addPostingan">Tambah Postingan</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-rounded table-row-bordered table-row-gray-300 align-middle gs-0 gy-3" id="tabelPostingan">
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th>No</th>
                                <th>Nama Postingan</th>
                                <th>Detail Postingan</th>
                                <th>Saran Postingan</th>
                                <th class="min-w-150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach($list as $item){
                                    echo '
                                    <tr>
                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                            '.$no.'
                                        </td>
                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                            '.$item->nama_post.'
                                        </td>
                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                            '.mb_strimwidth($item->det_post, 0, 170, "...").'
                                        </td>
                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                            '.mb_strimwidth($item->srn_post, 0, 120, "...").'
                                        </td>
                                        <td class="">
                                            <a href="" title="Detail Postingan" data-bs-toggle="modal" data-bs-target="#mdl_detailPostingan" data-id="'.$item->kode_post.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detailPostingan me-1">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                        <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                        <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                    </svg></span>
                                            </a>
                                            <a href="" title="Edit Postingan" data-bs-toggle="modal" data-bs-target="#mdl_editPostingan" data-id="'.$item->kode_post.'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_editPostingan m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" title="Hapus Postingan" data-bs-toggle="modal" data-bs-target="#mdl_delPostingan" data-id="'.$item->kode_post.'" class="btn btn-icon btn-bg-light btn-active-color-primary mdl_delPostingan btn-sm m-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    ';
                                    $no++;
                                }
                            ?>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Postingan-->
<div class="modal fade" id="mdl_addPostingan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Tambah Postingan </h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('postketerangan/tambah') ?>" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Postingan</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Postingan" name="post_nama" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Detail Postingan</span>
                        </label>
                        <textarea class="form-control form-control-solid tox-target textTiny" placeholder="Masukan Detail Postingan" name="post_det" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Saran Postingan</span>
                        </label>
                        <textarea class="form-control form-control-solid tox-target textTiny" placeholder="Masukan Saran Postingan" name="post_srn" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Gambar</span>
                        </label>
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevAddPostingan" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <input type="file" class="form-control form-control-solid" name="file" id="addImgPostingan" onchange="previewAddPostingan();" required />
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary submitPostingan">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Postingan-->
<div class="modal fade" id="mdl_editPostingan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Edit Postingan </h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <form action="<?= site_url('postketerangan/edit') ?>" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Postingan</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" id="editPost_nama" name="post_nama" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Detail Postingan</span>
                        </label>
                        <textarea class="form-control form-control-solid tox-target textTiny" id="editPost_det" name="post_det" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Saran Postingan</span>
                        </label>
                        <textarea class="form-control form-control-solid tox-target textTiny" id="editPost_srn" name="post_srn" cols="30" rows="10" required></textarea>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Gambar</span>
                        </label>
                        <!-- wadah preview -->
                        <img class="m-3 mx-auto rounded" id="prevEditPostingan" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <input type="file" class="form-control form-control-solid" name="file" id="EditImgPostingan" onchange="previewEditPostingan();" required />
                    </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" id="editPost_id" name="kode_post">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="submit" id="" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Postingan-->
<div class="modal fade" id="mdl_delPostingan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Hapus Postingan</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>
            <form action="<?= site_url('postketerangan/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus Postingan tersebut ?</p>
                </div>

                <div class="modal-footer">
                    <input type="hidden" id="hapusPost_id" name="kode_post">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail Postingan-->
<div class="modal fade" id="mdl_detailPostingan">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-3">Detail Postingan</h3>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                        </svg></span>
                </div>
            </div>

            <div class="modal-body">
                <div class="card-body">
                    <div class="me-7 mb-4 text-center">
                        <div class="">
                            <img alt="image" id="detailPost_gambar" style="max-width: 430px; min-width:300px;" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 fw-bold ">Nama Postingan</label>
                        <p><span id="detailPost_nama">Nama</p>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 fw-bold ">Detail Postingan</label>
                        <p><span id="detailPost_det">Detail</p>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 fw-bold ">Saran Postingan</label>
                        <p><span id="detailPost_srn">Saran</p>
                    </div>

                </div>
                <!--end::Card body-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer') ?>
<script>
    $('#tabelPostingan').dataTable({
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

    //preview sebelum upload Postingan
    function previewAddPostingan() {
        document.getElementById("prevAddPostingan").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgPostingan").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddPostingan").src = oFREvent.target.result;
        };
    };

    //preview Edit Postingan
    function previewEditPostingan() {
        document.getElementById("prevEditPostingan").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("EditImgPostingan").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditPostingan").src = oFREvent.target.result;
        };
    };
</script>
<script>
    var addTiny = {
        selector: ".textTiny",
        menubar: false,
        setup: function(editor) {
            editor.on('change', function() {
                tinymce.triggerSave();
            });
        },
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
        ]
    };

    tinymce.init(addTiny);
</script>
<script>
    $('#tabelPostingan tbody').on('click', '.mdl_detailPostingan', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('postketerangan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                kode_post: id
            },
            success: res => {
                $('#detailPost_nama').html(res[0].nama_post)
                $('#detailPost_det').html(res[0].det_post)
                $('#detailPost_srn').html(res[0].srn_post)
                $('#detailPost_gambar').attr("src", res[0].gambar);
            }
        })
    })

    $('#tabelPostingan tbody').on('click', '.mdl_editPostingan', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('postketerangan/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                kode_post: id
            },
            success: res => {
                $('#editPost_nama').val(res[0].nama_post)
                tinymce.get('editPost_det').setContent(res[0].det_post)
                tinymce.get('editPost_srn').setContent(res[0].srn_post)
                $('#prevEditPostingan').attr("src", res[0].gambar);
                $('#editPost_id').val(res[0].kode_post)
            }
        })
    })

    $('#tabelPostingan tbody').on('click', '.mdl_delPostingan', function() {
        const id = $(this).data("id")
        $('#hapusPost_id').val(id)
    })
</script>