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

    error_foto_akta_usaha

    <?php if ($this->session->flashdata('error_foto_akta_usaha')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Format File Yang Dimasukan Salah !",
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
                    <h1 class="h3 mb-2 text-gray-800">Data Izin Domisili Usaha</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Izin Domisili Usaha</h6>
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
                                            <th>Nama Lengkap</th>
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
                                            $id_user = $i['id_user'];
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
                                                            data-target="#setuju<?=$id_izin_domisili?>">
                                                            Setuju <i class="nav-icon fas fa-check"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#tidak_setuju<?=$id_izin_domisili?>"
                                                            class="btn btn-danger">Tolak <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#edit_izin_domisili<?=$id_izin_domisili?>">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_izin_domisili<?=$id_izin_domisili?>"
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Setuju Izin Domisili Usaha -->
                                        <div class="modal fade" id="setuju<?= $id_izin_domisili ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Setujui Data
                                                            Izin Domisili Usaha
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="<?php echo base_url()?>Izin_Domisili/acc_izin_domisili_admin/2"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_izin_domisili"
                                                                        value="<?php echo $id_izin_domisili?>" />

                                                                    <p>Apakah kamu yakin ingin Menyetujui Izin Domisili
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

                                        <!-- Modal Tidak Setuju Izin Domisili Usaha -->
                                        <div class="modal fade" id="tidak_setuju<?= $id_izin_domisili ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tolak Data
                                                            Izin Domisili Usaha
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="<?php echo base_url()?>Izin_Domisili/acc_izin_domisili_admin/3"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_izin_domisili"
                                                                        value="<?php echo $id_izin_domisili?>" />

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

                                        <!-- Modal Tidak Setuju Izin Domisili Usaha -->
                                        <div class="modal fade" id="edit_izin_domisili<?= $id_izin_domisili ?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                            Izin Domisili Usaha
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="<?=base_url();?>Izin_Domisili/edit_izin_domisili_admin"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="text" name="id_izin_domisili"
                                                                value="<?=$id_izin_domisili?>" hidden>
                                                            <div class="form-group">
                                                                <label for="nomor_surat">Nomor Surat</label>
                                                                <input type="text" class="form-control" id="nomor_surat"
                                                                    name="nomor_surat" value="<?=$nomor_surat?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_usaha">Nama Usaha</label>
                                                                <input type="text" class="form-control" id="nama_usaha"
                                                                    name="nama_usaha" value="<?=$nama_usaha?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat_usaha">Alamat Usaha</label>
                                                                <input type="text" class="form-control"
                                                                    id="alamat_usaha" name="alamat_usaha"
                                                                    value="<?=$alamat_usaha?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kegiatan_usaha">Kegiatan Usaha</label>
                                                                <input type="text" class="form-control"
                                                                    id="kegiatan_usaha" name="kegiatan_usaha"
                                                                    value="<?=$kegiatan_usaha?>" required>
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
                                                                <label for="foto_ktp">Foto KTP</label>
                                                                <input type="file" class="form-control" id="foto_ktp"
                                                                    name="foto_ktp">
                                                                <input type="text" class="form-control"
                                                                    id="foto_ktp_old" name="foto_ktp_old"
                                                                    value="<?=$foto_ktp?>" hidden>
                                                                <small id="foto_ktp_old"
                                                                    class="form-text text-muted">Format
                                                                    PNG/JPG/JPEG (Max
                                                                    2MB)</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_akta_usaha">Foto Pendirian Akta
                                                                    Usaha</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_akta_usaha" name="foto_akta_usaha"
                                                                    >
                                                                <input type="text" class="form-control"
                                                                    id="foto_akta_usaha_old" name="foto_akta_usaha_old"
                                                                    value="<?=$foto_akta_usaha?>" value="<?=$foto_akta_usaha?>" hidden>
                                                                <small id="foto_akta_usaha_old"
                                                                    class="form-text text-muted">Format
                                                                    PNG/JPG/JPEG (Max
                                                                    2MB)</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_pengantar_lurah_setempat">Foto
                                                                    Pengantar Lurah Setempat</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_pengantar_lurah_setempat"
                                                                    name="foto_pengantar_lurah_setempat" >
                                                                <input type="text" class="form-control"
                                                                    id="foto_pengantar_lurah_setempat_old"
                                                                    name="foto_pengantar_lurah_setempat_old" value="<?=$foto_pengantar_lurah_setempat?>" hidden>
                                                                <small id="foto_pengantar_lurah_setempat_old"
                                                                    class="form-text text-muted">Format
                                                                    PNG/JPG/JPEG (Max
                                                                    2MB)</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_bukti_lunas_pbb">Foto Bukti Lunas PBB
                                                                    Tahun Bejalan</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_bukti_lunas_pbb"
                                                                    name="foto_bukti_lunas_pbb" >
                                                                <input type="text" class="form-control"
                                                                    id="foto_bukti_lunas_pbb_old"
                                                                    name="foto_bukti_lunas_pbb_old" value="<?=$foto_bukti_lunas_pbb?>" hidden>
                                                                <small id="foto_bukti_lunas_pbb_old"
                                                                    class="form-text text-muted">Format
                                                                    PNG/JPG/JPEG (Max
                                                                    2MB)</small>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
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