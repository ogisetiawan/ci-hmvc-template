<div class="container">
  <div class="row">
    <form class="form-signin col-sm-9 col-md-6 col-lg-3 col-8 mx-auto" id="form-login" name="form_login">
      <div class="text-center mb-4">
        <img src="<?= base_url('assets/img/new_logo.png') ?>" class="img-fluid" style="width: 50%; height: 50%" alt="Logo Nabati Group">
      </div>
      <!-- <div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>ggg
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div> -->
      <div class="spinner show">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
      <div class="login hide" id="login-containter">
        <div class="form-label-group mb-3">
          <input type="text" id="inputEmail" name="mail" class="form-control lemail" placeholder="Email address" autofocus required />
          <label for="inputEmail"><i class="fas fa-envelope-open fa-sm" aria-hidden="true"></i> &nbsp;Username</label>
          <div id="error-mail" class="invalid-feedback" style="display:inline-block"></div>
        </div>
        <div class="form-label-group mb-3">
          <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" autocomplete="off" required>
          <label for="inputPassword"><i class="fas fa-lock fa-sm" aria-hidden="true"></i> &nbsp;Password</label>
          <div id="error-pass" class="invalid-feedback" style="display:inline-block"></div>
        </div>
        <div class="custom-control custom-checkbox mb-3 text-muted" style="margin-top:1rem!important">
          <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="chk" style="font-size:12px" onchange="showPassword()">
          <label class="custom-control-label text-monospace" for="customControlAutosizing" style="font-size:14px">Show Password</label>
        </div>
        <button class="btn btn-md btn-danger btn-raised btn-block active ladda-login" type="submit" id="btn-login"> Log In</button>
        <p class="text-center text-danger mt-1" id="forgot-pass" style="font-size:12px; cursor:pointer;">Forgot Password?</p>
      </div>
      <div style="display:none;" id="lost-containter">
        <div class="form-label-group mb-3">
          <input type="text" id="inputLostEmail" name="lost_mail" class="form-control femail" placeholder="Email address" required />
          <label for="inputLostEmail"><i class="fas fa-envelope-open fa-sm" aria-hidden="true"></i> &nbsp;Email address</label>
          <div id="error-lostmail" class="invalid-feedback" style="display:inline-block"></div>
        </div>
        <button class="btn btn-md btn-danger btn-raised btn-block active ladda-login" type="submit" id="btn-login"> Log In</button>
        <p class="text-center text-danger mt-1" id="back" style="font-size:12px; cursor:pointer;">Back?</p>
      </div>
      <p class="text-center" style="margin-top: 3rem !important;"> @2019</p>
    </form>
  </div>
</div>