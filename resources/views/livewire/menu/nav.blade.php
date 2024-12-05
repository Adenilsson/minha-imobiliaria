<header id="nav" class="site-header position-fixed text-white bg-dark border-bottom border-light">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('storage/images/logo.png')}}"></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <ion-icon name="menu-outline" style="font-size: 30px;"></ion-icon>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end align-items-center flex-grow-1">
                        <li class="nav-item"><a class="nav-link active me-md-4" href="{{ route('home').'#billboard' }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link me-md-4" href="#residence">Properties</a></li>
                        <li class="nav-item"><a class="nav-link me-md-4" href="#about-us">About</a></li>
                        <li class="nav-item"><a class="nav-link me-md-4" href="{{ route('register-endereco')}}">Contact</a></li>

                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link me-md-4 text-center dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cadastros</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="{{ route('register-endereco').'#endereco'}}" class="dropdown-item">Imoveis</a></li>
                                <li><a href="{{ route('register-propietario').'#register-proprietario' }}" class="dropdown-item">Proprietáio</a></li>
                                <li><a href="#" class="dropdown-item">Endereço </a></li>
                                <li><a href="#" class="dropdown-item">Properties </a></li>
                                <li><a href="#" class="dropdown-item">Property-Single </a></li>
                                <li><a href="#" class="dropdown-item">Contact </a></li>
                                <li><a href="#" class="dropdown-item">Review <span class="badge bg-secondary">PRO</span></a></li>
                                <li><a href="#" class="dropdown-item">Agents</a></li>
                                <li><a href="#" class="dropdown-item">FAQs</a></li>
                                <li><a href="#" class="dropdown-item">Styles</a></li>
                            </ul>
                        </li>
                        @endauth
                        @auth
                        <li class="nav-item">
                            <a class="btn-medium btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Sign Up</a>
                        </li>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing mt-4">
                                            <div class="tab-content" id="nav-tabContent1">
                                                    <livewire:auth.register>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                        @guest
                            <li class="nav-item"><a class="nav-link mx-md-4 ms-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a></li>
                        @endguest
                        @auth
                            <li class="nav-item ms-2">
                                <livewire:auth.logout />
                            </li>
                        @endauth
                        @guest
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing mt-4">
                                            <div class="tab-content" id="nav-tabContent">
                                                <livewire:auth.login>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing mt-4">
                                            <div class="tab-content" id="nav-tabContent">
                                                <livewire:auth.reset-password-component>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endguest


                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
