<div>
    <br><br><br><br><br><br><br><br>

    <div>
        {{ $title }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" wire:model.lazy="nome">
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <p class="bg-light">Este é meu nome: {{ $nome }}</p>
    </div>



    <br><br><br><br><br><br><br><br>

</div>
