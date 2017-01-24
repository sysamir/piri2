<form class="" method="POST" action="{{ url('/adduser') }}">
	 {{ csrf_field() }}
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title text-center">Qeydiyyat</h4>
</div>

<div class="modal-body">

	<div class="row gap-20">


		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>E-Poçt ünvanı</label>
				<input name="email" class="form-control" placeholder="e-poçt ünvanın daxil edin" type="text" required>
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Şifrə</label>
				<input name="password" class="form-control" placeholder="şifrə ən az 6 simvol olmalıdır" type="password" required>
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Şifrənin təkrarı</label>
				<input name="password_confirmation" class="form-control" placeholder="şifrəni yenidən daxil edin" type="password" required>
			</div>

		</div>

		<div class="col-sm-12 col-md-12">

			<div class="form-group">
				<label>Qeydiyyat növü</label>
				<select class="form-control" name="tip" required>
					<option value="user">İstifadəçi</option>
					<option value="comp">Şirkət</option>
				</select>
			</div>

		</div>

		<div class="col-sm-12 col-md-12">
			<div class="checkbox-block">
				<label class="" >Siz qeydiyyatdan keçməklə <a href="#">saytdaxili qaydaları</a> qəbul edirsiniz.</label>
			</div>
		</div>

		<div class="col-sm-12 col-md-12">
			<div class="login-box-box-action">
				Hesabın var? <a data-toggle="modal" href="#loginModal">Daxil ol</a>
			</div>
		</div>

	</div>

</div>

<div class="modal-footer text-center">
	<button type="submit" class="btn btn-primary">Göndər</button>
	<button type="button" data-dismiss="modal" class="btn btn-default">Bağla</button>
</div>
</form>
