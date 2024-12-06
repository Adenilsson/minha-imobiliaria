<div class="tab-pane fade active show mt-5 mb-5" id="register-proprietario" role="tabpanel" aria-labelledby="nav-register-tab2">
    <div class="container">
        <h2 class="py-5">{{ $title }}</h2>

        <!-- Formulário de Busca -->
        <form id="form_proprietario" class="form-group flex-wrap p-3 " wire:submit.prevent="busca_proprietario">
            <div class="form-group row marg border border-light p-3">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <input type="text" class="form-control py-3" wire:model="search" placeholder="CPF">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none form-control py-3">
                        Buscar
                    </button>
                </div>
            </div>
            @error('search')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>

        <!-- Formulário de Registro -->
        <form id="form_proprietario" class="form-group flex-wrap p-3" wire:submit.prevent="register">
            <div class="row">
                <div class="form-input col-lg-8 my-4">
                    <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                        Nome
                    </label>
                    <input type="text" id="exampleInputNome4" name="nome" placeholder="Nome" class="form-control ps-3"  wire:model="nome">
                    @error('nome')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-4">
                    <label for="exampleInputCpf4" class="form-label fs-6 text-uppercase fw-bold text-white">
                        CPF/CNPJ
                    </label>
                    <input type="text" id="exampleInputCpf4" name="cpf" placeholder="CPF/CNPJ" class="form-control ps-3" wire:model="cpf">
                    @error('cpf')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-12 my-4">
                    <label for="exampleInputEmail4" class="form-label fs-6 text-uppercase fw-bold text-white">
                        Email
                    </label>
                    <input type="email" id="exampleInputEmail4" name="email" placeholder="Email" class="form-control ps-3" wire:model="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-4">
                    <label for="exampleInputDataNascimento4" class="form-label fs-6 text-uppercase fw-bold text-white">
                        Data de Nascimento
                    </label>
                    <input type="date" id="exampleInputDataNascimento4" name="data_de_nasc" placeholder="Data de Nascimento" class="form-control ps-3" wire:model="data_de_nasc">
                    @error('data_de_nascimento')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-4">
                    <label for="exampleInputTelefone4" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Telefone
                    </label>
                    <input type="text" id="exampleInputTelefone4" name="telefone" placeholder="Telefone" class="form-control ps-3" wire:model="telefone">
                    @error('telefone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-4">
                    <label for="exampleInputEstadoCivil4" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Estado Civil
                    </label>
                    <input type="text" id="exampleInputEstadoCivil4" name="estado_civil" placeholder="Estado Civil" class="form-control ps-3" wire:model="estado_civil">
                    @error('estado_civil')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-8"></div>
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 mt-2">
                    <a href="{{ route('home')}}" class="btn btn-secondary btn-lg btn-dark text-uppercase btn-rounded-none form-control ps-6">
                        Cancelar
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 mt-2">
                    <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none form-control ps-6">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
        @if (session()->has('register'))

            <div class="{{ session('status') == 'success' ? 'alert alert-success' : 'alert alert-danger' }}"> {{ session('register') }} </div>
        @endif
    </div>
</div>
