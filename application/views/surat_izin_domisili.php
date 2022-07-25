<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin Domisili</title>
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
                                            $id_izin_domisili = $i['id_izin_domisili'];
                                            $id_user = $i['id_user'];
                                            $nomor_surat = $i['nomor_surat'];
                                            $nama_usaha = $i['nama_usaha'];
                                            $tanggal_lahir = $i['tanggal_lahir'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $alamat_usaha = $i['alamat_usaha'];
                                            $alamat = $i['alamat'];
                                            $kegiatan_usaha = $i['kegiatan_usaha'];
                                            $berlaku_awal = $i['berlaku_awal'];
                                            $berlaku_akhir = $i['berlaku_akhir'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $foto_ktp = $i['foto_ktp'];
                                            $foto_akta_usaha = $i['foto_akta_usaha'];
                                            $foto_pengantar_lurah_setempat = $i['foto_pengantar_lurah_setempat'];
                                            $foto_bukti_lunas_pbb = $i['foto_bukti_lunas_pbb'];
                                            $id_status_verifikasi_surat = $i['id_status_verifikasi_surat'];
                                            
                                            
                                          

                                            ?>
    <table
        style="height: 92px; margin-left: auto; margin-right: auto; width: 200px; border: none; background-color: white;">
        <tr>
            <img style="margin-top:-10px; margin-right:-100px;  margin-left:-80px;"
                src="<?=base_url();?>assets/logo.jpeg" alt="" height="95" />
            <td style="width: 470px; text-align: center; height: 113.575px; border: none;">
                <h2 style="text-align: center; margin-bottom:-15px; margin-top:-15px;">PEMERINTAH KOTA PALEMBANG</h2>
                <h3 style="text-align: center; margin-bottom:-15px;">KECAMATAN ILIR BARAT SATU</h3>
                <p style="text-align: center; margin-bottom:-15px;"><strong>Jalan Padang Selasa Kelurahan
                        Bukit</strong><strong>l</strong><strong>ama
                        Telpon
                        (0711) - 350572</strong></p>
                <p style="text-align: center;  margin-bottom:-40px;"><strong>P A L E M B A N G</strong></p>

                <p style="text-align: center;">&nbsp;</p>
            </td>
        </tr>
    </table>

    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span
            style="height:0pt; text-align:left; display:block; position:absolute; z-index:1;"><img
                src="https://myfiles.space/user_files/124457_b80c96004754aa79/1656860832_surat-izin-penyediaan-media-reklame/1656860832_surat-izin-penyediaan-media-reklame-2.png"
                width="665" height="6" alt=""
                style="margin: 0 0 0 auto; text-align: right; display: block; "></span><strong>&nbsp;</strong>
    </p>
    <p style="text-align: center;"><strong><u>SURAT KETERAN</u></strong><strong><u>GAN DOMISILI PERUSAHAAN</u></strong>
    </p>
    <p style="text-align: center; ">Nomor : <?=$nomor_surat?></p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nama&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp;:<strong> RAKHMAN HIDAYAT PANE, S.STP</strong></p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Jabatan&nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp;&nbsp; : Camat Ilir Barat Satu Kota Palembang</p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;Berdasarkan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        : Surat Pengantar Lurah Demang-Lebar daun Kecamatan
        Ilir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Barat Satu Kota Palembang No.
        510/05/DLD/2022&nbsp;
    </p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Tanggal 11 Januari 2022</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dengan ini menerangkan bahwa :</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nama / NIK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; <?=$nama_lengkap?>
    </p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tempat / Tanggal Lahir&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; :&nbsp; <?=$tempat_lahir?> / <?=tgl_indo($tanggal_lahir)?></p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Alamat Pemilik Usaha&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp;
        &nbsp; : &nbsp; <?=$alamat?></p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Memang benar yang bersangkutan pada
        saat
        ini membuka / mempunyai
        usaha dan berdomisili
    </p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sebagaimana tersebut dibawah
        ini :</p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nama
        Usaha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp; <?=$nama_usaha?></p>

    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Alamat
        Usaha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp; <?=$alamat_usaha?></p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kegiatan
        Usaha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        :&nbsp;<?=$kegiatan_usaha?></p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Demikian Surat Keterangan ini dibuat
        dengan sebenarnya untuk dipergunakan sebagaimana</p>
    <p style="margin-bottom:-12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mestinya.</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Masa Berlaku : <?=tgl_indo($berlaku_awal)?> s/d <?=tgl_indo($berlaku_akhir)?></strong></p>
    <p style="margin-bottom:-12px;">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Palembang, <?=tgl_indo($berlaku_awal)?></p>
   
    <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </strong></p>
    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?=base_url();?>assets/sb_admin/img/ttd.jpeg" alt="" height="170" style="margin-right:50px">
   
    <?php endforeach; ?>
</body>

</html>