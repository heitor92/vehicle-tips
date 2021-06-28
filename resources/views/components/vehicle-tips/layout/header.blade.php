<header>
    <nav class="navbar navbar-dark bg-dark border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30"
                    height="24" class="d-inline-block align-text-top">
                VehicleTips
            </a>
            <div class="d-flex">
                <div class="dropdown text-end invisible">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginUser">Login</button>
                <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#signUpUser">Sign Up</button>
            </div>
        </div>
    </nav>
    {{ $slot }}
</header>