<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin Pemakaman Jenazah</title>
</head>

<body>
    <?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
    <?php
                                            $id = 0;
                                            foreach($surat as $i)
                                            :
                                            $id++;
                                            $id_izin_pemakaman_jenazah = $i['id_izin_pemakaman_jenazah'];
                                            $nomor_surat = $i['nomor_surat'];
                                            $tanggal_ditetapkan = $i['tanggal_ditetapkan'];
                                            $nama_alm = $i['nama_alm'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $alamat = $i['alamat'];
                                            $umur_alm = $i['umur_alm'];
                                            $agama_alm = $i['agama_alm'];
                                            $nik_alm = $i['nik_alm'];
                                            $tanggal_meninggal = $i['tanggal_meninggal'];
                                            $tanggal_kubur = $i['tanggal_kubur'];
                                            $blok_petak = $i['blok_petak'];
                                            $jenis_pemakaman = $i['jenis_pemakaman'];
                                            $foto_surat_ket_lap = $i['foto_surat_ket_lap'];
                                            $foto_surat_pemeriksaan_jenazah = $i['foto_surat_pemeriksaan_jenazah'];
                                            $foto_kk_alm = $i['foto_kk_alm'];
                                            $foto_surat_rekomendasi_dinas_pupr = $i['foto_surat_rekomendasi_dinas_pupr'];
                                            $id_status_verifikasi_surat = $i['id_status_verifikasi_surat'];
                                            
                                            
                                            
                                          

                                            ?>
    <div>

        <div style="text-align:center;">
            <table cellpadding="0" cellspacing="0"
                style="width:499.65pt; margin-right:auto; margin-left:auto; border-collapse:collapse;">
                <tbody>
                    <tr style="height:120.95pt;">
                        <td colspan="18"
                            style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <h1
                                style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:center; page-break-after:avoid; font-size:20pt;">
                                <span
                                    style="height:0pt; text-align:left; display:block; position:absolute; z-index:0;"><img
                                        src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656860832_surat-izin-penyediaan-media-reklame/1656860832_surat-izin-penyediaan-media-reklame-1.jpeg"
                                        width="86" height="110"
                                        alt="Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Lambang Kota Palembang"
                                        style="margin-left:-30px; text-align: right; display: block; "></span>PEMERINTAH
                                KOTA
                                PALEMBANG&nbsp;&nbsp;
                            </h1>
                            <h3
                                style="margin-top:2pt; margin-bottom:0pt; text-indent:36pt; text-align:center; page-break-inside:avoid; page-break-after:avoid; font-size:20pt;">
                                <span style="font-family:Cambria; font-weight:normal;">KECAMATAN ILIR BARAT SATU</span>
                            </h3>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:center;">
                                <strong>Jalan
                                    Padang Selasa Kelurahan Bukitlama Telpon (0711) - 350572</strong>
                            </p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong>P A L E M B A N
                                    G</strong>
                            </p>
                            <p style="margin-top:10pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span
                                    style="height:0pt; text-align:left; display:block; position:absolute; z-index:1;"><img
                                        src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656860832_surat-izin-penyediaan-media-reklame/1656860832_surat-izin-penyediaan-media-reklame-2.png"
                                        width="665" height="6" alt=""
                                        style="margin: 0 0 0 auto; text-align: right; display: block; "></span><strong>&nbsp;</strong>
                            </p>
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-indent:128.5pt; font-size:14pt;">
                                <strong><span style="font-family:Arial;">SURAT IJIN WALIKOTA PALEMBANG</span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <h1
                                style="margin-top:0pt; margin-bottom:0pt; text-align:center; page-break-after:avoid; font-size:10pt;">
                                <span style="font-family:Arial;">&nbsp;</span>
                            </h1>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong><span style="font-family:Arial;">Nomor :&nbsp;</span></strong><strong><span
                                        style="font-family:Arial;">&nbsp;</span></strong><strong><span
                                        style="font-family:Arial;"><?=$nomor_surat?></span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong><span style="font-family:Arial;">TENTANG</span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong><span style="font-family:Arial;">IJIN PEMAKAMAN JENAZAH BARU</span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2" rowspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">DASAR</span></p>
                        </td>
                        <td rowspan="2"
                            style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">a.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Undang-undang Nomor 28 1959 tentang Pembentukan
                                    Pemerintahan Daerah II dan Kotapraja di Sumatra selatan (Lembaran Negara RI
                                    Tahun 1959 Nomor 73, Tambahan lembaran Negara RI Nomor 1821);</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">b.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Undang-Undang Nomor 26 Tahun 2007 Penataan Ruang
                                    (Lembaran Negara Republik Indonesia Tahun 2007 130, Tambahan Lembaran Negara
                                    Republik Indonesia Nomor 5049);</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">c.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1;"><img
                                        src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656863143_surat-izin-pemakaman-jenazahh/1656863143_surat-izin-pemakaman-jenazahh-3.png"
                                        width="409" height="544"
                                        alt="Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Palembang logo"
                                        style="margin: 0 0 0 auto; text-align: right; display: block; "></span><span
                                    style="font-family:Arial;">Undang-Undang Nomor 28 Tahun 2009 Tentang Pajak
                                    dan Retribusi Daerah (Lembaran Republik Indonesia Tahun 2009 Nomor 48,
                                    Lembaran Negara Republik Indonesia Nomor 3725);</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">d.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Pemerintah Nomor 9 Tahun 1987 tentang
                                    Pemyediaan dan Penggunaan Tanah Untuk Pemakaman;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">e.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Pemerintah Nomor 26 Tahun 2008 tentang Rencana
                                    Tata Ruang Wilayah Nasional (Lembaran Republik 2008 Nomor 48,
                                    Tambahan Lembaran Indonesia Nomor 4833);</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">f.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Presiden RI Nomor 36 2005 tentang
                                    Pengadaan Tanah Bagi Pelaksanaan Kepentingan Umum, Sebagaimana diubah dengan
                                    Peraturan Presiden RI Nomor 65 2006;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">g.</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">&nbsp;</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">h.</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">&nbsp;</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">i.</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">&nbsp;</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">j.</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">&nbsp;</span>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:0.1pt; margin-bottom:0pt; text-indent:-0.1pt; font-size:8pt;">
                                <span style="font-family:Arial;">k.</span>
                            </p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Daerah Kota Palembang Nomor 5 Tahun 2011
                                    tentang Pembinaan dan Retribusi Pemakaman dan/atau Pengabuan (Lembaran
                                    Palembang Tahun 2 Nomor 5 C);</span></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Walikota Nomor 79 Tahun 2011
                                    Pedoman Standar Operasional Prosedur Administrasi Pemerintah di
                                    Lingkungan Pemerintah Kota Palembang;</span></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Walikota Palembang Nomor 54 Tahun 2015
                                    sebagian Kewenangan Pemerintahan dari Walikota kepada Camat, 17
                                    November 2015;</span></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;"> Nomor 57 Tahun 2015 Tentang
                                    Kecamatan dalam Penyelenggaraan Pelayanan Administrasi
                                    Kecamatan, tanggal 18 November 2015;</span></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Peraturan Walikota Palembang Nomor 58 Tahun 2015 Tentang
                                    Standar Pelayanan Administrasi Terpadu Kecamatan, tanggal 18 November 2015;</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:8pt;">l.</span></p>
                        </td>
                        <td colspan="7"
                            style="width:419.7pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Memperhatikan:</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:8pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                                    style="font-family:Arial;">1.</span></p>
                        </td>
                        <td colspan="6"
                            style="width:408.3pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Surat Permohonan Ijin Penggunaan Tanah Makam (IPTM) dari
                                    Sdr/i&nbsp;</span><strong><span
                                        style="font-family:Arial;"><?=$nama_lengkap?></span></strong><span
                                    style="font-family:Arial;">&nbsp;&nbsp;</span><span
                                    style="font-family:Arial;">tanggal&nbsp;</span><strong><span
                                        style="font-family:Arial;"><?=tgl_indo($tanggal_ditetapkan)?></span></strong><span
                                    style="font-family:Arial;">;&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:8pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                                    style="font-family:Arial;">2.</span></p>
                        </td>
                        <td colspan="6"
                            style="width:408.3pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Surat DPRKP KOTA PALEMBANG;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:8pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                                    style="font-family:Arial;">3.</span></p>
                        </td>
                        <td colspan="6"
                            style="width:408.3pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                                    style="font-family:Arial;">Bahwa berdasarkan pertimbangan sebagaimana tersebut
                                    diatas kepada pemohon dapat diberikan Surat Ijin Penggunaan (IPTM) yang
                                    ditetapkan dengan Surat Ijin Walikota Palembang.</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:10pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:12pt;">
                                <strong><span style="font-family:Arial; font-size:11pt;">M E N G I J I N K A
                                        N</span></strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; line-height:12pt;"><strong><span
                                        style="font-family:Arial; font-size:10pt;">&nbsp;</span></strong></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">KEPADA</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="3"
                            style="width:40.45pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Nama&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="4"
                            style="width:381.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;<?=$nama_lengkap?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td colspan="3"
                            style="width:40.45pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Alamat&nbsp;</span></p>
                        </td>
                        <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="4"
                            style="width:381.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$alamat?></span><span
                                    style="font-family:Arial;">&nbsp;&nbsp;</span><span
                                    style="font-family:Arial;">KELURAHAN BUKIT LAMA</span><span
                                    style="font-family:Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">UNTUK</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="8"
                            style="width:431.55pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Memakamkan jenazah / kerangka berlokasi di TPU PUNCAK
                                    SEKUNING Palembang, yang bertindak untuk dan atas nama :</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">1.</span></p>
                        </td>
                        <td colspan="4"
                            style="width:100.55pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Mendiang/Alm</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$nama_alm?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">a.</span></p>
                        </td>
                        <td colspan="3"
                            style="width:89.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Umur</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$umur_alm?></span></p>
                        </td>
                    </tr>
                    <tr style="height:10.7pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">b.</span></p>
                        </td>
                        <td colspan="3"
                            style="width:89.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Agama</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$agama_alm?></span></p>
                        </td>
                    </tr>
                    <tr style="height:10pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">c.</span></p>
                        </td>
                        <td colspan="3"
                            style="width:89.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">NIK</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$nik_alm?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">d.</span></p>
                        </td>
                        <td colspan="3"
                            style="width:89.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Tanggal Meninggal</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=tgl_indo($tanggal_meninggal)?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:8.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">e.</span></p>
                        </td>
                        <td colspan="3"
                            style="width:89.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">TanggalKubur</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=tgl_indo($tanggal_kubur)?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">2.</span></p>
                        </td>
                        <td colspan="4"
                            style="width:100.55pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Blok/Petak</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$blok_petak?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="2"
                            style="width:52.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><span
                                    style="font-family:Arial; font-size:9pt;">&nbsp;</span></p>
                        </td>
                        <td style="width:1.5pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td style="width:9.05pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                        <td colspan="4"
                            style="width:100.55pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Jenis Pemakaman</span></p>
                        </td>
                        <td style="width:5.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">:</span></p>
                        </td>
                        <td colspan="2" style="width:310.65pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;"><?=$jenis_pemakaman?></span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Surat Ijin Penggunaan Tanah Makam ini sejak
                                    tanggal ditetapkan, dengan ketentuan sebagai berikut :</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span
                                    style="font-family:Arial;">1.</span></p>
                        </td>
                        <td colspan="10"
                            style="width:482.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Surat Ijin berlaku untuk 3 (Tiga) Tahun, TMT tanggal
                                    dikeluarkan dan dapat diperpanjang untuk jangka waktu 3 (Tiga) tahun
                                    berikutnya;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span
                                    style="font-family:Arial;">2.</span></p>
                        </td>
                        <td colspan="10"
                            style="width:482.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Permohonan perpanjangan harus diajukan 3 (Tiga)
                                    Bulan sebelum habis masa berlakunya izin, dan untuk tanah tidak didaftar
                                    kembali lewat waktu 3 (Tiga) Tahun, maka Ijin dinyatakan tidak lagi
                                    makam dapat dibongkar untuk digunakan pemakaman baru, atau kepentingan
                                    lain;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span
                                    style="font-family:Arial;">3.</span></p>
                        </td>
                        <td colspan="10"
                            style="width:482.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Segera melapor ke Kecamatan Ilir I,
                                    ijin pindah alamat;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span
                                    style="font-family:Arial;">4.</span></p>
                        </td>
                        <td colspan="10"
                            style="width:482.15pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">Pemegang Ijin wajib mematuhi segala peraturan yang
                                    berlaku Bidang Pemakaman Palembang.</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:493.95pt; padding-right:2.85pt; padding-left:2.85pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:28.85pt;">
                        <td colspan="10"
                            style="width:271.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="height:0pt; display:block; position:absolute; z-index:0;"></span>&nbsp;
                            </p>
                        </td>
                        <td style="width:222.45pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">Ditetapkan di Palembang</span></p>
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">pada tanggal,&nbsp;</span><span
                                    style="font-family:Arial;">&nbsp;</span><strong><span
                                        style="font-family:Arial;"><?=tgl_indo($tanggal_ditetapkan)?></span></strong><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p
                                style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                                <strong><span style="font-family:Arial; font-size:10pt;">a.n.
                                        WALIKOTA</span></strong><strong><span
                                        style="font-family:Tahoma;">&nbsp;</span></strong><strong><span
                                        style="font-family:Arial; font-size:10pt;">PALEMBANG</span></strong>
                            </p>
                            <p
                                style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                <strong><span style="font-family:Arial;">CAMAT SATU,</span></strong>
                            </p>
                            <img src="<?=base_url();?>assets/sb_admin/img/ttd.jpeg" alt="" height="140"
                            style="margin-top:0pt; margin-left:270pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:26pt;"><strong><span
                                        style="font-family:'Arial Black'; color:#a6a6a6;">PATEN</span></strong></p>
                            
                        </td>
                    </tr>
                    <tr style="height:8.5pt;">
                        <td colspan="11"
                            style="width:496.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                                    style="font-family:Arial;">&nbsp;</span></p>
                        </td>
                    </tr>
                    <tr style="height:0pt;">
                        <td style="width:11.8pt;"><br></td>
                        <td style="width:43.4pt;"><br></td>
                        <td style="width:7.2pt;"><br></td>
                        <td style="width:11.85pt;"><br></td>
                        <td style="width:11.4pt;"><br></td>
                        <td style="width:22.9pt;"><br></td>
                        <td style="width:7.2pt;"><br></td>
                        <td style="width:64.75pt;"><br></td>
                        <td style="width:8.5pt;"><br></td>
                        <td style="width:85.4pt;"><br></td>
                        <td style="width:225.25pt;"><br></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
    <?php endforeach;?>
</body>

<!-- <body>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title></title>
        <style type="text/css">
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th {
            border: 1px solid black;
            width: 6em;
        }

        td {
            width: 6em;
            border: 1px solid black;
        }

        th {
            border: 1px solid black;
            width: 6em;
        }

        td {
            width: 6em;
            border: 1px solid black;
            padding: 0;
            margin: 0;
        }

        input {
            width: 100%;
            border: none;
            margin: 0;
        }

        .save {
            margin-top: 1em;
            width: 5em;
        }

        input {
            width: 100%;
            border: none;
            margin: 0;
            text-align: right;
        }
        </style>
    </head>

    <body>
        <form method="get" name="copresentations">
            <table cellspadding="0">
                <caption>
                    Summary of Financial Data
                </caption>
                <tr>
                    <th scope="col">Fiscal Year </th>
                    <th scope="col">Worksite<br />
                        Presentations </th>
                    <th scope="col">ing Grades </th>
                    <th scope="col">Number of Presentators </th>
                </tr>
                <tr>
                    <th scope="row">1999</th>
                    <td><input type="text" name="1999" /></td>
                    <td><input type="text" name="1999" /></td>
                    <td><input type="text" name="1999" /></td>
                </tr>
                <tr>
                    <th scope="row">2000</th>
                    <td><input type="text" name="2000" /></td>
                    <td><input type="text" name="2000" /></td>
                    <td><input type="text" name="2000" /></td>
                </tr>
                <tr>
                    <th scope="row">2001</th>
                    <td><input type="text" name="2001" /></td>
                    <td><input type="text" name="2001" /></td>
                    <td><input type="text" name="2001" /></td>
                </tr>
                <tr>
                    <th scope="row">2002</th>
                    <td><input type="text" name="2002" /></td>
                    <td><input type="text" name="2002" /></td>
                    <td><input type="text" name="2002" /></td>
                </tr>
                <tr>
                    <th scope="row">2003</th>
                    <td><input type="text" name="2003" /></td>
                    <td><input type="text" name="2003" /></td>
                    <td><input type="text" name="2003" /></td>
                </tr>
                <tr>
                    <th scope="row">2004</th>
                    <td><input type="text" name="2004" /></td>
                    <td><input type="text" name="2004" /></td>
                    <td><input type="text" name="2004" /></td>
                </tr>
            </table>
            <input type="submit" class="save" value="Save" />
        </form>
    </body>

    </html>

</body> -->

</html>