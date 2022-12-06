<script src="<?= base_url(); ?>assets/js/html2canvas/jspdf.umd.min.js"></script>
<script src="<?= base_url(); ?>assets/js/html2canvas/html2canvas.min.js"></script>
<script src="<?= base_url(); ?>assets/js/html2canvas/jspdf-html2canvas.min.js"></script>
<script type="text/javascript">
	window.html2canvas = html2canvas;
	window.jsPDF = window.jspdf.jsPDF;

	function makePDF(){        
		var doc = new jsPDF();
		const date = new Date();
        const newDate = getFullDate(date);
		doc.setFont("helvetica", "bold");
		doc.setFontSize(12);

		html2canvas(document.querySelector("#capture"),{
			allowTaint:true,
			useCORS: true,
			scale: 4
		}).then(canvas => {               
			var img = canvas.toDataURL("image/jpeg");
			doc.addImage(img,'JPEG',5,25,200,0);
            
            doc.save(`Hasil Diagnosis - ${newDate}.pdf`);		
		});
	}
    const getFullDate = (dateObj) => {
        const date  = dateObj.getDate()
        const month = getMonthName(dateObj.getMonth())
        const year  = dateObj.getFullYear()

        return `${date} ${month} ${year}`
    }

    const getMonthName = (month) => {
        let res
        switch(month){
            case 0:
                res = "January"
                break;
            case 1:
                res = "February"
                break;
            case 2:
                res = "March"
                break;
            case 3:
                res = "April"
                break;
            case 4:
                res = "May"
                break;
            case 5:
                res = "June"
                break;
            case 6:
                res = "July"
                break;
            case 7:
                res = "August"
                break;
            case 8:
                res = "September"
                break;
            case 9:
                res = "October"
                break;
            case 10:
                res = "November"
                break;
            case 11:
                res = "December"
                break;
        }
        return res
    }
</script>
<div class="post d-flex flex-column-fluid mt-1" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mt-n10 mb-xl-8">
            <div class="card-body card-rounded py-3" id="capture">
                <div class="card mb-5 mt-5  mb-xl-8">
                    <div class="row mt-1 align-items-center">
                        <div class="col-md-auto">
                            <h1>Hasil Diagnosis</h1>
                        </div>
                        <div class="col-md-auto">
                            <a class="btn btn-sm btn-primary" onclick="makePDF()">
                                <span class="svg-icon svg-icon-white svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor" />
                                        <path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor" />
                                        <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor" />
                                    </svg>
                                </span>Cetak</a>
                        </div>
                    </div>
                    <br>
                    <div class="separator"></div>
                </div>
                <table class="table rounded table-rounded table-striped table-row-gray-300 align-middle gs-0 gy-3" id="tabelDetailRiwayat">
                    <thead class="bg-secondary">
                        <tr class="fw-bolder fs-5 text-dark border-bottom border-gray-200">
                            <th class="text-center">No</th>
                            <th class="text-center">Kode</th>
                            <th class="text-start">Gejala yang Dialami (Keluhan)</th>
                            <th class="text-center">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $ig = 0;
                            foreach ($argejala as $key => $value) {
                                $kondisi = $value;
                                $ig++;
                                $gejala = $key;
                                $sql = "SELECT * FROM gejala WHERE kode_gejala = '$key'";
                                $res = $this->db->query($sql)->result();
                                echo '
                                    <tr>
                                        <td class="text-dark text-center text-hover-primary fs-6">
                                            '.$ig.'
                                        </td>
                                        <td class="text-dark text-center text-hover-primary fs-6">
                                            G'.str_pad($res[0]->kode_gejala, 3, '0', STR_PAD_LEFT).'
                                        </td>
                                        <td class="text-dark text-hover-primary fs-6">
                                            '.$res[0]->nama_gejala.'
                                        </td>
                                        <td class="text-center col-3">
                                            <span class="badge badge-primary">'.$arkondisitext[$kondisi].'</span>
                                        </td>
                                    </tr>
                                ';
                              }
                        ?>                        
                    </tbody>
                </table>
                <div class="row pt-15">
                    <div class="col-sm-12">
                        <div class="card card-xl-stretch bg-light mb-xl-8">
                            <div class="card-body pt-5">
                                <div class="row mt-1">
                                    <div class="col-md-8">
                                        <h1>Hasil Diagnosa</h1>
                                        <p>Jenis Penyakit yang Diderita</p>
                                        <span class="badge fs-1 badge-light-primary"><?= $hasil[0]->nama_penyakit ?> / <?= round($hasil[0]->hasil_nilai, 2) ?> % (<?= $hasil[0]->hasil_nilai ?>)</span>
                                    </div>
                                    <div class="col-md-4 justify-content-end">
                                        <img src="<?= $hasil[0]->gambar ?>" alt="Image Hasil Diagnosa" class="img-thumbnail" style="min-width: 250px; max-width: 300px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Detail</h3>
                    </div>
                    <div class="card-body">
                        <?= $hasil[0]->det_penyakit ?>
                    </div>
                </div>
                <div class="card shadow-sm mt-10">
                    <div class="card-header">
                        <h3 class="card-title">Saran</h3>
                    </div>
                    <div class="card-body">
                        <?= $hasil[0]->srn_penyakit ?>
                    </div>
                </div>
                <div class="card shadow-sm mt-10">
                    <div class="card-header">
                        <h3 class="card-title">Kemungkinan Lain</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            $np = 0;
                            foreach ($arpenyakit as $key => $value) {
                                $np++;
                                $idpkt[$np] = $key;
                                $nmpkt[$np] = $arpkt[$key];
                                $vlpkt[$np] = $value;
                            }
                            for ($ipl = 2; $ipl <= sizeOf($idpkt); $ipl++) {
                                echo '
                                    <div class="d-flex align-items-center me-15">
                                    <span class="bullet bullet-dot bg-secondary h-15px w-15px me-5"></span>'.$nmpkt[$ipl].' / '.round($vlpkt[$ipl], 2).' % ('.$vlpkt[$ipl].')
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('depan/template/footer') ?>
<script>
    $('#tabelDetailRiwayat').dataTable({
        "searching": false,
        "paging": false,
        "ordering": false,
        "info": false,
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
</script>