<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin Media Reklame</title>
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
                                            $id_izin_penyediaan_media_reklame = $i['id_izin_penyediaan_media_reklame'];
                                            $nomor_surat = $i['nomor_surat'];
                                            $berlaku_awal = $i['berlaku_awal'];
                                            $berlaku_akhir = $i['berlaku_akhir'];
                                            $jenis_reklame = $i['jenis_reklame'];
                                            $merk = $i['merk'];
                                            $jumlah = $i['jumlah'];
                                            $ukuran = $i['ukuran'];
                                            $lokasi_reklame = $i['lokasi_reklame'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $alamat = $i['alamat'];
                                            $foto_ktp_pemohon = $i['foto_ktp_pemohon'];
                                            $foto_sketsa_lokasi = $i['foto_sketsa_lokasi'];
                                            $foto_desain = $i['foto_desain'];
                                            $foto_bukti_lunas_pbb = $i['foto_bukti_lunas_pbb'];
                                            $id_status_verifikasi_surat = $i['id_status_verifikasi_surat'];
                                            
                                            
                                          

                                            ?>
    <table cellpadding="0" cellspacing="0"
        style="width:529.9pt; margin-left:1.4pt; border-collapse:collapse; margin-top:-30px;">
        <tbody>
            <tr style="height:120.95pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <h1
                        style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:center; page-break-after:avoid; font-size:20pt;">
                        <span style="height:0pt; text-align:left; display:block; position:absolute; z-index:0;"><img
                                src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656860832_surat-izin-penyediaan-media-reklame/1656860832_surat-izin-penyediaan-media-reklame-1.jpeg"
                                width="86" height="110"
                                alt="Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Description: Lambang Kota Palembang"
                                style="margin: 0 0 0 auto; text-align: right; display: block; "></span>PEMERINTAH KOTA
                        PALEMBANG&nbsp;&nbsp;
                    </h1>
                    <h3
                        style="margin-top:2pt; margin-bottom:0pt; text-indent:36pt; text-align:center; page-break-inside:avoid; page-break-after:avoid; font-size:20pt;">
                        <span style="font-family:Cambria; font-weight:normal;">KECAMATAN ILIR BARAT SATU</span>
                    </h3>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-indent:36pt; text-align:center;"><strong>Jalan
                            Padang Selasa Kelurahan Bukitlama Telpon (0711) - 350572</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong>P A L E M B A N G</strong>
                    </p>
                    <p style="margin-top:10pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span
                            style="height:0pt; text-align:left; display:block; position:absolute; z-index:1;"><img
                                src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656860832_surat-izin-penyediaan-media-reklame/1656860832_surat-izin-penyediaan-media-reklame-2.png"
                                width="695" height="6" alt=""
                                style="margin: 0 0 0 auto; text-align: right; display: block; "></span><strong>&nbsp;</strong>
                    </p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt; margin-top:-10px;">
                        <strong><span style="font-family:Arial;">SURAT IZIN WALIKOTA PALEMBANG</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; margin-top:-30px;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong><span
                                style="font-family:Arial; margin-top:-30px;">NOMOR:
                                <?=$nomor_surat?></span></strong></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong><span
                                style="font-family:Arial;">TENTANG</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong><span
                                style="font-family:Arial;">IZIN PENYELENGGARAAN REKLAME INSIDENTIL</span></strong></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">&nbsp;</p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="7" style="width:53.35pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>DASAR</strong></p>
                </td>
                <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">:</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">a.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 28 Tahun 1959 Pembentukan
                            Pemerintahan Daerah Tingkat II dan Kotapraja di Sumatera selatan ( Negara Republik
                            Indonesia Tahun 1959 Nomor 73, Tambahan lembaran Negara Republik Indonesia Nomor
                            1821);</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">b.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 36 Tahun 1999 tentang Telekomunikasi
                            (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 154, Tambahan Lembaran Negara Republik
                            Indonesia Nomor 3481);</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">c.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 38 Tahun 2004 tentang Jalan (Lembaran Negara
                            Indonesia Tahun 2004 Nomor 83, Tambahan Lembaran Negara Republik Indonesia Nomor
                            3186);</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">d.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 26 Tahun 2007 tentang Penataan Ruang
                            (Lembaran Negara Republik Indonesia Tahun 2007 Nomor 68, Tambahan lembaran Negara Republik
                            Indonesia Nomor 4725);</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">e.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 22 Tahun 2009 tentang Lalu Lintas dan
                            Angkutan Jalan (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 96, Tambahan Lembaran
                            Negara Republik Indonesia Nomor 5036);</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">f.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Undang-undang Nomor 28 Tahun 2009 Tentang Pajak Daerah dan
                            Retribusi Daerah (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 130, Tambahan Lembaran
                            Negara Republik Indonesia Nomor 5049);</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">g.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 Tentang Pedoman
                            PATEN (Pelayanan Administrasi Terpadu Kecamatan).</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">h.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Daerah Kota Palembang Nomor 8 Tahun 2000 Tentang
                            Rencana Tata Ruang Wilayah Kota Palembang (Lembaran Daerah Kota Palembang Tahun 2000 Nomor
                            12);</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">i.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Daerah Kota Palembang Nomor 7 Tahun 2010 Tentang Izin
                            Penyelenggaraan Reklame (Lembaran Daerah Kota Palembang Tahun 2010 Nomor 7);</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">j.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Daerah Palembang No.14 Tahun 2010 Tentang Pajak Reklame
                            (Lembaran Daerah Kota Palembang Tahun 2010 Nomor 14);</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">k.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Walikota Palembang Nomor 79 Tahun 2013 Tentang
                            Penyelenggaraan Media Reklame.</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">l.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Walikota Palembang Nomor 54 Tahun 2015 Tentang
                            Pelimpahan sebagian Kewenangan Pemerintahan dari Walikota kepada Camat, tanggal 17 November
                            2015.</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">m.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Peraturan Walikota Palembang Nomor 54 Tahun 2015 Tentang
                            Pelimpahan sebagian Kewenangan Pemerintahan dari Walikota kepada Camat, tanggal 17 November
                            2015.</span></p>
                </td>
            </tr>

            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:10.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">n.</span></p>
                </td>
                <td colspan="9" style="width:446.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Memperhatikan:</span></p>
                </td>
            </tr>


            <tr style="height:8.5pt;">
                <td colspan="10" style="width:78.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                </td>
                <td style="width:11.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="7" style="width:430.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Surat Izin Penyelenggaraan Reklame dari
                            Sdr/i&nbsp;</span><strong><span style="font-family:Arial;"><?=$nama_lengkap?></span></strong><span
                            style="font-family:Arial;">&nbsp;tanggal&nbsp;</span><strong><span
                                style="font-family:Arial;"><?=tgl_indo($berlaku_awal)?></span></strong><span
                            style="font-family:Arial;">;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="10" style="width:78.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                </td>
                <td style="width:11.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="7" style="width:430.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Bahwa pertimbangan sebagaimana tersebut diatas kepada
                            pemohon dapat Surat Izin Penyelenggaraan Reklame (IPR) yang ditetapkan
                            Izin Walikota Palembang;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="10" style="width:78.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                </td>
                <td style="width:11.85pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="7" style="width:430.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p
                        style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:12pt; margin-top:-20px;">
                        <strong><span style="font-family:Arial; font-size:11pt;">MENGIZINKAN :</span></strong>
                    </p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="7" style="width:53.35pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt;"><strong><span
                                style="font-family:Arial; font-size:9pt;">KEPADA</span></strong></p>
                </td>
                <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;">:</p>
                </td>
                <td colspan="4" style="width:42.45pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Nama</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="5" style="width:406.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$nama_lengkap?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="7" style="width:53.35pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;">&nbsp;</p>
                </td>
                <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="4" style="width:42.45pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Alamat</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="5" style="width:406.7pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$alamat?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt; margin-top:10px;">
                <td colspan="7" style="width:53.35pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:12pt; "><strong><span
                                style="font-family:Arial; font-size:9pt;">UNTUK</span></strong></p>
                </td>
                <td style="width:9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;">:</p>
                </td>
                <td colspan="10" style="width:459.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Menyelenggarakan Reklame dengan perusahaan
                            berikut:</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Jenis Reklame</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$jenis_reklame?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Merk</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:&nbsp;</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$merk?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">3.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Jumlah</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$jumlah?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">4.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Ukuran</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$ukuran?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">5.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Lokasi Reklame</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=$lokasi_reklame?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="8" style="width:65.15pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:10.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">6.</span></p>
                </td>
                <td colspan="4" style="width:91.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">Berlaku s.d Tanggal</span></p>
                </td>
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">:</span></p>
                </td>
                <td colspan="3" style="width:344.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;"><?=tgl_indo($berlaku_akhir)?></span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;"> Penyelenggaraan ini berlaku sejak tanggal
                            ditetapkan kewajiban sebaai berikut:</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="2" style="width:15.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="16" style="width:509.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Pemegang wajib mentaati peraturan perundang-undangan yang
                            berlaku;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="2" style="width:15.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="16" style="width:509.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Lokasi Izin reklame harus sesuai dengan Ketentuan
                            berlaku;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="2" style="width:15.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">3.</span></p>
                </td>
                <td colspan="16" style="width:509.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Dalam pelaksanaan pemasangan, pihak penyelenggara harus
                            selalu menjaga keindahan, kebersihan ketertiban umum;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="2" style="width:15.2pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt;"><span
                            style="font-family:Arial;">4.</span></p>
                </td>
                <td colspan="16" style="width:509.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8pt;"><span
                            style="font-family:Arial;">Penyelenggaran reklame harus bertanggung atas pemasangan
                            dan bersedia dibatalkan pelanggaran, termasuk larangan pemasangan jenis spanduk/kain
                            rentang yang jalan.</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;">&nbsp;</p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="16" style="width:285.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:238.75pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">Ditetapkan di Palembang</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:Arial;">pada
                            tanggal,&nbsp;</span><strong><span style="font-family:Arial;"><?=tgl_indo($berlaku_awal)?></span></strong></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:11pt;">
                        <span style="font-family:Arial; font-size:10pt;">a.n. WALIKOTA</span><span
                            style="font-family:Tahoma;">&nbsp;</span><span
                            style="font-family:Arial; font-size:10pt;">PALEMBANG</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <span style="font-family:Arial;">CAMAT ILIR BARAT I,</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <span style="font-family:Arial;">&nbsp;</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <span style="font-family:Arial;">&nbsp;</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <span style="font-family:Arial;">&nbsp;</span>
                    </p>
                    <p style="margin-top:0pt; margin-left:252pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <span style="font-family:Arial;">&nbsp;</span>
                    </p>
                    <p
                        style="margin-top:0pt; margin-left:338.8pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">
                        <strong><span style="font-family:Arial;">RAKHMAN HIDAYAT PANE, S.STP.</span></strong>
                    </p>
                    <p
                        style="margin-top:0pt; margin-left:338.8pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">
                        <span style="font-family:Arial;">Pembina</span>
                    </p>
                    <p
                        style="margin-top:0pt; margin-left:339.7pt; margin-bottom:0pt; text-align:justify; font-size:10pt;">
                        <span style="font-family:Arial;">NIP. 198306092001121003</span>
                    </p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="18" style="width:527.1pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="17" style="width:518.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><u><span
                                    style="font-family:Arial;">KETENTUAN IZIN PENYELENGGARAAN
                                    REKLAME</span></u></strong></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="17" style="width:518.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="17" style="width:518.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Pemegang Izin ini Mempunyai kewajiban
                            ketentuan, antara lain sebagai berikut :</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">A</span></strong><span style="font-family:Arial;">.</span>
                    </p>
                </td>
                <td colspan="14" style="width:496.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;"> Perizinan</span></strong></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Izin Penyelenggaraan Reklame dipergunakan untuk menyelenggarakan
                            reklame.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Izin Penyelengaraan diberikan
                            reklame pada milik Pemerintah Daerah dan milik pribadi dan atau Badan, dengan
                            jangka waktu 1 (satu) tahun dan dapat diperpanjang untuk waktu yang sama pada tahun
                            berikutnya.&nbsp;</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">3.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Permohonan harus selambat- 30 ( puluh) hari
                            dimulainya reklame yang sudah ada.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">4.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Izin Penyelenggaraan Reklame tidak dapat dipindahtangankan kepada
                            lain.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">5.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Penyelenggaraan Reklame dilaksanakan sebelum Izin
                            Penyelenggaraan Reklame (IPR) dan atau Izin Mendirikan Media (IMMR), akan dilakukan
                            pembongkaran atau dikenakan denda.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">6.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Izin penyelenggaraan Reklame dengan sendirinya berakhir dan
                            dinyatakan berlaku oleh Walikota apabila :</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">a.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> reklame tersebut terdapat perubahan jenis produk dan ukuran,
                            tidak sesuai lagi dengan IPR yang diberikan.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">b.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Walikota dengan pertimbangan tertentu dapat mencabut IPR dan
                            IPR tersebut berlaku lagi.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">d.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Perusahaan periklanan dan atau Biro tidak melaksanakan
                            penyelenggaraan reklame dalam waktu 30 ( puluh) hari setelah ditetapkannya IPR.</span>
                    </p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">d.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Perusahaan Jasa Periklanan dan Biro Reklame mengalihkan dan
                            atau memindahtangankan IPR.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">7.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Izin Reklame berakhir sendirinya dan reklame
                            rangkanya harus dibongkar, serta dan dibersihkan oleh Pemohon atau Perusahaan
                            Jasa Periklanan dan atau Biro Reklame selambat- 7 (tujuh) hari sejak tanggal
                            pembongkaran.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">8.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Apabila reklame beserta rangkanya diambil dan tidak
                            dibersihkan oleh Pemohon atau Perusahaan Jasa atau Biro Reklame, maka akan
                            milik Pemerintah Daerah.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">9.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Walikota menunjuk Polisi Pamong Praja Kota Palembang dan
                            Instansi terkait, membongkar reklame sesuai dengan prosedur ketentuan peraturan
                            perundang-undanganyang berlaku, telah dinyatakan bahwa reklame dimaksud harus
                            dibongkar dibersihkan.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">10.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Uang jaminan pembongkaran reklame yang diselenggarakan
                            dipergunakan oleh Pemerintah untuk :</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">a.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Biaya pembongkaran reklame pada lokasi milik Pemerintah
                            Daerah.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">b.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> pembongkaran reklame yang tidak sesuai dengan IPR.</span>
                    </p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:12.55pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">11.</span></p>
                </td>
                <td colspan="12" style="width:481.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Uang pembongkaran reklame akan dikembalikan kepada
                            Perusahaan Periklanan dan atau Biro Reklame yang bersangkutan, apabila Jasa
                            Periklanan dan Biro Reklame tersebut telah melaksanakan kewajibannya.&nbsp;</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="17" style="width:518.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">B</span></strong><span style="font-family:Arial;">.</span>
                    </p>
                </td>
                <td colspan="14" style="width:496.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">Ketentuan Tata Letak</span></strong></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Pemasangan reklame sesuai titik reklame
                            berdasarkan Surat Izin Walikota Palembang.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Membongkar reklame serta bangunan konstriksinya segera setelah
                            Izin Penyelenggaraan Reklame.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">3.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> menyelenggarakan reklame pada Kantor
                            pemerintah, disekitar tempat ibadah dan sarana pendidikan lokasi yang berada
                            jalan umum, apabila pada sisi terbawah badan reklame kurang dari 6 meter.</span>
                    </p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">4.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Penyelenggaraan reklame harus pada media atau
                            sarana lainnya dengan komposisi yang tertib, teratur, rapi, indah serasi berdasarkan
                            nilai-nilai estetika dalam rangka menunjang kota.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">5.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> menetapkan lokasi dan tertentu
                            diperbolehkan atau dilarang penyelenggaraan reklame.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">6.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Pada lokasi milik Pemerintah Daerah dapat dilakukan
                            Penyelenggaraan lama 2 (dua) tahun.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">7.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Penyelenggaraan reklame dilarang menyelenggarakan reklame pada
                            :&nbsp;</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:12.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">a.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Lokasi milik Pemerintah.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:12.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">b.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> disekitar tempat pendidikan atau sarana pendidikan,
                            monument, situs sejarah dan tempat ibadah atau tempat- tertentu lainnya yang dilarang
                            menyelenggarakan reklame serta pada jarak tertentu yang ditetapkan Kota;</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                </td>
                <td colspan="2" style="width:12.6pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">c.</span></p>
                </td>
                <td colspan="11" style="width:467.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Lokasi yang berada diatas jalan umum, ketinggian pada
                            sisi terbawah badan kurang dari 6 meter.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="17" style="width:518.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td style="width:4.4pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td colspan="2" style="width:11.3pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">C.</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">&nbsp;</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">D.</span></strong></p>
                </td>
                <td colspan="14" style="width:496.95pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> ini tidak dikenakan biaya retribusi (Rp.0,-)
                            berdasarkan No.28 2009 tentang Pajak Daerah dan Retribusi Daerah</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">&nbsp;</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><strong><span
                                style="font-family:Arial;">Ketentuan Keamanan, Keserasian dan
                                Ketertiban.</span></strong></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">1.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Penyelenggaraan reklame atau Perusahaan Jasa Periklanan dan atau
                            Biro harus menyusun naskah reklamenya dalam Bahasa Indonesia atau Bahasa asing
                            baik dan benar.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">2.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Paapan nama, petunjuk, rentang dan naskah reklame
                            dapat menggunakan bahasa asing dan bahasa asing tersebut harus diterjemahkan dalam bahasa
                            Indonesia, ditulis pada bagian bawahnya dengan memakai latin.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">3.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;"> Asing yang dipakai sebaai nama perusahaan atau merek
                            dagang yang merupakan cabang dan merek dagang merupakan dan paten dari
                            luar negeri masih dapat dipergunakan.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">4.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Berdasarkan pertimbangan kesusilaandan ketertiban umum, Walikota
                            berwenang mencabut IPR.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">5.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Dalam hal yang berkaitan dengan keadaan memaksa dan mendesak yang
                            berakibat gangguan terhadap umum, Walikota berwenang mencabut IPR.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">6.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Setiap penyelenggaraan reklame berjalan secara tertib
                            teratur, rapi indah dan berdasarkan nilai-nilai estetika, sesuai dengan kota
                            serta tidak bertentangan dengan norma keagamaan, kesopanan, kesusilaan, kesehatan dan
                            ketentuan ketertiban umum.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">7.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Menempelkan tanda merk beserta nama, telepon
                            Perusahaan Jasa Periklanandan atau Biro reklame pembuat rangka atau penyelenggara reklame
                            yang bersangkutan.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">8.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Memelihara benda-benda dan alat-alat dipergunakan untuk
                            reklame agar keadaan baik.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">9.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Memelihara ada disekitar reklame agar selalu dalam
                            keadaan indah dan rapi.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">10.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Membongkar beserta rangka setelah
                            berakhirnya yang tidak diperpanjang berlakunya atau setelah IPR- paling
                            14 (empat belas) kalender sejak berakhirnya IPR-nya: dan</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">11.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Menanggung segala akibat yang merugiakan pihak lain atas
                            reklame dan Pendirian Media reklame.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">12.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Apabila Perusahaan Jasa dan Biro tidak
                            melaksanakan kewajiban, Walikota berhak mencabut IPR berikut membongkar reklame dan media
                            reklamenya.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:8.5pt;">
                <td colspan="3" style="width:18.5pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:11.25pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">13.</span></p>
                </td>
                <td colspan="13" style="width:482.9pt; padding-right:1.4pt; padding-left:1.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:8.5pt;"><span
                            style="font-family:Arial;">Penyelenggaraan reklame yang tidak menaati ketentuan Peraturan
                            daerah ini atau tidak memiliki IPR dan atau IMMR telah habis masa IPR dan atau
                            IMMR-nya, dilakukan penyegelan dan tanda khusus atau dilakukan pembongkaran media
                            reklame dan reklamenya oleh Walikota.</span></p>
                </td>
                <td style="vertical-align:top;"><br></td>
            </tr>
            <tr style="height:0pt;">
                <td style="width:7.2pt;"><br></td>
                <td style="width:10.8pt;"><br></td>
                <td style="width:3.3pt;"><br></td>
                <td style="width:14.05pt;"><br></td>
                <td style="width:1.3pt;"><br></td>
                <td style="width:14.1pt;"><br></td>
                <td style="width:5.4pt;"><br></td>
                <td style="width:11.8pt;"><br></td>
                <td style="width:13.05pt;"><br></td>
                <td style="width:0.5pt;"><br></td>
                <td style="width:14.65pt;"><br></td>
                <td style="width:17.05pt;"><br></td>
                <td style="width:7.2pt;"><br></td>
                <td style="width:55.1pt;"><br></td>
                <td style="width:7.2pt;"><br></td>
                <td style="width:105.65pt;"><br></td>
                <td style="width:232.7pt;"><br></td>
                <td style="width:8.85pt;"><br></td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial;">&nbsp;</span></p>
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