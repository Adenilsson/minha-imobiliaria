<div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
    @if (session()->has('message'))
        <div class="alert alert-success">

            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Formulário de Envio de Link de Redefinição de Senha -->
    <form wire:submit.prevent="sendResetLinkEmail">
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
            <input type="email" id="email" wire:model="email" class="form-control">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="d-grid my-3">
            <button type="submit" class="btn btn-primary">Enviar Link de Redefinição</button>
        </div>
    </form>

    <!-- Formulário de Redefinição de Senha -->
    <form wire:submit.prevent="resetPassword">
        <input type="hidden" wire:model="token">
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
            <input type="email" id="email" wire:model="email" class="form-control" readonly>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">New Password</label>
            <input type="password" id="password" wire:model="password" class="form-control">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">Confirm Password</label>
            <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-control">
            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="d-grid my-3">
            <button type="submit" class="btn btn-primary">Redefinir Senha</button>
        </div>
    </form>

</div>
