<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('masyarakat/components/head.php');?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('masyarakat/components/sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('masyarakat/components/navbar.php')?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Izin Media Reklame</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Izin Media Reklame</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Berlaku Awal</th>
                                            <th>Berlaku Akhir</th>
                                            <th>Jenis Reklame</th>
                                            <th>Merk</th>
                                            <th>Jumlah</th>
                                            <th>Ukuran</th>
                                            <th>Lokasi Reklame</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status Surat</th>
                                            <th>Foto Surat</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $id = 0;
                                            foreach($izin_media_reklame as $i)
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
                                            $foto_ktp_pemohon = $i['foto_ktp_pemohon'];
                                            $foto_sketsa_lokasi = $i['foto_sketsa_lokasi'];
                                            $foto_desain = $i['foto_desain'];
                                            $foto_bukti_lunas_pbb = $i['foto_bukti_lunas_pbb'];
                                            $id_status_verifikasi_surat = $i['id_status_verifikasi_surat'];
                                            
                                            
                                          

                                            ?>
                                        <tr>
                                            <td><?=$id?></td>
                                            <td><?=$nomor_surat?></td>
                                            <td><?=$berlaku_awal?></td>
                                            <td><?=$berlaku_akhir?></td>
                                            <td><?=$jenis_reklame?></td>
                                            <td><?=$merk?></td>
                                            <td><?=$jumlah?></td>
                                            <td><?=$ukuran?></td>
                                            <td><?=$lokasi_reklame?></td>
                                            <td><?=$nama_lengkap?></td>
                                            <td>

                                                <?php if($id_status_verifikasi_surat == 1) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-warning">
                                                            Menunggu Konfirmasi
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }elseif($id_status_verifikasi_surat == 2) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-success">
                                                            Pengajuan Surat Di Terima
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }elseif($id_status_verifikasi_surat == 3) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-danger">
                                                            Pengajuan Surat Ditolak
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto<?=$id_izin_penyediaan_media_reklame?>">
                                                            Foto <i class="nav-icon fas fa-file-image"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- Modal Foto-->
                                        <div class="modal fade" id="foto<?=$id_izin_penyediaan_media_reklame?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col">

                                                            <h2>Foto KTP Pemohon</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_media_reklame/<?=$foto_ktp_pemohon?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_media_reklame/<?=$foto_ktp_pemohon?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Sketsa Lokasi Reklame</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_media_reklame/<?=$foto_sketsa_lokasi?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_media_reklame/<?=$foto_sketsa_lokasi?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Desain Reklame</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_media_reklame/<?=$foto_desain?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_media_reklame/<?=$foto_desain?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Bukti Lunas PBB Tahun Berjalan</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_media_reklame/<?=$foto_bukti_lunas_pbb?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_media_reklame/<?=$foto_bukti_lunas_pbb?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->









        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <?php $this->load->view('masyarakat/components/js.php');?>

</body>

</html>