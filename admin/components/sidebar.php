<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
                <img
                    src="personal-profile-native-aqeel/template/admin/assets/img/kaiadmin/logo_light.svg"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Daftar Menu</h4>
                </li>
                <li class="nav-item <?= $fitur == 'dashboard' ? 'active' : '' ?>">
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $fitur == 'home' ? 'active' : '' ?>">
                    <a href="index.php?fitur=home">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item <?= $fitur == 'about' ? 'active' : '' ?>">
                    <a href="index.php?fitur=about">
                        <i class="fas fa-address-card"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=stat_skills">
                        <i class="fas fa-chart-line"></i>
                        <p>Stats & Skills</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=resume">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Resume</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=portfolio">
                        <i class="fas fa-grin-stars"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=services_testi">
                        <i class="far fa-thumbs-up"></i>
                        <p>Services & Testimoni</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=contact">
                        <i class="far fa-hand-point-right"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?fitur=form">
                        <i class="fab fa-wpforms"></i>
                        <p>Form</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="pages/login/logout.php">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>