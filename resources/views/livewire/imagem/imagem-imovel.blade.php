<div class="row shadow-lg p-3 mb-5 bg-white rounded mt-2" style="border-radius: 10px;">
    <h2 id="cad" class="mb-4">Upload de Imagem</h2>
    <hr>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form id="uploadForm" wire:submit="save">
        @csrf
        <div class="row">
            <div class="col-12 col sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1 mb-3">
                @if ($imagem1)
                    <div>
                        <img src="{{ $imagem1->temporaryUrl() }}" class="img-preview mt-2" alt="Pré-visualização da Imagem">
                    </div>
                @endif
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                <input type="file" class=" form-control form-control-lg mt-3" id="imagem" wire:model="imagem1" accept="image/*">
                @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <div class="form-check">
                        <input class="form-check-input mt-4" name="capa" type="radio" value="1" wire:model="capa1" id="capa1" checked>
                        <label class="form-check-label mt-3" for="capa1">Capa</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" type="checkbox" value="" wire:model="excuido1" id="defaultCheck1">
                    <label class="form-check-label mt-3" for="defaultCheck1">
                      Excluir
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1 mb-3">
                @if ($imagem2)
                    <div>
                        <img src="{{ $imagem2->temporaryUrl() }}" class="img-preview mt-2" alt="Pré-visualização da Imagem">
                    </div>
                @endif
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                <input type="file" class=" form-control form-control-lg mt-3" id="imagem" wire:model="imagem2" accept="image/*">
                @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" name="capa" type="radio" value="1" wire:model="capa2" id="capa1">
                    <label class="form-check-label mt-3" for="capa1">Capa</label>
                </div>
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" type="checkbox" value="" wire:model="excuido2" id="defaultCheck1">
                    <label class="form-check-label mt-3" for="defaultCheck1">
                      Excluir
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1 mb-3">
                @if ($imagem3)
                    <div>
                        <img src="{{ $imagem3->temporaryUrl() }}" class="img-preview mt-2" alt="Pré-visualização da Imagem">
                    </div>
                @endif
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                <input type="file" class=" form-control form-control-lg mt-3" id="imagem" wire:model="imagem3" accept="image/*">
                @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" name="capa" type="radio" value="1" wire:model="capa3" id="capa1">
                    <label class="form-check-label mt-3" for="capa1">Capa</label>
                </div>
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" type="checkbox" value="" wire:model="excuido3" id="defaultCheck1">
                    <label class="form-check-label mt-3" for="defaultCheck1">
                      Excluir
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1 mb-3">
                @if ($imagem4)
                    <div>
                        <img src="{{ $imagem4->temporaryUrl() }}" class="img-preview mt-2" alt="Pré-visualização da Imagem">
                    </div>
                @endif
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                <input type="file" class=" form-control form-control-lg mt-3" id="imagem" wire:model="imagem4" accept="image/*">
                @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" name="capa" type="radio" value="1" wire:model="capa4" id="capa1">
                    <label class="form-check-label mt-3" for="capa1">Capa</label>
                </div>
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" type="checkbox" value="" wire:model="excuido4" id="defaultCheck1">
                    <label class="form-check-label mt-3" for="defaultCheck1">
                      Excluir
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col sm-12 col-md-12 col-lg-1 col-xl-1 col-xxl-1 mb-3">
                @if ($imagem5)
                    <div>
                        <img src="{{ $imagem5->temporaryUrl() }}" class="img-preview mt-2" alt="Pré-visualização da Imagem">
                    </div>
                @endif
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 mb-3">
                <input type="file" class=" form-control form-control-lg mt-3" id="imagem" wire:model="imagem5" accept="image/*">
                @error('imagem') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" name="capa" type="radio" value="1" wire:model="capa5" id="capa1">
                    <label class="form-check-label mt-3" for="capa1">Capa</label>
                </div>
            </div>
            <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3">
                <div class="form-check">
                    <input class="form-check-input mt-4" type="checkbox" value="" wire:model="excuido5" id="defaultCheck1">
                    <label class="form-check-label mt-3" for="defaultCheck1">
                      Excluir
                    </label>
                </div>
            </div>
        </div>
        <canvas id="canvas" style="display:none;"></canvas>
        <div class="col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3 text-end"></div>
        <div class=" text-end">
            <livewire:forms.cancelar />
            <button type="submit" class="btn btn-primary col-12 col sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 mb-3 py-3">Salvar</button>
        </div>
    </form>
</div>
