
<div class="tab-pane fade active show" id="nav-register2" role="tabpanel" aria-labelledby="nav-register-tab2">
    <form id="form4" class="form-group flex-wrap p-3" wire:submit.prevent="register">
        <div class="form-input col-lg-12 my-4">
            <label for="exampleInputNome4"
              class="form-label fs-6 text-uppercase fw-bold text-black">Nome
              </label>
            <input type="text" id="exampleInputEmail4" name="nome" placeholder="Nome"
              class="form-control ps-3">
              @error('nome')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
      <div class="form-input col-lg-12 my-4">
        <label for="exampleInputEmail4"
          class="form-label fs-6 text-uppercase fw-bold text-black">Email
          Address</label>
        <input type="text" id="exampleInputEmail4" name="email" placeholder="Email"
          class="form-control ps-3">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-input col-lg-12 my-4">
        <label for="inputPassword4"
          class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
        <input type="password" id="inputPassword4" placeholder="Password"
          class="form-control ps-3" aria-describedby="passwordHelpBlock">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <label class="py-3">
        <input type="checkbox" required="" class="d-inline">
        <span class="label-body text-black">I agree to the <a href="#"
            class="text-black password border-bottom">Privacy Policy</a>
        </span>
      </label>
      <div class="d-grid my-3">
        <button
          class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
          Up</button>
      </div>
    </form>
  </div>
