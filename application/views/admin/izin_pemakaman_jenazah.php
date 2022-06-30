<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/components/head.php');?>

</head>

<body id="page-top">
    <?php if ($this->session->flashdata('eror_acc')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('acc')){ ?>
    <script>
    swal({
        title: "Berhasil Diverifikasi!",
        text: "Status Pengajuan Berhasil Diubah!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('admin/components/sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin/components/navbar.php')?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Izin Pemakaman Jenazah</h1>

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
                                            <th>Foto Surat</th>
                                            <th>Aksi</th>
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
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#foto">
                                                            Foto <i class="nav-icon fas fa-file-image"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#setuju<?=$id_izin_pemakaman_jenazah?>">
                                                            Setuju <i class="nav-icon fas fa-check"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#tidak_setuju<?=$id_izin_pemakaman_jenazah?>"
                                                            class="btn btn-danger">Tolak <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#edit_izin_pemakaman_jenazah">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_izin_pemakaman_jenazah"
                                                            class="btn btn-danger">Delete <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit Masyarakat-->
                                        <div class="modal fade" id="ubah_masyarakat" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                            Masyarakat</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    name="username" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" class="form-control" id="password"
                                                                    name="password" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_lengkap" name="nama_lengkap" value=""
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_kk">Nomor KK</label>
                                                                <input type="text" class="form-control" id="no_kk"
                                                                    name="no_kk" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_ktp">Nomor KTP</label>
                                                                <input type="text" class="form-control" id="no_ktp"
                                                                    name="no_ktp" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option value="L">Laki-Laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="agama">Agama</label>
                                                                <input type="text" class="form-control" id="agama"
                                                                    name="agama" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_hp">No HP</label>
                                                                <input type="text" class="form-control" id="no_hp"
                                                                    name="no_hp" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <input type="text" class="form-control" id="alamat"
                                                                    name="alamat" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                                <input type="text" class="form-control"
                                                                    id="tempat_lahir" name="tempat_lahir" value=""
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggal_lahir" name="tanggal_lahir" value=""
                                                                    required>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Delete Masyarakat-->
                                        <div class="modal fade" id="delete_masyarakat" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Data
                                                            Masyarakat</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
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

                                        <!-- Modal Foto-->
                                        <div class="modal fade" id="foto" tabindex="-1"
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

                                                            <h2>Foto KTP Pemohon</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_ket_lap?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_ket_lap?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Sketsa Lokasi Reklame</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_pemeriksaan_jenazah?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_surat_pemeriksaan_jenazah?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Desain Reklame</h2>
                                                            <div class="row">

                                                                <a href="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_kk_alm?>"
                                                                    target="_blank">
                                                                    <img src="<?=base_url();?>assets/izin_pemakaman_jenazah/<?=$foto_kk_alm?>"
                                                                        width="100%" alt="">
                                                                </a>

                                                            </div>

                                                            <br>
                                                            <h2>Foto Bukti Lunas PBB Tahun Berjalan</h2>
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
                                        <!-- Modal Setuju Izin Media Reklame -->
                                        <div class="modal fade" id="setuju<?=$id_izin_pemakaman_jenazah?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Setujui Data
                                                            Izin Media Reklame
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="<?php echo base_url()?>Izin_Pemakaman_Jenazah/acc_izin_pemakaman_jenazah/2"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_pemakaman_jenazah"
                                                                        value="<?php echo $id_izin_pemakaman_jenazah?>" />

                                                                    <p>Apakah kamu yakin ingin Menyetujui Izin Media
                                                                        Reklame
                                                                        ini?</i></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger ripple"
                                                                    data-dismiss="modal">Tidak</button>
                                                                <button type="submit"
                                                                    class="btn btn-success ripple save-category">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Modal Tidak Setuju Izin Media Reklame -->
                                        <div class="modal fade" id="tidak_setuju<?=$id_izin_pemakaman_jenazah?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tolak Data
                                                            Izin Media Reklame
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="<?php echo base_url()?>Izin_Pemakaman_Jenazah/acc_izin_pemakaman_jenazah/3"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_pemakaman_jenazah"
                                                                        value="<?php echo $id_izin_pemakaman_jenazah?>" />

                                                                    <p>Apakah kamu yakin ingin Menolak Izin Domisili
                                                                        Usaha
                                                                        ini?</i></b></p>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger ripple"
                                                                    data-dismiss="modal">Tidak</button>
                                                                <button type="submit"
                                                                    class="btn btn-success ripple save-category">Ya</button>
                                                            </div>
                                                        </form>
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



    <?php $this->load->view('admin/components/js.php');?>

</body>

</html>