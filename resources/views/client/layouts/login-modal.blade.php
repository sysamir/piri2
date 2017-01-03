<form id="sign_in" method="POST" action="{{ url('/login') }}">
	{{ csrf_field() }}
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">Hesaba daxil olmaq</h4>
</div>

<div class="modal-body">
	<div class="row gap-20">

		<!-- <div class="col-md-6">
			<button class="btn btn-facebook btn-block">Log-in with Facebook</button>
		</div>
		<div class="col-md-6">
			<button class="btn btn-google-plus btn-block">Log-in with Google+</button>
		</div>

		<div class="col-md-12">
			<div class="login-modal-or">
				<div><span>or</span></div>
			</div>
		</div> -->

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>E-poçt</label>
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<input name="email" value="{{ old('email') }}" autofocus required class="form-control" placeholder="e-poçt ünvanın daxil edin" type="text">
				@if ($errors->has('email'))
						<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
						</span>
				@endif
			</div>
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Şifrə</label>
				<input name="password" class="form-control" placeholder="şifrənizi daxil edin" type="password" required>
				@if ($errors->has('password'))
						<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
						</span>
				@endif
			</div>

		</div>

		<div class="col-sm-6 col-md-6">
			<div class="checkbox-block">
				<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox">
				<label class="" for="remember_me_checkbox">Xatırla</label>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="login-box-link-action">
				<a data-toggle="modal" href="#forgotPasswordModal">Şifrəni unutmusan?</a>
			</div>
		</div>

		<div class="col-sm-12 col-md-12">
			<div class="register-box-box-action">
				Hesabın yoxdur? <a data-toggle="modal" href="javascript:void(0)" class="registerModal">Pulsuz qeydiyyat</a>
			</div>
		</div>

	</div>
</div>


<div class="modal-footer text-center">
	<button type="submit" class="btn btn-primary">Daxil ol</button>
	<button type="button" data-dismiss="modal" class="btn btn-default modalClose">Bağla</button>
</div>
</form>
