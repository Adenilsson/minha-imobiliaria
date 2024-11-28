<div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel" aria-labelledby="nav-sign-in-tab">
    <form id="form1" class="form-group flex-wrap p-3" wire:submit.prevent="login">
        <div class="form-input col-lg-12 my-4">
            <label for="exampleInputEmail1" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
            <input type="text" id="exampleInputEmail1" name="email" placeholder="Email" wire:model="email" class="form-control ps-3">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword1" class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
            <input type="password" id="inputPassword1" placeholder="Password" class="form-control ps-3" aria-describedby="passwordHelpBlock" wire:model="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div id="passwordHelpBlock" class="form-text text-center">
                <a href="#" class="password">Recuperar Password?</a>
            </div>
        </div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <label class="py-3">
            <input type="checkbox" required class="d-inline">
            <span class="label-body text-black">Lembre-me</span>
        </label>
        <div class="d-grid my-3">
            <button type="submit" class="btn btn-dark btn-lg text-uppercase fs-6">Entrar</button>
        </div>
    </form>
</div>

