<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('kepala_kasi/components/head.php');?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('kepala_kasi/components/sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('kepala_kasi/components/navbar.php')?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Izin Pemakaman Jenazah</h1>
                    <a class="btn btn-primary" href="">
                        Cetak Laporan <i class="fas fa-print"></i>
                    </a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Izin Pemakaman Jenazah</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>Tanggal Ditetapkan</th>
                                            <th>Nama Almarhum</th>
                                            <th>Umur Almarhum</th>
                                            <th>Agama Almarhum</th>
                                            <th>NIK Almarhum</th>
                                            <th>Tanggal Meninggal</th>
                                            <th>Tanggal Dikubur</th>
                                            <th>Blok/Petak</th>
                                            <th>Jenis_Pemakaman</th>
                                            <th>Status Surat</th>
                                            <th>Cetak</th>
                                            <th>Foto Surat</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $id = 0;
                                            foreach($izin_pemakaman_jenazah as $i)
                                            :
                                            $id++;
                                            $id_izin_pemakaman_jenazah = $i['id_izin_pemakaman_jenazah'];
                                            $nomor_surat = $i['nomor_surat'];
                                            $tanggal_ditetapkan = $i['tanggal_ditetapkan'];
                                            $nama_alm = $i['nama_alm'];
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
                                        <tr>
                                            <td><?=$id?></td>
                                            <td><?=$nomor_surat?></td>
                                            <td><?=$tanggal_ditetapkan?></td>
                                            <td><?=$nama_alm?></td>
                                            <td><?=$umur_alm?></td>
                                            <td><?=$agama_alm?></td>
                                            <td><?=$nik_alm?></td>
                                            <td><?=$tanggal_meninggal?></td>
                                            <td><?=$tanggal_kubur?></td>
                                            <td><?=$blok_petak?></td>
                                            <td><?=$jenis_pemakaman?></td>
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
                                                <?php if($id_status_verifikasi_surat == 2) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="<?=base_url();?>Cetak/surat_izin_pemakaman_jenazah/<?=$id_izin_pemakaman_jenazah?>"
                                                            class="btn btn-success" target="_blank">
                                                            Cetak
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }else {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-danger">
                                                            Belum dapat mencetak
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }?>
                                            </td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto<?=$id_izin_pemakaman_jenazah?>">
                                                            Foto <i class="nav-icon fas fa-file-image"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>



                                        <!-- Modal Foto-->
                                        <div class="modal fade" id="foto<?=$id_izin_pemakaman_jenazah?>" tabindex="-1"
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

                                                            <h2>Foto Surat Ket. Lap kematian</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_ket_lap?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_ket_lap?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Surat keterangan Pemeriksaan
                                                                Jenazah</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_pemeriksaan_jenazah?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_pemeriksaan_jenazah?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto KK Almarhum</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_kk_alm?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_kk_alm?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Surat Rekomendari Dari Dinas
                                                                PUPR</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_rekomendasi_dinas_pupr?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_rekomendasi_dinas_pupr?>"
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



    <?php $this->load->view('kepala_kasi/components/js.php');?>

</body>

</html>