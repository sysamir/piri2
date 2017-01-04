
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<div class="modal-body">

	<div class="row gap-20">

		<div class="col-md-6">
			<button class="btn btn-facebook btn-block">Register with Facebook</button>
		</div>
		<div class="col-md-6">
			<button class="btn btn-google-plus btn-block">Register with Google+</button>
		</div>

		<div class="col-md-12">
			<div class="login-modal-or">
				<div><span>or</span></div>
			</div>
		</div>

		<form class="" method="POST" action="{{ url('/') }}">
			 {{ csrf_field() }}




		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Username</label>
				<input class="form-control" value="{{ old('name') }}" name="name" placeholder="Min 4 and Max 10 characters" type="text">
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Email Address</label>
				<input class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email address" type="text">
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Password</label>
				<input class="form-control" name="password" value="{{ old('password') }}" placeholder="Min 8 and Max 20 characters" type="text">
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Password Confirmation</label>
				<input class="form-control" name="password_confirmation" placeholder="Re-type password again" type="text">
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Qeydiyyat növü</label>
				<select class="form-control" name="tip">
					<option value="user">İstifadəçi</option>
					<option value="comp">Şirkət</option>
				</select>
			</div>

		</div>

		<div class="modal-footer text-center">
			<button type="submit" class="btn btn-primary">Log-in</button>
			<button type="submit" data-dismiss="modal" class="btn btn-default">Close</button>
		</div>
			</form>


		<div class="col-sm-12 col-md-12">
			<div class="checkbox-block">
				<input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
				<label class="" for="register_accept_checkbox">By register, I read &amp; accept <a href="#">the terms</a></label>
			</div>
		</div>

		<div class="col-sm-12 col-md-12">
			<div class="login-box-box-action">
				Already have account? <a data-toggle="modal" href="#loginModal">Log-in</a>
			</div>
		</div>

	</div>

</div>
