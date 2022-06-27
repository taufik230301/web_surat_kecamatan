<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('admin/components/head.php');?>

</head>

<body id="page-top">

    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Input!",
        text: "Data Berhasil Masukan!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil edit!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Berhasil hapus!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_hapus')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
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
                    <h1 class="h3 mb-2 text-gray-800">Data Masyarakat</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_masyarakat">
                        Tambah Masyarakat
                    </button>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">masyarakat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>No Kartu Keluarga</th>
                                            <th>No KTP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Verifikasi</th>
                                            <th>Tanggal Register</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            $id = 0;
                                            foreach($masyarakat as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $password = $i['password'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $no_kk = $i['no_kk'];
                                            $no_ktp = $i['no_ktp'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $agama = $i['agama'];
                                            $no_hp = $i['no_hp'];
                                            $alamat = $i['alamat'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $tanggal_lahir = $i['tanggal_lahir'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $tanggal_registered = $i['tanggal_registered'];
                                          

                                            ?>
                                        <tr>
                                            <td><?=$id?></td>
                                            <td><?=$nama_lengkap?></td>
                                            <td><?=$no_kk?></td>
                                            <td><?=$no_ktp?></td>
                                            <td><?=$jenis_kelamin?></td>
                                            <td><?=$agama?></td>
                                            <td><?=$no_hp?></td>
                                            <td><?=$alamat?></td>
                                            <td><?=$tempat_lahir?></td>
                                            <td><?=$tanggal_lahir?></td>
                                            <td><?php if($id_status_verifikasi == 1){ ?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-danger">
                                                            Belum Diverifikasi
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }elseif($id_status_verifikasi == 2) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-warning">
                                                            Menunggu Konfirmasi
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }elseif($id_status_verifikasi == 3) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-success">
                                                            Verifikasi Diterima
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }elseif($id_status_verifikasi == 4) {?>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-danger">
                                                            Verifikasi Ditolak
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php }?></td>

                                            <td><?=$tanggal_registered?></td>
                                            <td>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#ubah_masyarakat<?=$id_user?>">
                                                            Edit <i class="nav-icon fas fa-edit"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-toggle="modal"
                                                            data-target="#delete_masyarakat<?=$id_user?>"
                                                            class="btn btn-danger">Hapus <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit Masyarakat-->
                                        <div class="modal fade" id="ubah_masyarakat<?=$id_user?>" tabindex="-1"
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
                                                        <form action="<?=base_url();?>Masyarakat/ubah_masyarakat_admin"
                                                            method="POST">
                                                            <input type="text" name="id_user" value="<?=$id_user?>"
                                                                hidden>
                                                            <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" class="form-control" id="username"
                                                                    name="username" value="<?=$username?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" value="<?=$email?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="text" class="form-control" id="password"
                                                                    name="password" value="<?=$password?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama_lengkap" name="nama_lengkap"
                                                                    value="<?=$nama_lengkap?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_kk">Nomor KK</label>
                                                                <input type="text" class="form-control" id="no_kk"
                                                                    name="no_kk" value="<?=$no_kk?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_ktp">Nomor KTP</label>
                                                                <input type="text" class="form-control" id="no_ktp"
                                                                    name="no_ktp" value="<?=$no_ktp?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                <select class="form-control" id="jenis_kelamin"
                                                                    name="jenis_kelamin">
                                                                    <option value="L" <?php  if($jenis_kelamin == 'L'){
                                                                                            echo 'selected';
                                                                                        }else{
                                                                                            echo '';
                                                                                        }  ?>>Laki-Laki</option>
                                                                    <option value="P" <?php  if($jenis_kelamin == 'P'){
                                                                                            echo 'selected';
                                                                                        }else{
                                                                                            echo '';
                                                                                        }  ?>>Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="agama">Agama</label>
                                                                <input type="text" class="form-control" id="agama"
                                                                    name="agama" value="<?=$agama?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_hp">No HP</label>
                                                                <input type="text" class="form-control" id="no_hp"
                                                                    name="no_hp" value="<?=$no_hp?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <input type="text" class="form-control" id="alamat"
                                                                    name="alamat" value="<?=$alamat?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                                <input type="text" class="form-control"
                                                                    id="tempat_lahir" name="tempat_lahir"
                                                                    value="<?=$tempat_lahir?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                <input type="date" class="form-control"
                                                                    id="tanggal_lahir" name="tanggal_lahir"
                                                                    value="<?=$tanggal_lahir?>" required>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Delete Masyarakat-->
                                        <div class="modal fade" id="delete_masyarakat<?=$id_user?>" tabindex="-1"
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
                                                        <form action="<?= base_url();?>Masyarakat/hapus_masyarakat"
                                                            method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id_user"
                                                                        value="<?php echo $id_user?>" hidden>

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
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal Tambah Masyarakat-->
            <div class="modal fade" id="tambah_masyarakat" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Masyarakat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=base_url();?>Masyarakat/tambah_masyarakat_admin" method="POST">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_kk">Nomor KK</label>
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">Nomor KTP</label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





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