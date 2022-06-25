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
                    <h1 class="h3 mb-2 text-gray-800">Pengajuan Izin Domisili Usaha</h1>

                    <form>
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_usaha">Nama Usaha</label>
                            <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_usaha">Alamat Usaha</label>
                            <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" required>
                        </div>
                        <div class="form-group">
                            <label for="kegiatan_usaha">Kegiatan Usaha</label>
                            <input type="text" class="form-control" id="kegiatan_usaha" name="kegiatan_usaha" required>
                        </div>
                        <div class="form-group">
                            <label for="berlaku_awal">Berlaku Awal</label>
                            <input type="date" class="form-control" id="berlaku_awal" name="berlaku_awal" required>
                        </div>
                        <div class="form-group">
                            <label for="berlaku_akhir">Berlaku Akhir</label>
                            <input type="date" class="form-control" id="berlaku_akhir" name="berlaku_akhir" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" required>
                            <small id="foto_ktp" class="form-text text-muted">Format
                                PNG/JPG/JPEG (Max
                                2MB)</small>
                        </div>
                        <div class="form-group">
                            <label for="foto_akta_usaha">Foto Pendirian Akta Usaha</label>
                            <input type="file" class="form-control" id="foto_akta_usaha" name="foto_akta_usaha"
                                required>
                            <small id="foto_akta_usaha" class="form-text text-muted">Format
                                PNG/JPG/JPEG (Max
                                2MB)</small>
                        </div>
                        <div class="form-group">
                            <label for="foto_pengantar_lurah_setempat">Foto Pengantar Lurah Setempat</label>
                            <input type="file" class="form-control" id="foto_pengantar_lurah_setempat"
                                name="foto_pengantar_lurah_setempat" required>
                            <small id="foto_pengantar_lurah_setempat" class="form-text text-muted">Format
                                PNG/JPG/JPEG (Max
                                2MB)</small>
                        </div>
                        <div class="form-group">
                            <label for="foto_bukti_lunas_pbb">Foto Bukti Lunas PBB Tahun Bejalan</label>
                            <input type="file" class="form-control" id="foto_bukti_lunas_pbb"
                                name="foto_bukti_lunas_pbb" required>
                            <small id="foto_bukti_lunas_pbb" class="form-text text-muted">Format
                                PNG/JPG/JPEG (Max
                                2MB)</small>
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