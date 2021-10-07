<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SIKA-YAKES TELKOM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <style type="text/css">
		.vertical-table {
            height: 400px;
            overflow-y: auto;
            overflow-x: auto;
            width: 100%;
		}
    </style>
<link href="<?php echo base_url().'../main.css'; ?>" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- HEADER -->
        <div class="app-header header-shadow">
            <!-- HEADER LOGO -->
            <div class="app-header__logo">
                <a href="<?php echo(base_url("Welcome/index")); ?>">
                <img class="img-fluid" width="75%" src="<?php echo base_url() ?>../assets/images/logo-sika2.png"></a>
            </button>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <!-- HEADER KANAN KIRI -->    
            <div class="app-header__content">
                <div class="app-header-left">
                    <ul class="header-menu nav">
                    </ul>        
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <div class="ml-3 header-user-info">
                                            <div class="widget-heading">
                                                <?php echo $nama_lengkap; ?>
                                            </div>
                                            <div class="widget-subheading">
                                                <?php echo $posisi; ?>
                                            </div>
                                        </div>
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="<?php echo(base_url("login/logout")); ?>"><button type="button" tabindex="0" class="dropdown-item">Log Out</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        <!-- WARNA HEADER -->       
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ISI -->        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">          
                                <li>
                                    <a href="<?php echo(base_url("Welcome/index")); ?>" class="
                                                <?php if ($this->session->page == "dashboard" ) {echo "mm-active"; } ?>">
                                        <i class="metismenu-icon fas fa-sitemap"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Kepesertaan</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-users-cog"></i>Transaksi Peserta
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="
                                        <?php  
                                            if ($this->session->page == "cari_peserta" || 
                                                $this->session->page == "input_kepala_keluarga" || 
                                                $this->session->page == "input_pasangan" || 
                                                $this->session->page == "input_anak") {
                                                echo "mm-show";
                                            }
                                        ?>
                                    ">
                                        <li>
                                            <a href="<?php echo(base_url("Transaksi/cariPeserta")); ?>" class="
                                                <?php if ($this->session->page == "cari_peserta" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon"></i>
                                                Cari Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("Transaksi/input_kepala_keluarga")); ?>" class="
                                                <?php if ($this->session->page == "input_kepala_keluarga" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Input Kepala Keluarga
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("Transaksi/input_pasangan")); ?>" class="
                                                <?php if ($this->session->page == "input_pasangan" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Input Pasangan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("Transaksi/input_anak")); ?>" class="
                                                <?php if ($this->session->page == "input_anak" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Input Anak
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Mutasi TPK
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="
                                                <?php if ($this->session->page == "foto_peserta" ) {echo "mm-active"; } ?>">
                                        <i class="metismenu-icon fas fa-camera"></i>
                                            Foto Peserta
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo(base_url("Welcome/print_kartu")); ?>" class="
                                                <?php if ($this->session->page == "print_kartu" ) {echo "mm-active"; } ?>">
                                        <i class="metismenu-icon fas fa-id-card"></i>
                                        Print Kartu
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo(base_url("Welcome/cek_kepesertaan")); ?>" class="
                                                <?php if ($this->session->page == "cek_kepesertaan" ) {echo "mm-active"; } ?>">
                                        <i class="metismenu-icon fas fa-user-secret"></i>
                                        Cek Kepesertaan
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo(base_url("Welcome/cek_hak")); ?>" class="
                                                <?php if ($this->session->page == "cek_hak" ) {echo "mm-active"; } ?>">
                                        <i class="metismenu-icon fas fa-procedures"></i>
                                        Cek Hak Kelas Rawat
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-chart-line"></i>
                                        Laporan
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Report Notifikasi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Data Kepesertaan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Rekapitulasi Transaksi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Report Pindah Kepala Keluarga
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Report Transaksi Meninggal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Report Anomali
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-calendar-week"></i>
                                        Closing Kepesertaan
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                Closing Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Kepesertaan Area
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Keuangan Area
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Master</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-cogs"></i>
                                        Master Data
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="
                                        <?php  
                                            if ($this->session->page == "area" || 
                                                $this->session->page == "personal_area" || 
                                                $this->session->page == "personal_subarea" || 
                                                $this->session->page == "kelompok_peserta" || 
                                                $this->session->page == "grup_jenis" || 
                                                $this->session->page == "jenis_peserta" || 
                                                $this->session->page == "rule_jenis_peserta" || 
                                                $this->session->page == "instansi" || 
                                                $this->session->page == "pekerjaan" || 
                                                $this->session->page == "divisi" || 
                                                $this->session->page == "bagian" || 
                                                $this->session->page == "bank" || 
                                                $this->session->page == "jenis_transaksi" || 
                                                $this->session->page == "kelompok_transaksi" || 
                                                $this->session->page == "band_posisi" || 
                                                $this->session->page == "band_pensiun" || 
                                                $this->session->page == "kota_kantor" || 
                                                $this->session->page == "hr_host" ||
                                                $this->session->page == "tpk" || 
                                                $this->session->page == "kelas_rawat_inap" || 
                                                $this->session->page == "provinsi" || 
                                                $this->session->page == "kabupaten" || 
                                                $this->session->page == "kecamatan" ) {
                                                echo "mm-show";
                                            }
                                        ?>
                                    ">
                                        <li>
                                            <a href="<?php echo(base_url("master_data/area")); ?>" class="
                                                <?php if ($this->session->page == "area" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Area
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/personal_area")); ?>" class="
                                                <?php if ($this->session->page == "personal_area" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Personal Area
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/personal_subarea")); ?>" class="
                                                <?php if ($this->session->page == "personal_subarea" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Personal Sub Area
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kelompok_peserta")); ?>" class="
                                                <?php if ($this->session->page == "kelompok_peserta" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kelompok Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/grup_jenis")); ?>" class="
                                                <?php if ($this->session->page == "grup_jenis" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Grup Jenis Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/jenis_peserta")); ?>" class="
                                                <?php if ($this->session->page == "jenis_peserta" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Jenis Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/rule_jenis_peserta")); ?>" class="
                                                <?php if ($this->session->page == "rule_jenis_peserta" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Rule Jenis Peserta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/instansi")); ?>" class="
                                                <?php if ($this->session->page == "instansi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Instansi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/pekerjaan")); ?>" class="
                                                <?php if ($this->session->page == "pekerjaan" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Pekerjaan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/divisi")); ?>" class="
                                                <?php if ($this->session->page == "divisi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Divisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/bagian")); ?>" class="
                                                <?php if ($this->session->page == "bagian" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Bagian
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/bank")); ?>" class="
                                                <?php if ($this->session->page == "bank" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Bank
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/jenis_transaksi")); ?>" class="
                                                <?php if ($this->session->page == "jenis_transaksi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Jenis Transaksi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kelompok_transaksi")); ?>" class="
                                                <?php if ($this->session->page == "kelompok_transaksi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kelompok Transaksi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/band_posisi")); ?>" class="
                                                <?php if ($this->session->page == "band_posisi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Band Posisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/band_pensiun")); ?>" class="
                                                <?php if ($this->session->page == "band_pensiun" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Band Posisi Pensiunan
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kota_kantor")); ?>" class="
                                                <?php if ($this->session->page == "kota_kantor" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kota Kantor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/hr_host")); ?>" class="
                                                <?php if ($this->session->page == "hr_host" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>HR Host
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/tpk")); ?>" class="
                                                <?php if ($this->session->page == "tpk" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>TPK
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kelas_rawat_inap")); ?>" class="
                                                <?php if ($this->session->page == "kelas_rawat_inap" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kelas Rawat Inap
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/provinsi")); ?>" class="
                                                <?php if ($this->session->page == "provinsi" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Provinsi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kabupaten")); ?>" class="
                                                <?php if ($this->session->page == "kabupaten" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kabupaten
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("master_data/kecamatan")); ?>" class="
                                                <?php if ($this->session->page == "kecamatan" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Kecamatan
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-users"></i>
                                        User Manajemen
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="
                                        <?php  
                                            if ($this->session->page == "data_users" || 
                                                $this->session->page == "role" ||  
                                                $this->session->page == "modules" ) {
                                                echo "mm-show";
                                            }
                                        ?>
                                    ">
                                        <li>
                                            <a href="<?php echo(base_url("user_manajemen/data_users")); ?>" class="
                                                <?php if ($this->session->page == "data_users" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon"></i>
                                                Data Users
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("user_manajemen/role")); ?>" class="
                                                <?php if ($this->session->page == "role" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Role &amp; Permissions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo(base_url("user_manajemen/modules")); ?>" class="
                                                <?php if ($this->session->page == "modules" ) {echo "mm-active"; } ?>">
                                                <i class="metismenu-icon">
                                                </i>Modules
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon fas fa-desktop"></i>
                                        Monitoring &amp; Update Data
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                API TELKOM
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>TELKOM - SIKA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>SIKA - MEDREC
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 