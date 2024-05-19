<nav class="container navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- site logo -->
        <?php fintech_top_logo(); ?>

        <!-- navigation button -->
        <button class="navbar-toggler" type="button" onclick="openNav()"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- navigation bar menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php fintech_primary_menus(); ?>
            <ul class="navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="search-bar-bt" class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <li class="nav-item header_btn">
                    <a class="nav-link nav-hrf btn-hover1" href="#">Create Account</a>
                </li>
                <li class="nav-item" onclick="open_right_side()">
                    <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
