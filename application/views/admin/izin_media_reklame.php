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
    <?php if ($this->session->flashdata('eror_update')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('update')){ ?>
    <script>
    swal({
        title: "Berhasil Update!",
        text: "Data Izin Domisili Berhasil di Update!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('error_foto_bukti_lunas_pbb')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_desain')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_sketsa_lokasi')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_ktp_pemohon')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_delete')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('delete')){ ?>
    <script>
    swal({
        title: "Berhasil Delete!",
        text: "Data Izin Domisili Berhasil di Delete!",
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
                                            <th>Aksi</th>
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
                                                            data-target="#setuju<?=$id_izin_penyediaan_media_reklame?>">
                                                            Setuju <i class="nav-icon fas fa-check"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#tidak_setuju<?=$id_izin_penyediaan_media_reklame?>"
                                                            class="btn btn-danger">Tolak <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#edit_izin_media_reklame<?=$id_izin_penyediaan_media_reklame?>">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_izin_media_reklame<?=$id_izin_penyediaan_media_reklame?>"
                                                            class="btn btn-danger">Delete <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($id_status_verifikasi_surat == 2) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="<?=base_url();?>Cetak/surat_izin_media_reklame/<?=$id_izin_penyediaan_media_reklame?>" target="_blank" class="btn btn-success">
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
                                        </tr>

                                        <!-- Modal Edit Masyarakat-->
                                        <div class="modal fade"
                                            id="edit_izin_media_reklame<?=$id_izin_penyediaan_media_reklame?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                            Izin Media Reklame</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="<?=base_url();?>Izin_Media_Reklame/ubah_izin_media_reklame"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="text"
                                                                value="<?=$id_izin_penyediaan_media_reklame?>"
                                                                name="id_izin_penyediaan_media_reklame" hidden>
                                                            <div class="form-group">
                                                                <label for="nomor_surat">Nomor Surat</label>
                                                                <input type="text" class="form-control" id="nomor_surat"
                                                                    name="nomor_surat" value="<?=$nomor_surat?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="berlaku_awal">Berlaku Awal</label>
                                                                <input type="date" class="form-control"
                                                                    id="berlaku_awal" name="berlaku_awal"
                                                                    value="<?=$berlaku_awal?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="berlaku_akhir">Berlaku Akhir</label>
                                                                <input type="date" class="form-control"
                                                                    id="berlaku_akhir" name="berlaku_akhir"
                                                                    value="<?=$berlaku_akhir?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_reklame">Jenis Reklame</label>
                                                                <input type="text" class="form-control"
                                                                    id="jenis_reklame" name="jenis_reklame"
                                                                    value="<?=$jenis_reklame?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="merk">Merk</label>
                                                                <input type="text" class="form-control" id="merk"
                                                                    name="merk" value="<?=$merk?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jumlah">Jumlah</label>
                                                                <input type="number" class="form-control" id="jumlah"
                                                                    name="jumlah" value="<?=$jumlah?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ukuran">Ukuran</label>
                                                                <input type="number" class="form-control" id="ukuran"
                                                                    name="ukuran" value="<?=$ukuran?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="lokasi_reklame">Lokasi Reklame</label>
                                                                <input type="text" class="form-control"
                                                                    id="lokasi_reklame" name="lokasi_reklame"
                                                                    value="<?=$lokasi_reklame?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_ktp_pemohon">Foto KTP Pemohon</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_ktp_pemohon" name="foto_ktp_pemohon"
                                                                    value="">
                                                                <input type="text" class="form-control"
                                                                    id="foto_ktp_pemohon_old"
                                                                    name="foto_ktp_pemohon_old"
                                                                    value="<?=$foto_ktp_pemohon?>" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_sketsa_lokasi">Foto Sketsa Lokasi
                                                                    Reklame</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_sketsa_lokasi" name="foto_sketsa_lokasi"
                                                                    value="">
                                                                <input type="text" class="form-control"
                                                                    id="foto_sketsa_lokasi_old"
                                                                    name="foto_sketsa_lokasi_old"
                                                                    value="<?=$foto_sketsa_lokasi?>" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_desain">Foto Desain Reklame</label>
                                                                <input type="file" class="form-control" id="foto_desain"
                                                                    name="foto_desain" value="">
                                                                <input type="text" class="form-control"
                                                                    id="foto_desain_old" name="foto_desain_old"
                                                                    value="<?=$foto_desain?>" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_bukti_lunas_pbb">Foto Bukti Lunas PBB
                                                                    Tahun Berjalan</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_bukti_lunas_pbb"
                                                                    name="foto_bukti_lunas_pbb" value="">
                                                                <input type="text" class="form-control"
                                                                    id="foto_bukti_lunas_pbb_old"
                                                                    name="foto_bukti_lunas_pbb_old"
                                                                    value="<?=$foto_bukti_lunas_pbb?>" hidden>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Delete Izin Media Reklame-->
                                        <div class="modal fade"
                                            id="delete_izin_media_reklame<?=$id_izin_penyediaan_media_reklame?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Data
                                                            Izin Media Reklame</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="<?= base_url();?>Izin_Media_Reklame/delete_izin_media_reklame_admin"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_penyediaan_media_reklame"
                                                                        value="<?php echo $id_izin_penyediaan_media_reklame?>" />
                                                                    <input type="hidden" name="foto_ktp_pemohon_old"
                                                                        value="<?=$foto_ktp_pemohon?>" hidden>
                                                                    <input type="hidden" name="foto_sketsa_lokasi_old"
                                                                        value="<?=$foto_sketsa_lokasi?>" hidden>
                                                                    <input type="hidden" name="foto_desain_old"
                                                                        value="<?=$foto_desain?>" hidden>
                                                                    <input type="hidden" name="foto_bukti_lunas_pbb_old"
                                                                        value="<?=$foto_bukti_lunas_pbb?>" hidden>

                                                                    <p>Apakah kamu yakin ingin menghapus data
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
                                        <!-- Modal Setuju Izin Media Reklame -->
                                        <div class="modal fade" id="setuju<?= $id_izin_penyediaan_media_reklame ?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            action="<?php echo base_url()?>Izin_Media_Reklame/acc_izin_media_reklame/2"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_penyediaan_media_reklame"
                                                                        value="<?php echo $id_izin_penyediaan_media_reklame?>" />

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
                                        <div class="modal fade"
                                            id="tidak_setuju<?= $id_izin_penyediaan_media_reklame ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            action="<?php echo base_url()?>Izin_Media_Reklame/acc_izin_media_reklame/3"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_penyediaan_media_reklame"
                                                                        value="<?php echo $id_izin_penyediaan_media_reklame?>" />

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