<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('masyarakat/components/head.php');?>

</head>

<body id="page-top">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil !",
        text: "Pengajuan Berhasil Dikirim!",
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
                    <h1 class="h3 mb-2 text-gray-800">Pengajuan Izin Media Reklame</h1>

                    <form action="<?=base_url();?>Izin_Media_Reklame/tambah_izin_media_reklame" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="berlaku_awal">Berlaku Awal</label>
                            <input type="date" class="form-control" id="berlaku_awal" name="berlaku_awal" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="berlaku_akhir">Berlaku Akhir</label>
                            <input type="date" class="form-control" id="berlaku_akhir" name="berlaku_akhir" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_reklame">Jenis Reklame</label>
                            <input type="text" class="form-control" id="jenis_reklame" name="jenis_reklame" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="number" class="form-control" id="ukuran" name="ukuran" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_reklame">Lokasi Reklame</label>
                            <input type="text" class="form-control" id="lokasi_reklame" name="lokasi_reklame" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="foto_ktp_pemohon">Foto KTP Pemohon</label>
                            <input type="file" class="form-control" id="foto_ktp_pemohon" name="foto_ktp_pemohon"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_sketsa_lokasi">Foto Sketsa Lokasi Reklame</label>
                            <input type="file" class="form-control" id="foto_sketsa_lokasi" name="foto_sketsa_lokasi"
                                value="" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_desain">Foto Desain Reklame</label>
                            <input type="file" class="form-control" id="foto_desain" name="foto_desain" value=""
                                required>
                        </div>
                        <div class="form-group">
                            <label for="foto_bukti_lunas_pbb">Foto Bukti Lunas PBB Tahun Berjalan</label>
                            <input type="file" class="form-control" id="foto_bukti_lunas_pbb"
                                name="foto_bukti_lunas_pbb" value="" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

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