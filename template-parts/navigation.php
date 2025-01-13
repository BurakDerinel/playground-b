<header class="header sticky-top">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo-Bereich -->
            <div class="logo col-4">
                <a href="<?php echo home_url('/'); ?>">
                    <img class="logo d-none d-sm-block" src="<?php echo get_theme_file_uri('img/pial-logo.png'); ?>" alt="Logo">
                    <img class="logo d-block d-sm-none" src="<?php echo get_theme_file_uri('img/pial-logo-xs.png'); ?>" alt="Logo klein">
                </a>
            </div>

            <!-- Scroll-Menü -->
            <div class="dropdown col-2 d-xs-block d-md-none text-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Scroll Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#msgpia">MSG.PIA</a></li>
                    <li><a class="dropdown-item" href="#msgcia">MSG.CIA</a></li>
                    <li><a class="dropdown-item" href="#t2m">T2M (TIME TO MARKET)</a></li>
                </ul>
            </div>

            <!-- Navigationsleiste -->
            <div class="col-6 offset-xs-2 offset-md-2">
                <nav class="navbar">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pial-produkte'); ?>">Produkte</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('leistungen'); ?>">Leistungen</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('unternehmen'); ?>">Unternehmen</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('referenzen'); ?>">Referenzen</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('kontakt'); ?>">Kontakt</a></li>
                    </ul>

                    <!-- Toggle-Menü -->
                    <div class="toggle_btn">
                        <a href="#">Menu</a>
                    </div>

                    <div class="dropdown_menu">
                        <li class="nav-item"><a href="<?php echo site_url('pial-produkte'); ?>">Produkte</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('leistungen'); ?>">Leistungen</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('unternehmen'); ?>">Unternehmen</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('referenzen'); ?>">Referenzen</a></li>
                        <li class="nav-item"><a href="<?php echo site_url('kontakt'); ?>">Kontakt</a></li>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
