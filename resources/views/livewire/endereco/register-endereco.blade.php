<div id="endereco" class="tab-pane fade active show mt-5 mb-5" id="register-proprietario" role="tabpanel" aria-labelledby="nav-register-tab2">


    <div id="endereco" class="tab-pane fade active show mt-5 mb-5" role="tabpanel" aria-labelledby="nav-register-tab2">
        <div class="container">
            <h2 class="py-5">{{ $title }}</h2>
            <!-- Formulário de Registro -->
            <form id="form_proprietario" class="form-group flex-wrap p-3" wire:submit.prevent="salve">
                <div class="row">
                    <div class="form-input col-lg-6 my-4">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Logradouro
                        </label>
                        <input type="text" id="exampleInputNome4" name="logradouro" placeholder="Logradouro" class="form-control ps-3"  wire:model="logradouro">
                        @error('logradouro')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-input col-lg-2 my-4">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Número
                        </label>
                        <input type="text" id="exampleInputNome4" name="numero" placeholder="Númeor" class="form-control ps-3"  wire:model="numero">
                        @error('numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-input col-lg-2 my-4">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Apartamento
                        </label>
                        <input type="text" id="exampleInputNome4" name="apartamento" placeholder="Apartamento" class="form-control ps-3"  wire:model="apartamento">
                        @error('apartamento')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-input col-lg-2 my-4">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Bairro
                        </label>
                        <input type="text" id="exampleInputNome4" name="bairro" placeholder="Bairro" class="form-control ps-3"  wire:model="bairro">
                        @error('bairro')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <label for="pais" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Selecione o País
                        </label>
                        <select id="pais" name="pais_id" class="form-select " wire:model.lazy="pais_id">
                            <option value="">Selecione o País</option>
                            @foreach ($paises as $pais)
                                <option value="{{ $pais->id }}">{{ $pais->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="estado" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Selecione o Estado
                        </label>
                        <select id="estado" class="form-select  " wire:model.lazy="estado_id" @if(empty($pais_id)) disabled @endif>
                            <option value="">Selecione o Estado</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-lg-3">
                        <label for="estado" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Selecione a Cidade
                        </label>
                        <select id="estado" class="form-select " wire:model.lazy="cidade_id" @if(empty($estado_id)) disabled @endif>
                            <option value="">Selecione o Cidade</option>
                            @foreach ($cidades as $cidade)
                                <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-input col-lg-3">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            CEP
                        </label>
                        <input type="text" id="exampleInputNome4" name="cep" placeholder="Cep" class="form-control ps-3"  wire:model="cep">
                        @error('cep')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-input col-lg-12">
                        <label for="exampleInputNome4" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Complemento
                        </label>
                        <textarea  id="exampleInputNome4" name="complemento" placeholder="Complemento" class="form-control ps-3" rows="2"  wire:model="complemento"></textarea>
                        @error('complemento')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
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
        </div>
    </div>

</div>
