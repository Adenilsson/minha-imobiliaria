<div id="endereco" class="tab-pane fade active show mt-5 mb-5" id="register-proprietario" role="tabpanel" aria-labelledby="nav-register-tab2">


    <div id="endereco" class="tab-pane fade active show mt-5 mb-5" role="tabpanel" aria-labelledby="nav-register-tab2">
        <div class="container">
            <h2 class="py-5">{{ $title }}</h2>
            <!-- Formulário de Registro -->
            <form id="form_proprietario" class="form-group flex-wrap p-3" wire:submit.prevent="register">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="pais" class="form-label fs-6 text-uppercase fw-bold text-white">
                            Selecione o País
                        </label>
                        <select id="pais" nome="pais_id" class="form-select mb-2 mb-lg-0" wire:model.lazy="pais_id">
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
                        <select id="estado" class="form-select mb-2 mb-lg-0" wire:model="estado_id" @if(empty($pais_id)) disabled @endif>
                            <option value="">Selecione o Estado</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
