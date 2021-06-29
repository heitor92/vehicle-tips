<header>
    <nav class="navbar navbar-dark bg-dark border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                {{ $name }}
            </a>
            <div class="d-flex">
                @if (array_key_exists('name', $user))
                <div class="dropdown">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><span class="dropdown-item-text"><strong>Usuário: {{ $user['name'] }}</strong></span></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" onclick="LoginUser.logout()">Sign out</a></li>
                    </ul>
                </div>
                @else
                    <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginUser">Login</button>
                    <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#signUpUser">Sign Up</button>
                @endif

               
            </div>
        </div>
    </nav>
    {{ $slot }}
</header>