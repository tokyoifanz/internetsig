    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('landing/index'); ?>"><i class='uil uil-user'></i>Ours</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="<?= base_url('landing/about'); ?>" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('landing/workflow'); ?>" class="nav-link"><span data-hover="Workflow">Workflow</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('landing/analysis'); ?>" class="nav-link"><span data-hover="Analysis">Analysis</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('landing/us'); ?>" class="nav-link"><span data-hover="About Us">About Us</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>