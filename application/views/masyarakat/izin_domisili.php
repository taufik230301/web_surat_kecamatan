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
                    <h1 class="h3 mb-2 text-gray-800">Data Izin Domisili</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Izin Domisili</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Nama Usaha</th>
                                            <th>Alamat Usaha</th>
                                            <th>Kegiatan Usaha</th>
                                            <th>Awal Berlaku</th>
                                            <th>Akhir Berlaku</th>
                                            <th>Nama Pengaju</th>
                                            <th>Status Surat</th>
                                            <th>Foto Surat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $id = 0;
                                            foreach($izin_domisili as $i)
                                            :
                                            $id++;
                                            $id_izin_domisili = $i['id_izin_domisili'];
                                            $nomor_surat = $i['nomor_surat'];
                                            $nama_usaha = $i['nama_usaha'];
                                            $alamat_usaha = $i['alamat_usaha'];
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
                                        <tr>
                                            <td><?=$id?></td>
                                            <td><?=$nomor_surat?></td>
                                            <td><?=$nama_usaha?></td>
                                            <td><?=$alamat_usaha?></td>
                                            <td><?=$kegiatan_usaha?></td>
                                            <td><?=$berlaku_awal?></td>
                                            <td><?=$berlaku_akhir?></td>
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
                                                <?php }?></td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto<?=$id_izin_domisili?>">
                                                            Foto <i class="nav-icon fas fa-file-image"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#edit_izin_domisili">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_izin_domisili"
                                                            class="btn btn-danger">Delete <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                        <!-- Modal Foto-->
                                        <div class="modal fade" id="foto<?=$id_izin_domisili?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                            <h2>Foto KTP</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_domisili/<?=$foto_ktp?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_domisili/<?=$foto_ktp?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Pendirian Akta Usaha</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_domisili/<?=$foto_akta_usaha?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_domisili/<?=$foto_akta_usaha?>"
                                                                        width="100%" alt="">
                                                                </a>
                                                            </div>
                                                            <br>
                                                            <h2>Foto Pengantar Lurah Setempat</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_domisili/<?=$foto_pengantar_lurah_setempat?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_domisili/<?=$foto_pengantar_lurah_setempat?>"
                                                                        width="100%" alt="">
                                                                </a>
                                                            </div>
                                                            <br>
                                                            <h2>Foto Bukti Lunas PBB Tahun Bejalan</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_domisili/<?=$foto_bukti_lunas_pbb?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_domisili/<?=$foto_bukti_lunas_pbb?>"
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