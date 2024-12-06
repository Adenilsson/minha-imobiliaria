<div class="tab-pane fade active show mt-5 mb-5" id="register-imovel" role="tabpanel" aria-labelledby="nav-register-tab2">
    <div class="container">
        <h2 class="py-5">{{ $title }}</h2>
        <!-- Formulário de Registro -->
        <form id="form_imovel" class="form-group flex-wrap p-3" wire:submit.prevent="salve">
            <div class="row">
                <div class="col-lg-4 my-2">
                    <label for="tipo_imovel" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Tipo do Imóvel
                    </label>
                    <select id="tipo_imovel" name="tipo_imovel" class="form-select" wire:model.lazy="tipo_imovel_id">
                        <option value="">Selecione o tipo do Imóvel</option>
                        @foreach ($tipo_imoveis as $tipo_imovel)
                            <option value="{{ $tipo_imovel->id }}">{{ $tipo_imovel->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="area_construida" class="form-label fs-6 text-uppercase fw-bold text-white">
                        Área Construída em M&sup2;
                    </label>
                    <input type="number" id="area_construida" name="area_construida" placeholder="Área Construída em M&sup2;" class="form-control ps-3" wire:model="area_construida">
                    @error('area_construida')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="area_total" class="form-label fs-6 text-uppercase fw-bold text-white">
                        Área Total em M&sup2;
                    </label>
                    <input type="number" id="area_total" name="area_total" placeholder="Área Total em M&sup2;" class="form-control ps-3" wire:model="area_total">
                    @error('area_total')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="quartos" class="form-label fs-6 text-uppercase fw-bold text-white">
                       N&ordm; Quartos
                    </label>
                    <input type="number" id="quartos" name="quartos" placeholder="N&ordm; Quartos" class="form-control ps-3" wire:model="quartos">
                    @error('quartos')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="banheiros" class="form-label fs-6 text-uppercase fw-bold text-white">
                       N&ordm; Banheiros
                    </label>
                    <input type="number" id="banheiros" name="banheiros" placeholder="N&ordm; Banheiros" class="form-control ps-3" wire:model="banheiros">
                    @error('banheiros')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="garagem" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Vagas de Garagem
                    </label>
                    <input type="number" id="garagem" name="garagem" placeholder="Vagas de Garagem" class="form-control ps-3" wire:model="garagem">
                    @error('garagem')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-input col-lg-12 my-4">
                    <label for="descricao_imovel" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Descrição do Imóvel
                    </label>
                    <textarea id="descricao_imovel" rows="3" name="descricao_imovel" placeholder="Descreva o Imóvel" class="form-control ps-3" wire:model="descricao_imovel"></textarea>
                    @error('descricao_imovel')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 my-2">
                    <label for="condicao_imovel" class="form-label fs-6 text-uppercase fw-bold text-white">
                      Condição do Imóvel
                    </label>
                    <select id="condicao_imovel" name="condicao_imovel" class="form-select" wire:model.lazy="condicao_id">
                        <option value="">Selecione a Condição do Imóvel</option>
                        @foreach ($condicoes as $condicao)
                            <option value="{{ $condicao->id }}">{{ $condicao->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4 my-2">
                    <label for="pretencao" class="form-label fs-6 text-uppercase fw-bold text-white">
                      Qual a sua Intenção
                    </label>
                    <select id="pretencao" name="pretencao" class="form-select" wire:model.lazy="pretencao_id">
                        <option value="">Selecione a Intenção</option>
                        @foreach ($pretencoes as $pretencao)
                            <option value="{{ $pretencao->id }}">{{ $pretencao->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-input col-lg-4 my-2">
                    <label for="valor" class="form-label fs-6 text-uppercase fw-bold text-white">
                       Informe o Valor
                    </label>
                    <input type="text" id="valor" name="valor" placeholder="Informe o valor do Imóvel" class="form-control ps-3" wire:model="valor">
                    @error('valor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-8"></div>
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 mt-2">
                    <a href="{{ route('home') }}" class="btn btn-secondary btn-lg btn-dark text-uppercase btn-rounded-none form-control ps-6">
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
            <div class="{{ session('status') == 'success' ? 'alert alert-success' : 'alert alert-danger' }}">
                {{ session('register') }}
            </div>
        @endif
    </div>
</div>
