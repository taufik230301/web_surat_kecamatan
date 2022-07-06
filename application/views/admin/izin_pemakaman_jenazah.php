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
    <?php if ($this->session->flashdata('error_foto_surat_rekomendasi_dinas_pupr')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_kk_alm')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_surat_pemeriksaan_jenazah')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_foto_surat_ket_lap')){ ?>
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
                                                            data-target="#foto<?=$id_izin_pemakaman_jenazah?>">
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
                                                            data-target="#edit_izin_pemakaman_jenazah<?=$id_izin_pemakaman_jenazah?>">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_izin_pemakaman_jenazah<?=$id_izin_pemakaman_jenazah?>"
                                                            class="btn btn-danger">Delete <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($id_status_verifikasi_surat == 2) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="<?=base_url();?>Cetak/surat_izin_pemakaman_jenazah/<?=id_izin_pemakaman_jenazah?>" target="_blank" class="btn btn-success">
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

                                        Modal Edit Masyarakat
                                        <div class="modal fade"
                                            id="edit_izin_pemakaman_jenazah<?=$id_izin_pemakaman_jenazah?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <form
                                                            action="<?=base_url();?>Izin_Pemakaman_Jenazah/ubah_izin_pemakaman_jenazah"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="text" value="<?=$id_izin_pemakaman_jenazah?>"
                                                                name="id_izin_pemakaman_jenazah" hidden>
                                                            <div class="form-group">
                                                                <label for="nomor_surat">Nomor Surat</label>
                                                                <input type="text" class="form-control" id="nomor_surat"
                                                                    name="nomor_surat" value="<?=$nomor_surat?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_ditetapkan">Tanggal
                                                                    Ditetapkan</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggal_ditetapkan" name="tanggal_ditetapkan"
                                                                    value="<?=$tanggal_ditetapkan?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_alm">Nama Almarhum</label>
                                                                <input type="text" class="form-control" id="nama_alm"
                                                                    name="nama_alm" value="<?=$nama_alm?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="umur_alm">Umur Almarhum</label>
                                                                <input type="text" class="form-control" id="umur_alm"
                                                                    name="umur_alm" value="<?=$umur_alm?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="agama_alm">Agama Almarhum</label>
                                                                <input type="text" class="form-control" id="agama_alm"
                                                                    name="agama_alm" value="<?=$agama_alm?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nik_alm">Nomor Induk Kependudukan</label>
                                                                <input type="text" class="form-control" id="nik_alm"
                                                                    name="nik_alm" value="<?=$nik_alm?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_meninggal">Tanggal Meninggal</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggal_meninggal" name="tanggal_meninggal"
                                                                    value="<?=$tanggal_meninggal?>
                                                                    required>
                                                            </div>
                                                            <div class=" form-group">
                                                                <label for="tanggal_kubur">Tanggal Kubur</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggal_kubur" name="tanggal_kubur"
                                                                    value="<?=$tanggal_kubur?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="blok_petak">Blok/Peta</label>
                                                                <input type="text" class="form-control" id="blok_petak"
                                                                    name="blok_petak" value="<?=$blok_petak?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_pemakaman">Jenis Pemakaman</label>
                                                                <input type="text" class="form-control"
                                                                    id="jenis_pemakaman" value="<?=$jenis_pemakaman?>"
                                                                    name="jenis_pemakaman" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_surat_ket_lap">Foto Surat Ket. Lap
                                                                    kematian</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_surat_ket_lap" name="foto_surat_ket_lap">
                                                                <input type="text" class="form-control"
                                                                    id="foto_surat_ket_lap_old"
                                                                    name="foto_surat_ket_lap_old"
                                                                    value="<?=$foto_surat_ket_lap?>" hidden>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_surat_pemeriksaan_jenazah">Foto Surat
                                                                    keterangan Pemeriksaan
                                                                    Jenazah</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_surat_pemeriksaan_jenazah"
                                                                    name="foto_surat_pemeriksaan_jenazah">
                                                                <input type="text" class="form-control"
                                                                    id="foto_surat_pemeriksaan_jenazah_old"
                                                                    name="foto_surat_pemeriksaan_jenazah_old"
                                                                    value="<?=$foto_surat_pemeriksaan_jenazah?>" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_kk_alm">Foto KK Almarhum</label>
                                                                <input type="file" class="form-control" id="foto_kk_alm"
                                                                    name="foto_kk_alm">
                                                                <input type="text" class="form-control"
                                                                    id="foto_kk_alm_old" name="foto_kk_alm_old"
                                                                    value="<?=$foto_kk_alm?>" hidden>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_surat_rekomendasi_dinas_pupr">Foto
                                                                    Surat Rekomendari Dari Dinas
                                                                    PUPR</label>
                                                                <input type="file" class="form-control"
                                                                    id="foto_surat_rekomendasi_dinas_pupr"
                                                                    name="foto_surat_rekomendasi_dinas_pupr">
                                                                <input type="text" class="form-control"
                                                                    id="foto_surat_rekomendasi_dinas_pupr_old"
                                                                    name="foto_surat_rekomendasi_dinas_pupr_old"
                                                                    value="<?=$foto_surat_rekomendasi_dinas_pupr?>"
                                                                    hidden>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Delete Masyarakat-->
                                        <div class="modal fade"
                                            id="delete_izin_pemakaman_jenazah<?=$id_izin_pemakaman_jenazah?>"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Izin
                                                            Pemakaman Jenazah</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="<?= base_url();?>Izin_Pemakaman_Jenazah/delete_izin_pemakaman_jenazah"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden"
                                                                        name="id_izin_pemakaman_jenazah"
                                                                        value="<?php echo $id_izin_pemakaman_jenazah?>" />
                                                                    <input type="hidden" name="foto_surat_ket_lap_old"
                                                                        value="<?=$foto_surat_ket_lap?>" hidden>
                                                                    <input type="hidden"
                                                                        name="foto_surat_pemeriksaan_jenazah_old"
                                                                        value="<?=$foto_surat_pemeriksaan_jenazah?>"
                                                                        hidden>
                                                                    <input type="hidden" name="foto_kk_alm_old"
                                                                        value="<?=$foto_kk_alm?>" hidden>
                                                                    <input type="hidden"
                                                                        name="foto_surat_rekomendasi_dinas_pupr_old"
                                                                        value="<?=$foto_surat_rekomendasi_dinas_pupr?>"
                                                                        hidden>

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