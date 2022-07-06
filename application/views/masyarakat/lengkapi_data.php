<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('masyarakat/components/head.php');?>

</head>

<body id="page-top">
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
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lengkapi Data</h1>
                    <form action="<?=base_url();?>Lengkapi_Data/lengkapi_data" method="POST">
                        <input type="text" name="id_user" value="<?=$id_user?>" hidden>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?=$username?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?=$email?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password" value="<?=$password?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                value="<?=$nama_lengkap?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no_kk">Nomor KK</label>
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="<?=$no_kk?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?=$no_ktp?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
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
                            <input type="text" class="form-control" id="agama" name="agama" value="<?=$agama?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$no_hp?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$alamat?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                value="<?=$tempat_lahir?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="<?=$tanggal_lahir?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php endforeach;?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->




            <!-- Modal Foto-->
            <div class="modal fade" id="foto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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



    <?php $this->load->view('masyarakat/components/js.php');?>

</body>

</html>