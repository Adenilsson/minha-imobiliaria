<div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
    <form id="form2" class="form-group flex-wrap p-3"  wire:submit.prevent="login">
        <div class="form-input col-lg-12 my-4">
            <label for="exampleInputEmail2" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
            <input type="text" id="exampleInputEmail2" name="email" placeholder="Email" class="form-control ps-3">
        </div>
        <div class="form-input col-lg-12 my-4">
            <label for="inputPassword2" class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
            <input type="password" id="inputPassword2" placeholder="Password" class="form-control ps-3" aria-describedby="passwordHelpBlock">
        </div>
        <label class="py-3">
            <input type="checkbox" required class="d-inline">
            <span class="label-body text-black">I agree to the <a href="#" class="text-black password border-bottom">Privacy Policy</a></span>
        </label>
        <div class="d-grid my-3">
            <button type="submit" class="btn btn-dark btn-lg text-uppercase fs-6">Sign Up</button>
        </div>
    </form>
</div>
