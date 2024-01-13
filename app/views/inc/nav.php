<div class="">
    <nav class=" container-fluid navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="<?=URLROOT."assets/img/favicon.png"?>" width="80px" alt="">
                MBCCD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Languages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PHP</a></li>
                            <li><a class="dropdown-item" href="#">Python</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (getSessionUser()): ?>
                                <?=getSessionUser()->name ?>
                            <?php else : ?>
                                <?="Member"?>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (getSessionUser()) : ?>
                                <li><a class="dropdown-item" href="<?=URLROOT."user/logout"?>">Logout</a></li>
                            <?php else:?>
                                <li><a class="dropdown-item" href="<?=URLROOT."user/login"?>">Login</a></li>
                                <li><a class="dropdown-item" href="<?=URLROOT."user/register"?>">Register</a></li>
                            <?php endif;?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
