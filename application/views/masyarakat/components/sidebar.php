<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?=base_url();?>assets/logo_camat.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">APP-AKCIB</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?=base_url();?>Dashboard/dashboard_masyarakat">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item" style="<?php if($masyarakat_data['id_status_verifikasi'] == 3){
                            echo "";
                         }else{
                            echo "display:none;";
                         }
                         ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengajuan Surat</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengajuan</h6>
                <a class="collapse-item" href="<?=base_url();?>Pengajuan/pengajuan_izin_domisili_masyarakat">Izin
                    Domisili</a>
                <a class="collapse-item" href="<?=base_url();?>Pengajuan/pengajuan_izin_media_reklame_masyarakat">Izin
                    Media Reklame</a>
                <a class="collapse-item"
                    href="<?=base_url();?>Pengajuan/pengajuan_izin_pemakaman_jenazah_masyarakat">Izin Pemakaman</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Izin_Domisili/view_masyarakat">
            <i class="fas fa-fw fa-table"></i>
            <span>Izin Domisili</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Izin_Media_Reklame/view_masyarakat">
            <i class="fas fa-fw fa-table"></i>
            <span>Izin Media Reklame</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Izin_Pemakaman_Jenazah/view_masyarakat">
            <i class="fas fa-fw fa-table"></i>
            <span>Izin Pemakaman</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Settings/view_masyarakat">
            <i class="fas fa-fw fa-table"></i>
            <span>Settings</span></a>
    </li>

    <li class="nav-item" style="<?php if($masyarakat_data['id_status_verifikasi'] == 3){
                            echo "display:none;";
                         }else{
                            echo "";
                         }
                         ?>">
        <a class="nav-link" href="<?=base_url();?>Lengkapi_Data/view_masyarakat">
            <i class="fas fa-fw fa-table"></i>
            <span>Lengkapi Data</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>