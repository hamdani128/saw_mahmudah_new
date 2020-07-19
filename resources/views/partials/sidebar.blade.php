<div class="left-side-menu">

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!-- LOGO -->
        <a href="#" class="logo text-center">
            <span class="logo-lg">
                <img src="assets/images/telkom.png" alt="" height="16" id="side-main-logo">
            </span>
            <span class="logo-sm">
                <img src="assets/images/telkom.png" alt="" height="16" id="side-sm-main-logo">
            </span>
        </a>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Alternatif</li>

            <li class="side-nav-item">
                <a href="{{ route('alternatif') }}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Data Tim </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Criteria</li>
            <li class="side-nav-item">
                <a href="{{ route('kriteria') }}"class="side-nav-link">
                    <i class="uil-layers-alt"></i>
                    <span> Kriteria </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item mt-1">Assesment</li>
            <li class="side-nav-item">
                <a href="{{ route('penilaian') }}"  class="side-nav-link">
                    <i class="uil-file-edit-alt"></i>
                    <span> Penilaian </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item mt-1">SAW Methode</li>
            <li class="side-nav-item">
                <a href="{{ route('saw') }}" class="side-nav-link">
                    <i class="uil-bright"></i>
                    <span> Perhitungan </span>
                </a>
            </li>
        </ul>

        <!-- Help Box -->
     
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>