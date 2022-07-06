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

    <?php if ($this->session->flashdata('error_foto_surat_ket_lap')){ ?>
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

    <?php if ($this->session->flashdata('error_foto_kk_alm')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
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
                    <h1 class="h3 mb-2 text-gray-800">Pengajuan Izin Pemakaman</h1>
                    <form action="<?=base_url();?>Izin_Pemakaman_Jenazah/tambah_izin_pemakaman_jenazah" method="POST"
                        enctype="multipart/form-data">
                       
                        <div class="form-group">
                            <label for="tanggal_ditetapkan">Tanggal Ditetapkan</label>
                            <input type="date" class="form-control" id="tanggal_ditetapkan" name="tanggal_ditetapkan"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nama_alm">Nama Almarhum</label>
                            <input type="text" class="form-control" id="nama_alm" name="nama_alm" required>
                        </div>
                        <div class="form-group">
                            <label for="umur_alm">Umur Almarhum</label>
                            <input type="text" class="form-control" id="umur_alm" name="umur_alm" required>
                        </div>
                        <div class="form-group">
                            <label for="agama_alm">Agama Almarhum</label>
                            <input type="text" class="form-control" id="agama_alm" name="agama_alm" required>
                        </div>
                        <div class="form-group">
                            <label for="nik_alm">Nomor Induk Kependudukan</label>
                            <input type="text" class="form-control" id="nik_alm" name="nik_alm" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_meninggal">Tanggal Meninggal</label>
                            <input type="date" class="form-control" id="tanggal_meninggal" name="tanggal_meninggal"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kubur">Tanggal Kubur</label>
                            <input type="date" class="form-control" id="tanggal_kubur" name="tanggal_kubur" required>
                        </div>
                        <div class="form-group">
                            <label for="blok_petak">Blok/Peta</label>
                            <input type="text" class="form-control" id="blok_petak" name="blok_petak" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_pemakaman">Jenis Pemakaman</label>
                            <input type="text" class="form-control" id="jenis_pemakaman" name="jenis_pemakaman"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="foto_surat_ket_lap">Foto Surat Ket. Lap kematian</label>
                            <input type="file" class="form-control" id="foto_surat_ket_lap" name="foto_surat_ket_lap"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="foto_surat_pemeriksaan_jenazah">Foto Surat keterangan Pemeriksaan
                                Jenazah</label>
                            <input type="file" class="form-control" id="foto_surat_pemeriksaan_jenazah"
                                name="foto_surat_pemeriksaan_jenazah" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_kk_alm">Foto KK Almarhum</label>
                            <input type="file" class="form-control" id="foto_kk_alm" name="foto_kk_alm" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_surat_rekomendasi_dinas_pupr">Foto Surat Rekomendari Dari Dinas
                                PUPR</label>
                            <input type="file" class="form-control" id="foto_surat_rekomendasi_dinas_pupr"
                                name="foto_surat_rekomendasi_dinas_pupr" required>
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