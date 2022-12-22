<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3">
                <div class="card mb-5 mt-5  mb-xl-8">
                    <h1 class="mt-1">Diagnosa Penyakit</h1>
                    <div class="separator"></div>
                    <br>
                    <div class="card-body card-rounded text-white bg-success py-3">
                        <h3 class="text-white "><span class="svg-icon text-white svg-icon-2hx pe-sm-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg></span>Perhatian !</h3>
                        <p>Silahkan memilih gejala sesuai dengan kondisi sapi anda, anda dapat memilih kepastian kondisi sapi dari sangat yakin hingga tidak ya, jika sudah tekan tombol proses
                            <span class="svg-icon svg-icon-white svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span> di bawah untuk melihat hasil.
                        </p>
                    </div>
                </div>
                <form action="<?= site_url('diagnosa/hitung') ?>" method="post">
                    <div class="text-end mb-7">
                        <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" title="Klik disini untuk melihat hasil !">
                            <span class="svg-icon svg-icon-white svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            Diagnosa</button>
                    </div>
                    <table class="table rounded table-rounded table-striped table-row-gray-300 align-middle gs-0 gy-3" id="tabelDiagnosa">
                        <thead class="bg-secondary">
                            <tr class="fw-bolder fs-5 text-dark border-bottom border-gray-200">
                                <th class="text-center">No</th>
                                <th class="text-center">Kode</th>
                                <th class="text-start">Gejala</th>
                                <th class="text-center">Pilih Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($gejala as $item) {
                                echo '
                                <tr>
                                    <td class="text-dark text-center text-hover-primary fs-6">
                                        ' . $no . '
                                    </td>
                                    <td class="text-dark text-center text-hover-primary fs-6">
                                        G' . str_pad($item->kode_gejala, 3, '0', STR_PAD_LEFT) . '
                                    </td>
                                    <td class="text-dark text-hover-primary fs-6">
                                        ' . $item->nama_gejala . '
                                    </td>
                                    <td class="text-end col-3">
                                        <select class="form-select" name="kondisi[]" required>
                                            <option value="0">Pilih jika sesuai</option>
                                ';
                                foreach ($kondisi as $list) {
                                    echo '
                                            <option value="' . $item->kode_gejala . '_' . $list->id . '">' . $list->kondisi . '</option>
                                        ';
                                };
                                echo '
                                        </select>                                        
                                    </td>
                                </tr>
                                ';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>
<script>
    $('#tabelDiagnosa').dataTable({
        paging: false,
        ordering: false,
        info: false,
    });
</script>